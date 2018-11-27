<p align="center">
  <img src="https://github.com/shimabox/assets/raw/master/pemojine/logo.png" alt="pemojine-logo" title="Pemojine" height="300px">
</p>

# Pemojine

Pemojine is a library for handling Emoji in PHP.

[![License](https://poser.pugx.org/shimabox/pemojine/license)](https://packagist.org/packages/shimabox/pemojine)
[![Latest Stable Version](https://poser.pugx.org/shimabox/pemojine/v/stable)](https://packagist.org/packages/shimabox/pemojine)
[![Latest Unstable Version](https://poser.pugx.org/shimabox/pemojine/v/unstable)](https://packagist.org/packages/shimabox/pemojine)

![demo](https://github.com/shimabox/assets/raw/master/pemojine/demo.gif)

This library is getting data from here.

- [Full Emoji List, v11.0](https://unicode.org/emoji/charts/full-emoji-list.html "Full Emoji List, v11.0")
- [Full Emoji Modifier Sequences, v11.0](https://unicode.org/emoji/charts/full-emoji-modifiers.html "Full Emoji Modifier Sequences, v11.0")
- [emojione/emoji.json at master · emojione/emojione · GitHub](https://github.com/emojione/emojione/blob/master/emoji.json "emojione/emoji.json at master · emojione/emojione · GitHub")

## Architecture

<img src="https://github.com/shimabox/assets/raw/master/pemojine/architecture.png" alt="pemojine-architecture" title="pemojine-architecture" style="margin:0;height:400px;">

- Treat one Emoji as a group.
- MediumGroup bundle Groups.
- BigGroup bundle MediumGroups.
- Vendor bundle BigGroups.
- @see - [Full Emoji List, v11.0](https://unicode.org/emoji/charts/full-emoji-list.html "Full Emoji List, v11.0")

## Features

- You can output it for each vendor (Apple, Google, etc...).
- Outputable for each group.
  - BigGroups, MediumGroups, Groups.
- Randomly output Emoji.
- Create sentences containing Emoji.
- The group structure can be easily customized.

## Demo

- Todo

## Installation

Via Composer

```
$ composer require shimabox/pemojine
```

Develop

```
$ git clone https://github.com/shimabox/pemojine
$ cd pemojine
$ composer install
```

## Usage

```
<?php
require_once 'vendor/autoload.php';

use SMB\Pemojine\Container as PemojineContainer;
use SMB\Pemojine\Structure\Vendor;
use SMB\Pemojine\Helper\Sentence;

// Create an instance of Google using a Container.
$pemojine = PemojineContainer::make(new Vendor\Google());

// Get the configured vendor name.
echo $pemojine->getVendorName(); // => Google

/*
 |----------------------------------------------------------------------
 | Get all BigGroups.
 |----------------------------------------------------------------------
 */
$allBigGroups = $pemojine->getAllBigGroups();

// $allBigGroups is an array with a big group name in the key and an object(BigGroup) in the value.
foreach ($allBigGroups as $bigGroupName => $bigGroup) {
    echo 'BigGroupName::' . $bigGroupName/* or $bigGroup->getName() */;
    foreach ($bigGroup as $mediumGroupName => $mediumGroup) {
        echo 'MediumGroupName::' . $mediumGroupName/* or $mediumGroup->getName() */;
        foreach ($mediumGroup as $groupName => $group) {
            // Output shortName.
            echo 'Group::' . $groupName/* or $group->getName(), $group->getShortName() */;
            // Output Emoji.
            echo $group->output();
            // Output HTML reference character. e.g) '&#x1F600;', '&#x1F1EF;&#x1F1F5;'
            echo htmlspecialchars($group->outputHtml(), ENT_QUOTES, 'UTF-8');
            // Get unicode. e.g.) 'U+1F600', 'U+1F1EF U+1F1F5'
            echo $group->getUnicode();
            // Get unicode with removed blank. e.g.) 'U+1F600', 'U+1F1EFU+1F1F5'
            echo $group->getUnicodeWithRemovedBlank();
            // Get UTF8 string. e.g.) '\u{1F600}', '\u{1F1EF} \u{1F1F5}'
            echo $group->getUtf8String();
            // Get UTF8 string with removed blank. e.g.) '\u{1F600}', '\u{1F1EF}\u{1F1F5}'
            echo $group->getUtf8StringWithRemovedBlank();
            // Get aliases of shortName
            $alias = implode(' ', $group->getAliasesOfName()/* or $group->getAliasesOfShortName() */);
            echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8');
        }
    }
}

/*
 |----------------------------------------------------------------------
 | When selecting randomly from Big Groups.
 |----------------------------------------------------------------------
 */
// Select a BigGroup at random
$randomBigGroup = $pemojine->randomFromBigGroup();

echo $randomBigGroup->getName(); // Randomly chosen BigGroupName.

// When acquiring a random group from narrowed down.
$groupOfBig = $randomBigGroup->getGroupAtRandom();
echo $groupOfBig->getName();
$alias = implode(' ', $groupOfBig->getAliasesOfName());
echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8');
echo $groupOfBig->output();
echo htmlspecialchars($groupOfBig->outputHtml(), ENT_QUOTES, 'UTF-8');
echo $groupOfBig->getUnicode();
echo $groupOfBig->getUnicodeWithRemovedBlank();
echo $groupOfBig->getUtf8String();
echo $groupOfBig->getUtf8StringWithRemovedBlank();

/*
 |----------------------------------------------------------------------
 | When selecting 'animal-mammal' in Medium Groups.
 |----------------------------------------------------------------------
 */
// Select 'animal-mammal'.
$selectedMediumGroup = $pemojine->selectMediumGroup('animal-mammal');

echo $selectedMediumGroup->getVendorName(); // => 'Google'

echo $selectedMediumGroup->getName(); // => 'animal-mammal'

// $selectedMediumGroup is an iterator with a group name in the key and an object(Group) in the value.
foreach ($selectedMediumGroup/* or $selectedMediumGroup->getChildren() */ as $groupName => $group) {
    echo 'Group::' . $groupName;
    echo $group->output();
    echo htmlspecialchars($group->outputHtml(), ENT_QUOTES, 'UTF-8');
    echo $group->getUnicode();
    echo $group->getUnicodeWithRemovedBlank();
    echo $group->getUtf8String();
    echo $group->getUtf8StringWithRemovedBlank();
    $alias = implode(' ', $group->getAliasesOfName());
    echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8');
}

// When acquiring a random group from narrowed down.
$groupOfM = $selectedMediumGroup->getGroupAtRandom();
echo $groupOfM->getName()/* or $groupOfM->getShortName() */;
$alias = implode(' ', $groupOfM->getAliasesOfName()/* or $groupOfM->getAliasesOfShortName() */);
echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8');
echo $groupOfM->output();
echo htmlspecialchars($groupOfM->outputHtml(), ENT_QUOTES, 'UTF-8');
echo $groupOfM->getUnicode();
echo $groupOfM->getUnicodeWithRemovedBlank();
echo $groupOfM->getUtf8String();
echo $groupOfM->getUtf8StringWithRemovedBlank();

// In the case of Medium Group, you can find a Big Group of parents.
$parent = $pemojine->selectMediumGroup('animal-mammal')->findParentGroup(); // => Parent BigGroup
assert($parent->getName() === 'Animals & Nature'); // => true

// The following are the same instances.
$a = $pemojine->selectBigGroup('Animals & Nature')->selectMediumGroup('animal-mammal');
$b = $pemojine->selectMediumGroup('animal-mammal');
assert($a === $b); // => true

// Exists?
assert($pemojine->hasMediumGroup('animal-bird') === true);
assert($pemojine->hasMediumGroup('piyo') === false);

/*
 |----------------------------------------------------------------------
 | Create sentences including Emoji.
 |----------------------------------------------------------------------
 */
// Get an Outputter instance.
$outputter = $pemojine->getOutputter();

// Other ways to get instances.
/*
    // Create an EmojiTable instance of Apple.
    $emojiTable = new \SMB\Pemojine\Structure\Vendor\Apple\EmojiTable();
    // Create an Outputter instance.
    $outputter = new \SMB\Pemojine\Outputter\Outputter($emojiTable);
*/

// Create a Sentence instance.
$sentence = new Sentence($outputter);

// Sentence 1
$output_1 = $sentence->create('Hello U+1F1EFU+1F1F5 \u{1F601}:grin:|beaming face with smiling eyes|!!');
assert('Hello 🇯🇵 😁😁😁!!' === $output_1);
echo $output_1;

// Sentence 2
$output_2 = $sentence->create('foo ::heart:: :bar:cinema:baz:');
assert('foo :❤: :bar🎦baz:' === $output_2);
echo $output_2;

// Sentence 3
$output_3 = $sentence->create('foo ||grinning face with big eyes|| |bar|face with tears of joy|baz|');
assert('foo |😃| |bar😂baz|' === $output_3);
echo $output_3;
```

## Customize

### How to add a new Emoji group

Create three files below.

- Files that implements `SMB\Pemojine\Structure\Interfaces\Configurable`.
- Files that implements `SMB\Pemojine\Structure\Interfaces\Gettable`.
- Files that implements `SMB\Pemojine\Structure\Interfaces\EmojiTable\Gettable`.

@see [pemojine/example/Custom](https://github.com/shimabox/pemojine/tree/master/example/Custom "pemojine/example/Custom at master · shimabox/pemojine")

## Examples

dev only.

#### Basic

- [pemojine/example/getAll.php](https://github.com/shimabox/pemojine/blob/master/example/getAll.php "pemojine/getAll.php at master · shimabox/pemojine")
  - `$ php pemojine/example/getAll.php`
- [pemojine/example/selectAtRandom.php](https://github.com/shimabox/pemojine/blob/master/example/selectAtRandom.php "pemojine/selectAtRandom.php at master · shimabox/pemojine")
  - `$ php pemojine/example/selectAtRandom.php`
- [pemojine/example/selectGroup.php](https://github.com/shimabox/pemojine/blob/master/example/selectGroup.php "pemojine/selectGroup.php at master · shimabox/pemojine")
  - `$ php pemojine/example/selectGroup.php`
- [pemojine/example/outputter.php](https://github.com/shimabox/pemojine/blob/master/example/outputter.php "pemojine/outputter.php at master · shimabox/pemojine")
  - `$ php pemojine/example/outputter.php`

#### Helper

- [pemojine/example/helper_converter.php](https://github.com/shimabox/pemojine/blob/master/example/helper_converter.php "pemojine/helper_converter.php at master · shimabox/pemojine")
  - `$ php pemojine/example/helper_converter.php`
- [pemojine/example/helper_emoji.php](https://github.com/shimabox/pemojine/blob/master/example/helper_emoji.php "pemojine/helper_emoji.php at master · shimabox/pemojine")
  - `$ php pemojine/example/helper_emoji.php`
- [helper_emojiCounter.php](https://github.com/shimabox/pemojine/blob/master/example/helper_emojiCounter.php "pemojine/helper_emojiCounter.php at master · shimabox/pemojine")
  - `$ php pemojine/example/helper_emojiCounter.php`
- [pemojine/example/helper_sentence.php](https://github.com/shimabox/pemojine/blob/master/example/helper_sentence.php "pemojine/helper_sentence.php at master · shimabox/pemojine")
  - `$ php pemojine/example/helper_sentence.php`

#### Custom

- [pemojine/example/Custom/example.php](https://github.com/shimabox/pemojine/blob/master/example/Custom/example.php "pemojine/example.php at master · shimabox/pemojine")
  - `$ php pemojine/example/Custom/example.php`

## Regenerate data

```
$ php pemojine/scraping/src/generator.php
```

Scrape the data here.  
(The result is cached for 1 hour in `pemojine/scraping/cache/full-emoji-list`, `pemojine/scraping/cache/full-emoji-list`)

- [Full Emoji List, v11.0](https://unicode.org/emoji/charts/full-emoji-list.html "Full Emoji List, v11.0")
- [Full Emoji Modifier Sequences, v11.0](https://unicode.org/emoji/charts/full-emoji-modifiers.html "Full Emoji Modifier Sequences, v11.0")
- [emojione/emoji.json at master · emojione/emojione · GitHub](https://github.com/emojione/emojione/blob/master/emoji.json "emojione/emoji.json at master · emojione/emojione · GitHub")

`pemojine/scraping/output/Config`, `pemojine/scraping/output/Structure` Since files are output below, please place them under `pemojine/src/Config`, `pemojine/src/Structure` respectively.

### Shell for sync.

- For Mac(Linux).  
```
$ sh pemojine/scraping/sync.sh
```

- For Windows.  
```
$ cd pemojine/scraping/
$ win_sync.bat
```

## Test

```
$ composer test # or vendor/bin/phpunit
```

- Coverage  
```
$ composer coverage # or vendor/bin/phpunit --coverage-text --coverage-html ./report/
```

## TODO

- Make a demo site.
- Regular expressions that make up sentences with Emoji are rough.
  - [pemojine/Sentence.php at master · shimabox/pemojine](https://github.com/shimabox/pemojine/blob/master/src/Helper/Sentence.php "pemojine/Sentence.php at master · shimabox/pemojine").
  - I tried to cope with nesting.
    - But it does not correspond to complex nesting.
- Emoji mapping(array) is too rich, so I need to think about this.
- For `Vendor\EmojiOne` I feel correct to combine with [emojione/lib/php at master · emojione/emojione](https://github.com/emojione/emojione/tree/master/lib/php "emojione/lib/php at master · emojione/emojione").
- Confirmation on actual machine.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

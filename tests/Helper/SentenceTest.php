<?php

namespace SMB\Pemojine\Tests\Helper;

use SMB\Pemojine\Helper\Sentence;
use SMB\Pemojine\Outputter\Outputter;

/**
 * Test of SMB\Pemojine\Helper\Sentence
 * 
 * @group Pemojine
 * @group Helper
 */
class SentenceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @dataProvider provider_for_create
     */
    public function it_can_handle_create($vendor, $sentence, $expected)
    {
        $outputter = $this->create_outputter($vendor);
        $target = new Sentence($outputter);

        $this->assertSame($expected, $target->create($sentence));
    }

    /**
     * 
     * @return array
     */
    public function provider_for_create()
    {
        return [
            [
                'Apple', 
                'Hello World!!', 
                'Hello World!!'
            ],
            [
                'Apple', 
                'Hello 😄 |grinning face with smiling eyes| :smile:', 
                'Hello 😄 😄 😄'
            ],
            [
                'Apple', 
                'Hello 😄 U+1F1EFU+1F1F5 u+1F601 \u{1F1EF}\u{1F1F5} \U{1F601}!!', 
                'Hello 😄 🇯🇵 😁 🇯🇵 😁!!'
            ],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_createStatically
     */
    public function it_can_handle_createStatically($vendor, $sentence, $expected)
    {
        $outputter = $this->create_outputter($vendor);
        $this->assertSame($expected, Sentence::createStatically($outputter, $sentence));
    }

    /**
     * 
     * @return array
     */
    public function provider_for_createStatically()
    {
        return [
            [
                'Apple', 
                'こんにちは!!', 
                'こんにちは!!'
            ],
            [
                'Apple', 
                'Hello 😄 |grinning face with smiling eyes| :smile:', 
                'Hello 😄 😄 😄'
            ],
            [
                'Apple', 
                'Hello 😄 U+1F1EFU+1F1F5 U+1F601 \u{1F1EF}\u{1F1F5} \u{1F601}!!', 
                'Hello 😄 🇯🇵 😁 🇯🇵 😁!!'
            ],
        ];
    }

    /**
     * 一致しない文字についてはそのまま返す
     * 
     * @test
     * @dataProvider provider_for_unmatched_characters_return_as_is
     */
    public function it_can_handle_for_unmatched_characters_return_as_is($vendor, $sentence, $expected)
    {
        $outputter = $this->create_outputter($vendor);
        $target = new Sentence($outputter);

        $this->assertSame($expected, $target->create($sentence));
    }

    /**
     * 
     * @return array
     */
    public function provider_for_unmatched_characters_return_as_is()
    {
        return [
            [
                'Apple', 
                'Hello |beaming face with smiling eyes||a|b||c|!!', 
                'Hello 😁|a|b||c|!!' 
            ],
            [
                'Apple', 
                'U+u+1F601 U+FFFFF \u\u{1F601} \u{FFFFF}', 
                'U+😁 U+FFFFF \u😁 \u{FFFFF}'
            ],
            [
                'Apple', 
                '| : || :: ||| ::: : : :: :|: ::: :|:|: | | || |:| ||| |:|:|', 
                '| : || :: ||| ::: : : :: :|: ::: :|:|: | | || |:| ||| |:|:|'
            ],
        ];
    }

    /**
     * サロゲート文字を処理できる
     * 
     * @test
     * @dataProvider provider_for_surrogate_characters
     */
    public function if_can_handle_surrogate_characters($vendor, $sentence, $expected)
    {
        $outputter = $this->create_outputter($vendor);
        $target = new Sentence($outputter);

        $this->assertSame($expected, $target->create($sentence));
    }

    /**
     * 
     * @return array
     */
    public function provider_for_surrogate_characters()
    {
        return [
            [
                'Apple', 
                'U+1F1EFU+1F1F5 \u{1F1EF}\u{1F1F5} U+1F1EF U+1F1F5 \u{1F1EF} \u{1F1F5}', 
                '🇯🇵 🇯🇵 U+1F1EF U+1F1F5 \u{1F1EF} \u{1F1F5}'
            ],
        ];
    }

    /**
     * 連続する文字列を処理できる
     * 
     * @test
     * @dataProvider provider_for_continuous_strings
     */
    public function it_can_handle_continuous_strings($vendor, $sentence, $expected)
    {
        $outputter = $this->create_outputter($vendor);
        $this->assertSame($expected, Sentence::createStatically($outputter, $sentence));
    }

    /**
     * 
     * @return array
     */
    public function provider_for_continuous_strings()
    {
        return [
            [
                'Apple', 
                'Hello ||:\'(||',
                'Hello |😢|'
            ],
            [
                'Apple', 
                'Hello ||:\'(|| ||:\'(||', 
                'Hello |😢| |😢|'
            ],
            [
                'Apple', 
                'Hello |||:\'(||| |||:\'(|||', 
                'Hello ||😢|| ||😢||'
            ],
            [
                'Apple', 
                'Hello ::smile:: ::smile::', 
                'Hello :😄: :😄:'
            ],
            [
                'Apple', 
                'Hello |:\'(|:smile: |:\'(||:\'(| :smile::smile:', 
                'Hello 😢😄 😢😢 😄😄'
            ],
            [
                'Apple', 
                'Hello ||grinning face with smiling eyes|| ::smile:: |||grinning face with smiling eyes||| :::smile:::', 
                'Hello |😄| :😄: ||😄|| ::😄::'
            ],
            [
                'Apple', 
                'Hello ||:\'(||::smile:: ||:\'(||||:\'(|| ::smile::::smile::', 
                'Hello |😢|:😄: |😢||😢| :😄::😄:'
            ],
            [
                'Apple', 
                'Hello |||grinning face with smiling eyes|||:::smile::: |||grinning face with smiling eyes||||||grinning face with smiling eyes||| :::smile::::::smile:::', 
                'Hello ||😄||::😄:: ||😄||||😄|| ::😄::::😄::'
            ],
            [
                'Apple', 
                'Hello |||:\'(|||||:\'(|| :::smile:::::smile::', 
                'Hello ||😢|||😢| ::😄:::😄:'
            ],
            [
                'Apple', 
                'Hello |||grinning face with smiling eyes|||||grinning face with smiling eyes|||||grinning face with smiling eyes|||', 
                'Hello ||😄|||😄|||😄||'
            ],
            [
                'Apple', 
                'Hello :::smile:::::smile:::::smile:::', 
                'Hello ::😄:::😄:::😄::'
            ],
            [
                'Apple', 
                ':U+1F1EFU+1F1F5: |U+1F1EFU+1F1F5| :\u{1F1EF}\u{1F1F5}: |\u{1F1EF}\u{1F1F5}|', 
                ':🇯🇵: |🇯🇵| :🇯🇵: |🇯🇵|'
            ],
            [
                'Apple', 
                '::U+1F1EFU+1F1F5:: ||U+1F1EFU+1F1F5|| ::\u{1F1EF}\u{1F1F5}:: ||\u{1F1EF}\u{1F1F5}||', 
                '::🇯🇵:: ||🇯🇵|| ::🇯🇵:: ||🇯🇵||'
            ],
            [
                'Apple', 
                ':::U+1F1EFU+1F1F5::: |||U+1F1EFU+1F1F5||| :::\u{1F1EF}\u{1F1F5}::: |||\u{1F1EF}\u{1F1F5}|||', 
                ':::🇯🇵::: |||🇯🇵||| :::🇯🇵::: |||🇯🇵|||'
            ],
        ];
    }

    /**
     * 囲み文字によるネストを処理できる
     * 
     * @test
     * @dataProvider provider_for_nesting_of_enclosing_characters
     */
    public function it_can_handle_nesting_of_enclosing_characters($vendor, $sentence, $expected)
    {
        $outputter = $this->create_outputter($vendor);
        $this->assertSame($expected, Sentence::createStatically($outputter, $sentence));
    }

    /**
     * 
     * @return array
     */
    public function provider_for_nesting_of_enclosing_characters()
    {
        return [
            [
                'Apple', 
                ':|OK hand: light skin tone|:', 
                ':👌🏻:'
            ],
            [
                'Apple', 
                ':|:\'(||grinning face with smiling eyes|:', 
                ':😢😄:'
            ],
            [
                'Apple', 
                ': |:\'(||grinning face with smiling eyes| :', 
                ': 😢😄 :'
            ],
            [
                'Apple', 
                ': |:\'(| |grinning face with smiling eyes| :', 
                ': 😢 😄 :'
            ],
            [
                'Apple', 
                '|:smile::baby:|', 
                '|😄👶|'
            ],
            [
                'Apple', 
                '| :smile::baby: |', 
                '| 😄👶 |'
            ],
            [
                'Apple', 
                ':|grinning face|::baby::|grinning face with smiling eyes|:', 
                ':😀:👶:😄:'
            ],
            [
                'Apple', 
                '|:smile:||grinning face||:baby:|', 
                '|😄|😀|👶|'
            ],
            [
                'Apple', 
                '|U+1F601|', 
                '|😁|'
            ],
            [
                'Apple', 
                '|\u{1F601}|', 
                '|😁|'
            ],
            [
                'Apple', 
                '|U+1F601\u{1F601}|', 
                '|😁😁|'
            ],
            [
                'Apple', 
                ':U+1F601:', 
                ':😁:'
            ],
            [
                'Apple', 
                ':\u{1F601}:', 
                ':😁:'
            ],
            [
                'Apple', 
                ':U+1F601\u{1F601}:', 
                ':😁😁:'
            ],
            [
                'Apple', 
                ':|grinning face|U+1F601 U+1F1EFU+1F1F5|grinning face with smiling eyes|:', 
                ':😀😁 🇯🇵😄:'
            ],
            [
                'Apple', 
                ':|grinning face|\u{1F601} \u{1F1EF}\u{1F1F5}|grinning face with smiling eyes|:', 
                ':😀😁 🇯🇵😄:'
            ],
            [
                'Apple', 
                ':|grinning face|U+1F601 \u{1F1EF}\u{1F1F5} U+1F1EFU+1F1F5 \u{1F601}|grinning face with smiling eyes|:', 
                ':😀😁 🇯🇵 🇯🇵 😁😄:'
            ],
            [
                'Apple', 
                '|:smile:U+1F601 U+1F1EFU+1F1F5:baby:|', 
                '|😄😁 🇯🇵👶|'
            ],
            [
                'Apple', 
                '|:smile:\u{1F601} \u{1F1EF}\u{1F1F5}:baby:|', 
                '|😄😁 🇯🇵👶|'
            ],
            [
                'Apple', 
                '|:smile:\u{1F601} U+1F1EFU+1F1F5 \u{1F1EF}\u{1F1F5} U+1F601:baby:|', 
                '|😄😁 🇯🇵 🇯🇵 😁👶|'
            ],
            [
                'Apple', 
                'foo ::heart:: :bar:cinema:baz:', 
                'foo :❤: :bar🎦baz:'
            ],
            [
                'Apple', 
                'foo ||grinning face with big eyes|| |bar|face with tears of joy|baz|', 
                'foo |😃| |bar😂baz|'
            ],
        ];
    }

    /**
     * @test
     */
    public function in_case_of_Common_it_can_handle_for_unsupported_characters_return_as_is()
    {
        $target = '|face with tears of joy|';

        $common  = $this->create_outputter('Common');
        $this->assertSame(
            $target,
            Sentence::createStatically($common, $target)
        );

        $google = $this->create_outputter('Google');
        $this->assertSame(
            '😂',
            Sentence::createStatically($google, $target)
        );
    }

    /**
     * @test
     */
    public function in_case_of_Apple_it_can_handle_for_unsupported_characters_return_as_is()
    {
        $target = '|medical symbol|';

        $apple  = $this->create_outputter('Apple');
        $this->assertSame(
            $target,
            Sentence::createStatically($apple, $target)
        );

        $google = $this->create_outputter('Google');
        $this->assertSame(
            '⚕',
            Sentence::createStatically($google, $target)
        );
    }

    /**
     * @test
     */
    public function in_case_of_DoCoMo_it_can_handle_for_unsupported_characters_return_as_is()
    {
        $target = '|star-struck|';

        $docomo  = $this->create_outputter('DoCoMo');
        $this->assertSame(
            $target,
            Sentence::createStatically($docomo, $target)
        );

        $google = $this->create_outputter('Google');
        $this->assertSame(
            '🤩',
            Sentence::createStatically($google, $target)
        );
    }

    /**
     * @test
     */
    public function in_case_of_GMail_it_can_handle_for_unsupported_characters_return_as_is()
    {
        $target = '|rolling on the floor laughing|';

        $gmail  = $this->create_outputter('GMail');
        $this->assertSame(
            $target,
            Sentence::createStatically($gmail, $target)
        );

        $google = $this->create_outputter('Google');
        $this->assertSame(
            '🤣',
            Sentence::createStatically($google, $target)
        );
    }

    /**
     * @test
     */
    public function in_case_of_KDDI_it_can_handle_for_unsupported_characters_return_as_is()
    {
        $target = '|rainbow flag|';

        $kddi  = $this->create_outputter('KDDI');
        $this->assertSame(
            $target,
            Sentence::createStatically($kddi, $target)
        );

        $google = $this->create_outputter('Google');
        $this->assertSame(
            '🏳️‍🌈',
            Sentence::createStatically($google, $target)
        );
    }

    /**
     * @test
     */
    public function in_case_of_Samsung_it_can_handle_for_unsupported_characters_return_as_is()
    {
        $target = '|crossed flags|';

        $samsung  = $this->create_outputter('Samsung');
        $this->assertSame(
            $target,
            Sentence::createStatically($samsung, $target)
        );

        $google = $this->create_outputter('Google');
        $this->assertSame(
            '🎌',
            Sentence::createStatically($google, $target)
        );
    }

    /**
     * @test
     */
    public function in_case_of_SoftBank_it_can_handle_for_unsupported_characters_return_as_is()
    {
        $target = '|grinning face|';

        $softbank  = $this->create_outputter('SoftBank');
        $this->assertSame(
            $target,
            Sentence::createStatically($softbank, $target)
        );

        $google = $this->create_outputter('Google');
        $this->assertSame(
            '😀',
            Sentence::createStatically($google, $target)
        );
    }

    /**
     * @test
     */
    public function in_case_of_Windows_it_can_handle_for_unsupported_characters_return_as_is()
    {
        $target = '|flag: Ascension Island|';

        $windows  = $this->create_outputter('Windows');
        $this->assertSame(
            $target,
            Sentence::createStatically($windows, $target)
        );

        $google = $this->create_outputter('Google');
        $this->assertSame(
            '🇦🇨',
            Sentence::createStatically($google, $target)
        );
    }

    /**
     * 
     * @param string $vendor
     * 
     * @return Outputter
     */
    private function create_outputter($vendor)
    {
        $class = '\SMB\Pemojine\Structure\Vendor\\' . $vendor . '\EmojiTable';
        $emojiTable = new $class();

        return new Outputter($emojiTable);
    }
}

<?php

namespace SMB\Pemojine\Tests\Scraping;

use Jenssegers\Blade\Blade;
use PHPUnit\Framework\TestCase;

class TemplateTest extends TestCase
{
    public function testOtherGeneratorTemplatesProduceValidPhp(): void
    {
        $cache = sys_get_temp_dir() . '/pemojine-blade-' . uniqid('', true);
        mkdir($cache);
        try {
            $blade = new Blade(__DIR__ . '/../../scraping/template', $cache);
            $common = [
                'vendorName' => 'Example',
                'className' => 'Smileys',
                'phpdocVar' => '@var',
                'phpdocReturn' => '@return',
                'escapeSingleQuotation' => function ($value) { return str_replace("'", "\\'", $value); },
                'restoreLastBackslash' => function ($value) { return $value; },
                'shortNameAliases' => ["face's alias" => "face's name"],
            ];
            $templates = [
                'configEmojiTable' => ['table' => ["face's name" => ['unicode' => '1F600', 'supportVendor' => ['Example']]], 'unicodeToShortNames' => ['1F600' => ["face's name"]]],
                'configEmojiCount' => ['bigGroupCnt' => 1, 'mediumGroupCnt' => 1, 'groupCnt' => 1],
                'structure' => ['bigGroup' => ['Smileys' => ['Faces']], 'mediumGroups' => ['Faces' => ['parent' => 'Smileys', 'children' => ["face's name"]]], 'groups' => ["face's name" => ['parent' => 'Faces', 'aliases' => ["face's alias"]]]],
                'emojiTable' => ['table' => ["face's name" => '1F600']],
            ];
            foreach ($templates as $template => $data) {
                $rendered = (string) $blade->make($template, array_merge($common, $data));
                $this->assertStringContainsString('namespace SMB\\Pemojine\\', $rendered);
                $this->assertStringNotContainsString('@foreach', $rendered);
                $this->assertStringNotContainsString('@yield', $rendered);
                $this->assertNotEmpty(token_get_all('<?php ' . $rendered, TOKEN_PARSE));
            }
        } finally {
            foreach (glob($cache . '/*') as $file) {
                unlink($file);
            }
            rmdir($cache);
        }
    }

    public function testVendorStructureTemplateRendersWithPatchedBlade(): void
    {
        $cache = sys_get_temp_dir() . '/pemojine-blade-' . uniqid('', true);
        mkdir($cache);
        try {
            $blade = new Blade(__DIR__ . '/../../scraping/template', $cache);
            $rendered = (string) $blade->make('structureBase', [
                'vendorName' => 'Example',
                'classes' => ['Example\\Smileys::class'],
                'phpdocReturn' => '@return',
            ]);
            $this->assertStringContainsString('class Example implements Configurable', $rendered);
            $this->assertStringContainsString('Example\\Smileys::class', $rendered);
            $this->assertStringContainsString('@return array', $rendered);
            $this->assertStringNotContainsString('@yield', $rendered);
        } finally {
            foreach (glob($cache . '/*') as $file) {
                unlink($file);
            }
            rmdir($cache);
        }
    }
}

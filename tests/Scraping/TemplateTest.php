<?php

namespace SMB\Pemojine\Tests\Scraping;

use Jenssegers\Blade\Blade;
use PHPUnit\Framework\TestCase;

class TemplateTest extends TestCase
{
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

<?php

namespace Tee\I18n\Tests;

use Tee\System\Tests\TestCase;

class InitializeTest extends TestCase {

    public function testModuleEnabled()
    {
        $this->assertTrue(\moduleEnabled('i18n'));
        $this->assertTrue(\moduleEnabled('system'));
    }

}

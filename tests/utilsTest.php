<?php
declare(strict_types=1);

namespace discordMessage;

use discordMessage\utils\Utils;
use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/vendor/autoload.php';

class utilsTest extends TestCase {

    public function testIsValidUrl() {
        $this->assertEquals(0, Utils::isValidWebhookUrl('https://discord.com/api/webhooks/123456789/123456789'));
    }

}
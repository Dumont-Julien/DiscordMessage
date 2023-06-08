<?php
declare(strict_types=1);

namespace discordMessage\exception;

use Exception;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

class SendWebhookException extends Exception {}
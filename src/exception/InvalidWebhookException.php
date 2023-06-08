<?php
declare(strict_types=1);

namespace discordMessage\exception;

use Exception;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

class InvalidWebhookException extends Exception {

    public function __construct(string $message = 'Invalid webhook', int $code = 0, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
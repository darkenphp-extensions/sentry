<?php

namespace Darken\Sentry;

use Darken\Events\EventDispatchInterface;
use Darken\Events\EventInterface;
use Darken\Service\LogService;
use Psr\Log\LogLevel;
use Throwable;

use function Sentry\captureException;
use function Sentry\captureMessage;
use function Sentry\init;

class CaptureLog implements EventInterface
{
    public function __construct(private LogService $log, private SentryConfig $config)
    {
        if ($config->isActive) {
            init(['dsn' => $config->dsn]);
        }
    }

    public function __invoke(EventDispatchInterface $event): void
    {
        if ($this->config->isActive) {
            $logs = $this->log->getLogsByLevel(LogLevel::ERROR);

            foreach ($logs as $logEntry) {

                $exception = $logEntry['context']['exception'] ?? null;
                
                if ($exception instanceof Throwable) {
                    captureException($exception);
                } else {
                    captureMessage($logEntry['message']);
                }
                
            }
        }
    }
}
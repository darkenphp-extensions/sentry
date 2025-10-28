<?php

namespace Darken\Sentry\Build;

class Extension extends \Darken\Service\Extension
{
    public function __construct(\Darken\Sentry\SentryConfig $sentryConfig) {
            $this->registerDefinition('Darken\Sentry\SentryConfig', $sentryConfig);
        }

    public function getClassMap(): array
    {
        return array (
);
    }

    public function getSerializedEvents(): string
    {
        return 'YToxOntzOjMwOiJEYXJrZW5cRXZlbnRzXEFwcFNodXRkb3duRXZlbnQiO2E6MTp7aTowO3M6MjQ6IkRhcmtlblxTZW50cnlcQ2FwdHVyZUxvZyI7fX0=';
    }

    public function getSerializedMiddlewares(): string
    {
        return 'YTowOnt9';
    }
}
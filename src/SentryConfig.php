<?php

namespace Darken\Sentry;

class SentryConfig
{
    public function __construct(public string $dsn, public bool $isActive = true)
    {

    }
}

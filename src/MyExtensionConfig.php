<?php

namespace MyExtension;

class MyExtensionConfig
{
    public function __construct(public string $requiredTestParam)
    {

    }

    public function getUcFirstRequiredTestParam(): string
    {
        return ucfirst($this->requiredTestParam);
    }
}

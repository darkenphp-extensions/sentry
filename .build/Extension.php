<?php

namespace MyExtension\Build;

class Extension extends \Darken\Service\Extension
{
    public function __construct(\MyExtension\MyExtensionConfig $myExtensionConfig) {
            $this->registerDefinition('MyExtension\MyExtensionConfig', $myExtensionConfig);
        }

    public function getClassMap(): array
    {
        return array (
  'MyExtension\\Build\\Components\\ExampleComponent' => '/Components/ExampleComponent.php',
);
    }

    public function getSerializedEvents(): string
    {
        return 'YTowOnt9';
    }

    public function getSerializedMiddlewares(): string
    {
        return 'YTowOnt9';
    }
}
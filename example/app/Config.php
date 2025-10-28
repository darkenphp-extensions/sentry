<?php

namespace App;

use Darken\Config\BaseConfig;
use Darken\Service\ExtensionService;
use Darken\Service\ExtensionServiceInterface;
use MyExtension\Build\Extension;
use MyExtension\MyExtensionConfig;

class Config extends BaseConfig implements ExtensionServiceInterface
{
    public function __construct(private readonly string $rootDirectoryPath)
    {
        $this->loadEnvFile();
    }

    public function extensions(ExtensionService $service) : ExtensionService
    {
        return $service
            ->register(new Extension(new MyExtensionConfig('my-extension-example-param')));
    }

    public function getRootDirectoryPath(): string
    {
        return $this->path($this->rootDirectoryPath);
    }

    public function getDebugMode(): bool
    {
        return true;
    }

    public function getPagesFolder(): string
    {
        return $this->getRootDirectoryPath() . DIRECTORY_SEPARATOR . 'pages';
    }

    public function getBuildOutputFolder(): string
    {
        return $this->getRootDirectoryPath() . DIRECTORY_SEPARATOR . '.build';
    }

    public function getBuildOutputNamespace(): string
    {
        return 'Build';
    }

    public function getBuildingFolders(): array
    {
        return [
            $this->getPagesFolder(),
        ];
    }
}

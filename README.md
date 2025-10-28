# Sentry

composer require darkenphp/sentry

add to your Config:

```php

use Darken\Sentry\Build\Extension as SentryExtension;
use Darken\Sentry\SentryConfig;
use Darken\Service\ExtensionService;

class Config extends BaseConfig implements ExtensionServiceInterface
{
    // .....

    public function extensions(ExtensionService $service): ExtensionService
    {
        return $service
            ->register(new SentryExtension(
                new SentryConfig(
                    dsn: 'https://xxx@yyy.ingest.us.sentry.io/123123',
                    isActive: true, // optional use $this->getDebugMode()
                )
            ));
    }

    // .....
}
```
<?php

use Darken\Attributes\ConstructorParam;
use Darken\Attributes\Inject;
use MyExtension\MyExtensionConfig;

$example = new class {
    #[ConstructorParam]
    public string $param;

    #[Inject]
    public MyExtensionConfig $extConfig;
}
?>
<div style="padding: 20px; background-color: green; color:white; border-radius: 20px;">
    <?= $example->param ?>
    <hr />
    <?= $example->extConfig->getUcFirstRequiredTestParam() ?>
</div>
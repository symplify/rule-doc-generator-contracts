<?php

declare(strict_types=1);

use Symplify\EasyCI\Config\EasyCIConfig;
use Symplify\RuleDocGenerator\Contract\Category\CategoryInfererInterface;
use Symplify\RuleDocGenerator\Contract\ConfigurableRuleInterface;
use Symplify\RuleDocGenerator\Contract\RuleCodeSamplePrinterInterface;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\ComposerJsonAwareCodeSample;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\ExtraFileCodeSample;

return static function (EasyCIConfig $easyCIConfig): void {
    $easyCIConfig->typesToSkip([
        CategoryInfererInterface::class,
        ConfigurableRuleInterface::class,
        RuleCodeSamplePrinterInterface::class,
        ComposerJsonAwareCodeSample::class,
        ExtraFileCodeSample::class,
    ]);
};

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_AppKernelDevDebugContainer.php')->set(\ContainerQxQ90Qa\App_AppKernelDevDebugContainer::class, null);
require __DIR__.'/ContainerQxQ90Qa/getApplicationService.php';

$classes = [];
$classes[] = 'Symfony\Component\Console\Application';
$classes[] = 'App\Command\ConverterCommand';
$classes[] = 'App\Services\ConversionContext';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';

$preloaded = Preloader::preload($classes);

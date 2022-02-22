<?php

use App\Services\ConversionContext;
use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;


$this->services['Symfony\\Component\\Console\\Application'] = $instance = new \Symfony\Component\Console\Application();

$instance->add(new \App\Command\ConverterCommand(new ConversionContext()));

return $instance;

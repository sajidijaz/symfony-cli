<?php

use App\Services\ConversionContext;

$this->services['Symfony\\Component\\Console\\Application'] = $instance = new \Symfony\Component\Console\Application();

$instance->add(new \App\Command\ConverterCommand(new ConversionContext()));

return $instance;

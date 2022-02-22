<?php

declare(strict_types=1);

namespace App\Services;


use App\Interfaces\ConverterInterface;

class ConversionContext
{
    private ConverterInterface $converter;

    public function setConverter(ConverterInterface $converterInterface): void
    {
        $this->converter = $converterInterface;
    }

    public function execute(array $data, string $fileName): void
    {
        $this->converter->conversion($data, $fileName);
    }

}
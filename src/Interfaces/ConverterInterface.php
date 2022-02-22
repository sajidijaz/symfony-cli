<?php

declare(strict_types=1);

namespace App\Interfaces;

interface ConverterInterface
{
    public function conversion(array $data, string $fileName): void;
}
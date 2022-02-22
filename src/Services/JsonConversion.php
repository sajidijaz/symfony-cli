<?php

declare(strict_types=1);

namespace App\Services;

use App\Interfaces\ConverterInterface;
use Symfony\Component\Filesystem\Filesystem;

class JsonConversion implements ConverterInterface
{

    private Filesystem $fileSystem;

    public string $extension = "json";

    public function __construct()
    {
        $this->fileSystem = new Filesystem();
    }

    public function conversion(array $data, string $fileName): void
    {
        $this->fileSystem->dumpFile($fileName, json_encode($data));
    }

}
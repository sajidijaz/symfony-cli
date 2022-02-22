<?php

declare(strict_types=1);

namespace App\Command;

use App\Services\ConversionContext;
use App\Services\CsvConversion;
use App\Services\ExcelConversion;
use App\Services\JsonConversion;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConverterCommand extends Command
{
    protected static $defaultName = "app:converter";

    private array $formats = ['csv', 'excel', 'json'];

    private ConversionContext $conversionContext;

    public function __construct(ConversionContext $conversionContext)
    {
        $this->conversionContext = $conversionContext;
        parent::__construct(self::$defaultName);
    }

    protected function configure(): void
    {
        $this->addArgument('path', InputArgument::REQUIRED, 'File path')
            ->addArgument('format', InputArgument::REQUIRED, ' file format');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $format = $input->getArgument('format');
        $path = $input->getArgument('path');

        if (!in_array($format, $this->formats)) {
            $output->writeln("File format is not exists");
            return 0;
        }
        $conversion = null;
        if(!file_exists($path)) {
            $output->writeln("File is not exist");
            return 0;
        }


        $xmlFile = \simplexml_load_file($path);
        $xmlData = json_decode(json_encode($xmlFile), TRUE);

        if (strtolower($format) === 'csv') {
            $conversion = new CsvConversion();
        } elseif (strtolower($format) === 'json') {
            $conversion = new JsonConversion();
        } elseif (strtolower($format) === 'excel') {
            $conversion = new ExcelConversion();
        }
        $this->conversionContext->setConverter($conversion);
        $this->conversionContext->execute($xmlData, dirname($path) . '/file.' . $conversion->extension);
        $output->writeln('Done');
        return 1;
    }
}
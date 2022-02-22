<?php

declare(strict_types=1);

namespace App\Services;

use App\Interfaces\ConverterInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

class CsvConversion implements ConverterInterface
{

    private Spreadsheet $spreadSheet;

    public string $extension = "csv";

    public function __construct()
    {
        $this->spreadSheet = new Spreadsheet();
    }

    public function conversion(array $data, string $fileName): void
    {
        $sheet = $this->spreadSheet->getActiveSheet();
        $columnNames = array_keys(current($data['product']));
        $row = 2;
        foreach ($data['product'] as $key => $value) {
            $col = 'A';
            foreach ($columnNames as $columnName) {
                $sheet->setCellValue($col.'1' , strtoupper($columnName));
                $sheet->setCellValue($col.$row , $value[$columnName]);
                $col++;
            }
            $row++;
        }
        $writer = new Csv($this->spreadSheet);
        $writer->save($fileName);
    }

}
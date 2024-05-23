<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;

class PessoaController extends Controller
{
    public function planilha()
    {
        // $caminho = storage_path() . '/teste.xlsx';
        $inputFileType = 'Xlsx';

        // $inputFileName = storage_path('/teste.xlsx');
        // dd($inputFileName);
        $reader = IOFactory::createReader($inputFileType);
        $spreadsheet = $reader->load(storage_path() . '\app\Desabrigados_Sao_Leopoldo_2305.xlsx');
        $worksheet = $spreadsheet->getActiveSheet();

        // dd($spreadsheet);
        $dataArray = $worksheet->toArray();
        dd($dataArray);

        
        // $inputFileName = './sampleData/example1.xls';

        /** Load $inputFileName to a Spreadsheet Object  **/
        // $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);

        foreach ($dataArray as $row) {
            foreach ($row as $cellValue) {
                // Do something with the cell data here.
            }
        }
    }
}

<?php


namespace App\Service;

use PhpOffice\PhpSpreadsheet\IOFactory;

class Xlsx{

    public function __construct(
        private Namer $namer
    ){}
    
    // Renvoye un tableau associatif contenant les attribitus de l'entité Client 
    public function processData(string $pathname): array{
        $reader = IOFactory::createReader('Xlsx')->load($pathname);
        $columns = $reader->getActiveSheet()->toArray()[0];
        $formattedColumn = [];
        foreach($columns as $column){
            $formattedColumn[] = $this->namer->formatColumn($column ?? '');
        }

        $reader->setActiveSheetIndex(0);
        $rows = $reader->getActiveSheet()->removeRow(1)->toArray();

        $array = array_map(function($row) use ($formattedColumn){
            return array_combine($formattedColumn, $row);
        }, $rows);

        return $array;


    }

}
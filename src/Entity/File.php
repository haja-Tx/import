<?php

namespace App\Entity;

class File{

    private string $filename;


    public function getFilemane(): string {

        return $this->filename;

    }

    public function setFilename(string $filename): self {
        
        $this->filename = $filename;
        return $this;

    }

}
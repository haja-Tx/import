<?php

namespace App\Service;

use Jawira\CaseConverter\Convert;

class Namer{

    private function removeSpecialChar(string $str): string{
        return preg_replace('/[0-9\@\&\^\%\(\)\#\$\!\]\[\}\{\*\'\"\.\;\"\° "]+/', ' ', $str);
    }


    public function removeAccents(string $str): string {
        return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    }


    // Recuperation d'un propriété de l'entité CLient par rapport au nom d'une colonne du fichier
    public function formatColumn(string $str): string{
        return (new Convert($this->removeSpecialChar($this->removeAccents($str))))->toCamel();
    }


}
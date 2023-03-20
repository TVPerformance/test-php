<?php 
namespace Front\Controllers;
use Front\App;
use Front\DB\FileReader as FR;


class Grybas {

    public function index()
    {
        $grybai = (new FR('grybai'))->showAll();
        $pageTitle = 'Grybu | Sarasas';
        return App::view('grybas-list', compact('grybai', 'pageTitle'));
    }
}
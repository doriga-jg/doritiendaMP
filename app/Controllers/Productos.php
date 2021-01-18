<?php
namespace App\Controllers;

class Productos extends BaseController
{
    function index() {
        return view('productos');;
    }

}
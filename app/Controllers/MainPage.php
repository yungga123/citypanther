<?php 

namespace App\Controllers;


class MainPage extends BaseController {
    public function index() {
        echo view('mainpage');
    }
}
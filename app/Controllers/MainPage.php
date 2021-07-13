<?php 

namespace App\Controllers;


class MainPage extends BaseController {
    public function index() {

        $data['title'] = 'City Panther';
        echo view('mainpage',$data);
    }
}
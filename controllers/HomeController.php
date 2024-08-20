<?php

namespace App\Controllers;

class HomeController {
    public function index() {
        \App\Providers\View::render('home/index');
    }
}

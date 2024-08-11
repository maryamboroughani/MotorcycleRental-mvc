<?php
namespace App\Controllers;

use App\Providers\View;

class HomeController {
    public function index() {
       
        $data = [
            'title' => 'Welcome to Motorcycle Rental',
            'description' => 'Find and rent the best motorcycles!'
        ];
        View::render('home/index', ['data' => $data]); 
    }

    public function test() {
        echo "Routing works!";
    }
}
?>

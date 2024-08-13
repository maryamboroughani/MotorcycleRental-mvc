<?php
namespace App\Providers;

class View {
    static public function render($template, $data = []) {
        // Ensure the views directory is correctly set
        $filePath = 'views/' . $template . '.php';
        
        if (file_exists($filePath)) {
            // Extract data to variables for use in the view
            extract($data);
            
            include $filePath;
        } else {
            throw new \Exception("View file not found: $filePath");
        }
    }

    static public function redirect($url) {
        header('Location: ' . BASE . '/' . $url);
        exit();
    }
}

?>

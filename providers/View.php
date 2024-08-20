<?php
namespace App\Providers;

class View {
    public static function render($view, $data = []) {
        // Ensure 'msg' is always present with a default value
        $data = array_merge(['msg' => ''], $data);
        extract($data);

        // Debugging output to verify what data is being passed
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        // Safeguard against including views multiple times
        $viewPath = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            // Handle the case where the view file does not exist
            echo 'View file not found: ' . htmlspecialchars($viewPath);
        }
    }
}

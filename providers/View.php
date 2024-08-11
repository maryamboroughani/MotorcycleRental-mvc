<?php
namespace App\Providers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View {
    private static $twig;

    public static function init() {
        if (self::$twig === null) {
            $loader = new FilesystemLoader('views');
            self::$twig = new Environment($loader);
            self::$twig->addGlobal('asset', ASSET);
            self::$twig->addGlobal('base', BASE);
        }
    }

    public static function render($template, $data = []) {
        self::init();
        try {
            echo self::$twig->render($template . ".twig", $data);
        } catch (\Twig\Error\LoaderException $e) {
            // Handle template loading error
            echo "Template error: " . $e->getMessage();
        } catch (\Twig\Error\RuntimeError $e) {
            // Handle template rendering error
            echo "Rendering error: " . $e->getMessage();
        }
    }

    public static function redirect($url) {
        header('Location: ' . BASE . '/' . $url);
        exit();  // Ensure script execution stops after redirect
    }
}

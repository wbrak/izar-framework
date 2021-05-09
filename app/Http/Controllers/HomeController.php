<?php

namespace App\Http\Controllers;

use App\Support\View;
use Psr\Http\Message\ResponseInterface;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController
{
    /**
     * @param  View  $view
     * @return ResponseInterface
     */
    public function index(View $view)
    {
        $name = 'Izar-framework';

        return $view('home', compact('name'));
    }

    /**
     * @param  View  $view
     * @return ResponseInterface
     */
    public function show(View $view)
    {
        $name = 'Admin';

        return $view('dashboard.home', compact('name'));
    }
}
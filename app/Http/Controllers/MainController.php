<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function menu()
    {
        $categories = ['petit déjeuner','Entrées','Plats','Dessert','Boissons'];

        return view('menu', [
            // variable qui peuvent être utilisées dans le template
            'categories' => $categories,
        ]);
    }
}

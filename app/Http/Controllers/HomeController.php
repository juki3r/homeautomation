<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function storedata (Request $request)
    {
       Home::create([
        's1' => "Working"
       ]);
    }
}

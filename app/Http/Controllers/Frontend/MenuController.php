<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class MenuController extends Controller
{
    public function index()
    {
        $menus =Menu::all();

        return view('menus.index',compact('menus'));
    }
}
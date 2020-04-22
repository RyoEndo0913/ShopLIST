<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        dd($owners);
        return view('owners.index', ['owners' => $owners]);
    }
}

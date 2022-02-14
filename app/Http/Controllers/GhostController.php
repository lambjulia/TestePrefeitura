<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GhostController extends Controller
{
    public function create() {
        return view ('prot.cadastro');
    }
}

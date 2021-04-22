<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\webScripting;

class webScrapingController extends Controller
{
    public function index() {
        return webScripting::all();
    }
}

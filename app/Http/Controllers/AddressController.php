<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class AddressController extends Controller
{
    public function index(){
        return view("admin.manageAddress");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function public(){

        $services = Service::orderBy('id', 'desc')->paginate(9);

        return view('front.services', compact('services'));
    }

    public function index(){

        $services = Service::orderBy('id', 'desc')->paginate(9);

        return view('admin.services.index', compact('services'));
    }
}

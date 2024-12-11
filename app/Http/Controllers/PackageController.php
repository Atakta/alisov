<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function services() {
        $packages = Package::all(); // Получаем все пакеты
        return view('services', compact('packages')); // Передаем данные в представление
    }
}

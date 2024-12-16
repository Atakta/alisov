<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function services() {
        $packages = Package::all(); // Получаем все пакеты
        $weddings = Package::where('status', 'wedding')->get();
        $portrets = Package::where('status', 'portret')->get();
        $lovestories = Package::where('status', 'lovestory')->get();
        return view('services', compact('packages', 'weddings', 'portrets', 'lovestories')); // Передаем данные в представление
    }
    public function postOrder(Request $request) {
        $order = new Order;
        $order->package_id = $request->package;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->tel = $request->phone;
        $order->message = $request->message;
        $order->status = 'new';
        $order->save();

        return redirect()->back();
    }
    public function getPackage(Request $request, Package $package) {
        return view('package', compact('package'));
    }
}

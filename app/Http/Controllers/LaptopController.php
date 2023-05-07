<?php

namespace App\Http\Controllers;
use App\Models\Laptop;
use App\Models\Opsystem;
use App\Models\Processor;
use Illuminate\Http\Request;

class LaptopController extends Controller {
    public function show(){
        $array = [];

        $laptops = $this->convertData(Laptop::all()->take(5));
        $processor = $this->convertData(Processor::all());
        $opSys = $this->convertData(Opsystem::all());

        return view('laptops',  [
            "laptops" => $laptops,
            "processors" => $processor,
            "Ops" => $opSys
        ]);
    }

    public function store(Request $request) {
        $cool = Laptop::storeLaptop($request);
        if ($cool) {
            return redirect('/laptops');
        }
    }
    public function convertData ($var){
        $array = [];

        foreach ($var as $dat) {
            $array[] = $dat->getOriginal();
        }
        return $array;
    }
}

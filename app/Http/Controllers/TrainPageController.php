<?php   

namespace App\Http\Controllers;

use App\Models\Train;

class TrainPageController extends Controller{
    public function index(){
        $trains = Train::where("data_di_partenza", ">", now()->toDateString())->get();
         
        return view('home', ["trains" => $trains]);
    }
}
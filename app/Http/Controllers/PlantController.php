<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PlantController extends Controller
{
    public function index()
    {
        $plants = new PlantCollection(Plant::all());
        return view('index',['plants'=>$plants]);
    }

    public function addPlant()
    {
        return view('add_plant');
    }

    public function store(Request $request)
    {

        $plant = new Plant();
        $plant->name =$request->get('name');
        $plant->species =$request->get('species');
        $plant->watering_instructions  =$request->get('watering_inst');

        if ($request->hasFile('photo') && $request->file('photo')->isValid())
        {
            $plant->photo = time().'.'.$request->photo->extension();
            $path = $request->photo->storeAs('public/img',$plant->photo);

        }
        $plant->save();

        return redirect('add');
    }
}

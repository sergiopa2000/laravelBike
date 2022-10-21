<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::all();
        return view('bike.index', [ 'activeBike' => 'active',
                                    'bikes' => $bikes,
                                    'subTitle' => 'Bike list',
                                    'title' => 'Bike',]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bike.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $bike = new Bike($request->all());
        $bike->save();
        return redirect('bike');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike) // (Bike $bike)
    {
        return view('bike.show', [ 'activeBike' => 'active',
                                    'bike' => $bike,
                                    'subTitle' => 'Bikes - Show - ' . $bike->name,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        return view('bike.edit', [ 'activeBike' => 'active',
                                    'bike' => $bike,
                                    'subTitle' => 'Bikes - Edit - ' . $bike->name,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike) // (Request $request, Bike $bike)
    {
        $bike->update($request->all());
        return redirect('bike');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike) // (Bike $bike)
    {
        $bike->delete();
        return redirect('bike');
    }
}

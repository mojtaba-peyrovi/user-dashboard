<?php

namespace App\Http\Controllers;
use App\Deal;
use App\Car;
use Illuminate\Http\Request;
use MattWells\Faker\Vehicle\Provider;
use Carbon\Carbon;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car = Car::find(1);
        // dd($car['make']);
        $carAge = date("Y") - $car['year'];
        $deals = Deal::where(function($query) use($car) {
            $query->where('eligibleMake','like', '%' . $car['make'] . '%')
                ->orWhere('eligibleMake','0');
            })
            ->where(function($query) use($car){
                $query->where('eligibleModel','like', '%' . $car['model'] . '%')
                    ->orWhere('eligibleModel','0');
            })
            ->where(function($query) use($car){
                $query->where('minSumInsured', '<=' , $car['carValue'])
                ->where('maxSumInsured', '>' , $car['carValue']);
            })

            ->where(function($query) use ($carAge) {
            $query->where('minAge','<=', $carAge)
            ->where('maxAge','>', $carAge);
            })

            ->get();

        dd($deals);






        // $car->deals()->sync(1);
        // dd($deals);

        return view('backend.pages.cars.create');
    }

    // where('make','like', '%' . $s . '%');

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}

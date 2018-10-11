<?php

namespace App\Http\Controllers;

use App\Deal;
use Illuminate\Http\Request;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deals = Deal::all();
        return view('backend.pages.deals.index', compact('deals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.deals.create');
    }

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
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function show(Deal $deal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function edit(Deal $deal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deal $deal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deal $deal)
    {
        //
    }

    public function search(Request $request)
    {
        $make = $request->get('make');
        $model = $request->get('model');
        $year = $request->get('year');
        $carAge = date("Y") - $request->get('year');
        $location = $request->get('location');  //Bangkok- UpCountry
        if ($location == 'Bangkok') {
            $location_code = '1';
        }else {
            $location_code = '0';
        }

        $deals = Deal::where(function($query) use($make) {
            $query->where('eligibleMake','like', '%' . $make . '%')
                ->orWhere('eligibleMake','0');
            })
            ->where(function($query) use($model){
                $query->where('eligibleModel','like', '%' . $model . '%')
                    ->orWhere('eligibleModel','0');
            })
            ->where(function($query) use($location_code) {
                $query->where('bangkok', $location_code)
                ->where('upCountry', $location_code);

            })
            // ->where(function($query) use($model){
            //     $query->where('eligibleModel','like', '%' . $model . '%')
            //         ->orWhere('eligibleModel','0');
            // })
            // ->where(function($query) use($car){
            //     $query->where('minSumInsured', '<=' , $car['carValue'])
            //     ->where('maxSumInsured', '>' , $car['carValue']);
            // })
            //
            ->where(function($query) use ($carAge) {
            $query->where('minAge','<=', $carAge)
            ->where('maxAge','>=', $carAge);
            })

            ->get();

            $data = ['deals', 'make', 'model','year', 'location'];
        return view('backend.pages.deals.results', compact($data));
    }
}

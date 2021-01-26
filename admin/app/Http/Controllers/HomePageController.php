<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('company.aboutus');
    }


    public function missionandvision()
    {
        return view('company.missionandvision');
    }


    public function corevalues()
    {
        return view('company.corevalues');
    }


    public function motto()
    {
        return view('company.motto');
    }


    public function ourhistory()
    {
        return view('company.ourhistory');
    }


    public function whatisfoodrecycling()
    {
        return view('company.whatisfoodrecycling');
    }


    public function whatwedo()
    {
        return view('company.whatwedo');
    }


    public function depositfood()
    {
        return view('company.depositfood');
    }

    public function volunteer()
    {
        return view('company.volunteer');
    }

    public function donate()
    {
        return view('company.donate');
    }

    public function whatsnew()
    {
        return view('company.whatsnew');
    }

    public function careers()
    {
        return view('company.careers');
    }

    public function team()
    {
        return view('team.team');
    }

    public function ourgoals()
    {
        return view('team.ourgoals');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

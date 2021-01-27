<?php

namespace App\Http\Controllers;

use App\Contact;
use App\CoreValue;
use App\DepositFood;
use App\MissionAndVision;
use App\Motto;
use App\OurHistory;
use App\Team;
use App\WhatIsFoodRecyling;
use App\WhatWeDo;
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

        $missionAndVisions = MissionAndVision::all();

        return view('company.missionandvision',compact('missionAndVisions'));
    }


    public function corevalues()
    {
        $coreValues = CoreValue::all();

        return view('company.corevalues',compact('coreValues'));
    }


    public function motto()
    {

        $mottoes = Motto::all();

        return view('company.motto',compact('mottoes'));
    }


    public function ourhistory()
    {
        $histo = OurHistory::all();
        return view('company.ourhistory',compact('histo'));
    }


    public function whatisfoodrecycling()
    {

        $wifr = WhatIsFoodRecyling::all();

        return view('company.whatisfoodrecycling',compact('wifr'));
    }


    public function whatwedo()
    {
        $whatwedo = WhatWeDo::all();
        return view('company.whatwedo',compact('whatwedo'));
    }


    public function depositfood()
    {
        $df = DepositFood::all();

        return view('company.depositfood',compact('df'));
    }

    public function singledepositfood(DepositFood $singledepositfood) {

        return view('company.singledepositfood',compact('singledepositfood'));
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
        $teams = Team::all();
        return view('team',compact('teams'));
    }

    public function s1() {

        return view('services.sustainableagriculturalconsultancy');
    }

    public function s2() {

        return view('services.foodwasterecyclingindustry');
    }

    public function s3() {

        return view('services.foodbankingfoodsecurity');
    }

    public function s4() {

        return view('services.eosphconsultancy');
    }

    public function ourgoals()
    {
        return view('team.ourgoals');
    }

    public function contact()
    {
        $contact = Contact::all();
        return view('contact',compact('contact'));
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

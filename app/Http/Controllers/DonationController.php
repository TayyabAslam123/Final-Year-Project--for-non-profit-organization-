<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donation;
use App\Campaign;
use DB;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function index($id)
    {
       ////// $campaigns = Campaign::find($id);
        ///////return view('Donations.form')->with('campaigns',$campaigns);
        //return view('Donations.form');

        return 'ok';



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
        $donation = new donation;
        $donation->id = $request->input('id');
        $donation->amount = $request->input('amount');
        $donation->campaign_id = $request->input('campaign_id');
        $donation->user_id = auth()->user()->id;
        $donation->save();

        $c_id = strval($donation->campaign_id);
        //$sum = DB::select('SELECT sum(amount) FROM posts where campaign_id = $c_id');
        $sum = DB::table('donation')->where('campaign_id', '=', $c_id)->sum('amount');
        $campaign = Campaign::find($donation->campaign_id);
        $campaign->amount_raised = $sum;
        $campaign->amount_remaining = $campaign->amount_required-$sum;
        $campaign->save();
        //$campaignss = DB::table('campaigns')->where('campaign_id', '=', $donation->campaign_id)->get();


        return redirect('/')->with('success','donation successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campaigns = Campaign::find($id);
        return view('donation.donation')->with('campaigns',$campaigns);
        //return view('Donations.form');
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

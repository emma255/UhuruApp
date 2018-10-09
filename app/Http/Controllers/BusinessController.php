<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = 'Business';
        $subheader = 'Business registration processes';
        $message = true;
        
        $processes = Business::first();

        if($processes != null){
            return view('business.register-process', compact('processes','header', 'subheader'));
        }

        else{
            return view('business.register-process', compact('message','header', 'subheader'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = 'Business';
        $subheader = 'Add Business registration processes';
        $message = true;

        return view('business.add', compact('header', 'subheader'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'processes' => 'required',
        ]);

        $processes = new Business;

        $processes->steps = $request->processes;

        $processes->save();

        return redirect()->route('business');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        $header = 'Business';
        $subheader = 'Business registration processes';
        $message = true;
        
        $processes = Business::first();

        if($processes != null){
            return view('business.business', compact('processes','header', 'subheader'));
        }

        else{
            return view('business.business', compact('message','header', 'subheader'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {

        $header = 'Business';
        $subheader = 'Edit Business registration processes';

        $business = Business::first();

        return view('business.edit', compact('business','header', 'subheader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        $this->validate($request, [
            'processes' => 'required',
        ]);
        
        $processes = Business::first();

        $processes->steps = $request->processes;

        $processes->save();
 
        return redirect()->route('business');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        $business = Business::find(request()->id);
        if ($business) {

            $business->delete();

            return redirect()->route('business');
        } else {
            return redirect()->back();
        }
        
    }
}

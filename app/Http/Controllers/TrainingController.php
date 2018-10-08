<?php

namespace App\Http\Controllers;

use App\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::all();

        return view('trainings.list-trainings', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $head = 'Trainings';
        $subhead = 'Create trainings';
        return view('trainings.training-create', compact('head', 'subhead'));
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
            'title'=> 'required',
            'category'=> 'required',
            'body'=> 'required',
        ]);

        $training = new Training;

        $training->title = $request->title;
        $training->category = $request->category;
        $training->body = $request->body;
        $training->posted_by = Auth::user()->name;

        $training->save();

        return redirect()->route('listTrainings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training)
    {
        $training = Training::find(request()->id);

        return view('trainings.training-show', compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        $training = Training::find(request()->id);

        return view('trainings.training-edit', compact('training'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $training)
    {
        $training = Training::find(request()->id);

        $this->validate($request, [
            'title'=> 'required',
            'category'=> 'required',
            'body'=> 'required',
        ]);

        $training->title = $request->title;
        $training->category = $request->category;
        $training->body = $request->body;
        $training->last_updated_by = Auth::user()->name;

        $training->save();

        return redirect()->route('listTrainings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {

        if( $training = Training::find(request()->id)){

         $training->delete();

         return redirect()->route('listTrainings');
        }
        else{
            echo 'Nothing selected to delete';
        }
    }
    
    /**
     * Get the specified category of trainings from the list.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function getTrains(Request $request)
    {
        $trains = Training::where('category',request()->id)->get();

        if(sizeof($trains) != 0){
            return view('trainings.trains-category', compact('trains'));
            // echo $trains;
        }

        else{   
            dd('no data eixsts');
        }
    }
    /**
     * Get the specified train from the list.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function getTrain(Request $request)
    {
        $train = Training::find(request()->id);

        if($train){
            return view('trainings.train', compact('train'));
        }

        else{   
            dd('no data eixsts');
        }
    }
}

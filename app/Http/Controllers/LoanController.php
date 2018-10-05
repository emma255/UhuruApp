<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutions = Loan::all();

        return view('webcontents.list-loan-institutions', compact('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webcontents.loan-institution-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'organization_name'=>'required',
            'collateral'=>'required',
            'credit_value'=>'required',
            'minimum_amount'=>'required',
            'scale'=>'required',
            'extra'=>'required',
            'contacts'=>'required',
        ]);
        $institution = new Loan;

        $institution->organization_name = $request->organization_name;
        $institution->collateral = $request->collateral;
        $institution->credit_value = $request->credit_value;
        $institution->extra_notes = $request->extra;
        $institution->minimum_amount = $request->minimum_amount;
        $institution->scale = $request->scale;
        $institution->contacts = $request->contacts;

        $institution->save();

        return redirect()->route('listInstitutions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $institute = Loan::find(request()->id);

        return view('webcontents.admin-loan-institution', compact("institute"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $institution = Loan::find(request()->id);

        return view('webcontents.loan-institution-edit', compact('institution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        $institution = Loan::find(request()->id);


        $this->validate($request,[
            'organization_name'=>'required',
            'collateral'=>'required',
            'credit_value'=>'required',
            'minimum_amount'=>'required',
            'scale'=>'required',
            'extra'=>'required',
            'contacts'=>'required',
        ]);

        $institution->organization_name = $request->organization_name;
        $institution->collateral = $request->collateral;
        $institution->credit_value = $request->credit_value;
        $institution->extra_notes = $request->extra;
        $institution->minimum_amount = $request->minimum_amount;
        $institution->scale = $request->scale;
        $institution->contacts = $request->contacts;

        $institution->save();

        return redirect()->route('listInstitutions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        $institution = Loan::find(request()->id);

        $institution->delete();

        return redirect()->route('listInstitutions');
    }

    /**
     * Return the form for requesting loans.
     *
     * @return \Illuminate\Http\Response
     */
    public function loanForm()
    {
        return view('webcontents.loan-request-form');
    }
    /**
     * Process loan request.
     *
     * @return \Illuminate\Http\Response
     */
    public function requestLoan(Request $request)
    {

        $institutions = Loan::where([
            ['collateral',$request->collateral],
            ['credit_value','<=', $request->credit_value],
            ['minimum_amount','>=', $request->amount],
            ['scale',$request->scale]
        ])->get();

        return view('webcontents.requested-institution', compact('institutions'));
        // echo $institution;
    }
    /**
     * return the successfully requested institute.
     *
     * @return \Illuminate\Http\Response
     */
    public function requestedInstitute()
    {

        $institute = Loan::find(request()->id);

        return view('webcontents.succeed-institute', compact('institute'));
    }

}

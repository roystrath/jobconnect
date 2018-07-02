<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use the companies model
use App\Companies;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Pagination\LengthAwarePaginator;

class CompaniesController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /**require authentication on all company pages except the index page
        which simply displays the listed companies
        */
        $this->middleware('auth', ['except'=>['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::orderBy('name', 'asc')->paginate(2);
        //$companies = Companies::where('id','>',0)->paginate(1);
        // //where(count($id),'>',0)
        //  $companies = DB::table('companies')->simplePaginate(1);

        // return view('companies.index', ['companies' => $companies]);
        return view('companies.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name'=>'required',
        'location'=>'required', 'interests'=>'required',
        'email'=>'required']);
        // ADD A NEW COMPANY
        $company = new Companies;
        $company->name = $request->input('name');
        $company->location = $request->input('location');
        $company->interests = $request->input('interests');
        $company->email = $request->input('email');
        $company->user_id = auth()->user()->id;
        // $company->password = $request->input('password');
        $company->save();

        //return to the companies page and display success message
        return redirect('/companies')->with('success', 'Company Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return the id of the company passed from index()
        $companies = Companies::find($id);
        return view('companies.show')->with('companies', $companies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Companies::find($id);

        //check for correct user
        if(auth()->user()->id !== $company->user_id){
            return redirect('/companies')->with('error', 'Unauthorized page');
        }else{
            return view('companies.edit')->with('companies', $company);
        }
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
        $this->validate($request, ['name'=>'required',
        'location'=>'required', 'interests'=>'required',
        'email'=>'required']);
        // ADD A NEW COMPANY
        $company = Companies::find($id);
        $company->name = $request->input('name');
        $company->location = $request->input('location');
        $company->interests = $request->input('interests');
        $company->email = $request->input('email');
        // $company->password = $request->input('password');
        $company->save();

        //return to the companies page and display success message
        return redirect('/companies')->with('success', 'Company Profile Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companies = Companies::find($id);
        $post->delete();
        return redirect('/companies')->with('success', 'Company Deleted Successfully');

    }
}

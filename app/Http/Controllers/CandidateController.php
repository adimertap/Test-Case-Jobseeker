<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $item = Candidate::latest()->get();

        if ($request->ajax()) {
            return DataTables::of($item)
                    ->editColumn('last_salary', function($item) {
                        return 'Rp.' . number_format($item->last_salary, 0);
                    })
                    ->editColumn('gender', function ($item) {
                        if ($item->gender == 'F') return 'Female';
                        if ($item->gender == 'M') return 'Male';
                    })

                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->candidate_id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editCandidate">Edit</a>';
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->candidate_id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteCandidate">Delete</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('welcome', compact('item'));
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
        $this->validate($request, 
            [
                'full_name' => 'required|string',
                'pob' => 'required',
                'dob' => 'required|string',
                'gender' => 'required',
                'year_exp' => 'required|numeric',
                'last_salary' => 'required|numeric'
            ]
        );

            $item = new Candidate();
            $item->full_name = $request->full_name;
            $item->pob = $request->pob;
            $item->dob = $request->dob;
            $item->gender = $request->gender;
            $item->year_exp = $request->year_exp;
            $item->last_salary = $request->last_salary;
            $item->save();

     

        return response()->json(['success'=>'Candidate saved successfully']);
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
        return Candidate::findOrFail($id);
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
        $item = Candidate::find($request->candidate_id);
        $item->full_name = $request->full_name;
        $item->pob = $request->pob;
        $item->dob = $request->dob;
        $item->gender = $request->gender;
        $item->year_exp = $request->year_exp;
        $item->last_salary = $request->last_salary;
        $item->update();

        return response()->json(['success'=>'Candidate updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Candidate::find($id)->delete();
        return response()->json(['success'=>'Candidate deleted successfully.']);
    }
}

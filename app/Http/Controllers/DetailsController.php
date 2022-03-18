<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\Detail;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::get();

        return view('details.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegisterRequest $request)
    {
        $detail = Detail::create($request->validated());

        if (!$detail)
            return redirect()->route('crud.create');

        return redirect()->route('crud.index')->with('success', 'Application was successfully saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        //
    }

    public function edit($id)
    {
        try {
            $detail = Detail::where('id', $id)->first();

            return view('details.edit', compact('detail'));
        } catch(\Exception $e) {
            $e->getMessage();
        }
    }

    public function update(Request $request, $id)
    {
        $detail = $request->validate([
            'full_name' => 'required|min:3|max:30',
            'email_address' => 'required',
            'birth_date' => 'required',
            'position_applied' => 'required',
            'edge' => 'required|min:5'
        ]);

        $detail = Detail::where('id', $id)->update([
            'full_name' => $request->full_name,
            'email_address' => $request->email_address,
            'birth_date' => $request->birth_date,
            'position_applied' => $request->position_applied,
            'edge' => $request->edge,
        ]);

        if (!$detail) {
            return back(); 
        }
    
        return redirect()->route('crud.index')->with('success', 'Application was successfull updated.');  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Detail::where('id', $id)->first();

        $detail->delete();

        return redirect()->route('crud.index')->with('success', 'Applicant was successfully deleted.');
    }
}

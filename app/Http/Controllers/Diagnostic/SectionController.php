<?php

namespace App\Http\Controllers\Diagnostic;

use App\Models\Form;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:read diagnostic/sections', ['only' => ['index','show']]);
    //     $this->middleware('permission:create diagnostic/sections', ['only' => ['create','store']]);
    //     $this->middleware('permission:update diagnostic/sections', ['only' => ['edit','update']]);
    //     $this->middleware('permission:delete diagnostic/sections', ['only' => ['destroy']]);
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::id();
        $sections = Section::where('user_id',$user_id)->get();
        return view('diagnostics.section',compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $section = new Section();
        return view('diagnostics.section-action', array_merge(
            ['section'=>$section],
            $this->_dataSelection(),
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Section::create($request->all());
        return to_route('testsections.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        return view('diagnostics.section-action', array_merge(
            ['section'=>$section],
            $this->_dataSelection(),
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function _dataSelection()
    {
        return [
            'sections' =>  Section::where('user_id',Auth::id())->get(),
            'forms' => Form::all(),
        ];
    }

}

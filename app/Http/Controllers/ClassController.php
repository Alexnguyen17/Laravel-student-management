<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Http\Requests\CreateClassRequest;
use Illuminate\Http\Request;

class ClassController extends Controller
{

    public function index()
    {
        $classes = Classes::latest()->paginate(5);
        return view('class.index', compact('classes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('class.create');

    }


    public function store(CreateClassRequest $request)
    {
        Classes::create($request->all());
        return redirect()->route('class.index')
            ->with('success', 'new student create successfully');
    }


    public function show($id)
    {
        $class = Classes::find($id);
        return view('class.detail', compact('class'));
    }


    public function edit($id)
    {
        $class = Classes::find($id);
        return view('class.edit', compact('class'));
    }


    public function update(Request $request, $id)
    {
        $class = Classes::find($id);
        $class->className = $request->get('className');
        $class->startDay = $request->get('startDay');
        $class->endDay = $request->get('endDay');
        $class->save();

        return redirect()->route('class.index')
        ->with('success', 'Class update successfully');
    }


    public function destroy($id)
    {
        $class = Classes::find($id);
        $class->delete();
        return redirect()->route('class.index')
            ->with('success', 'Class delete successfully');

    }
}

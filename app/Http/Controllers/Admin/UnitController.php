<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
            return view('admin.main.unit.index', compact('units'));
    }

    public function create()
    {
        return view('admin.main.unit.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255'
            ]);

            $inputs = $request->all();

            $unit = new Unit();
            $unit->fill($inputs);
            $unit->save();

            return redirect()->route('admin.units.index')->with('success', 'Unit create successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $unit = Unit::find($id);
        return view('admin.main.unit.edit', compact('unit'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255'
            ]);

            $unit = Unit::find($id);
            
            $unit->name = $request->input('name');
            $unit->status = $request->input('status');

            $unit->save();

            return redirect()->route('admin.units.index')->with('success', 'Unit updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        Unit::find($id)->delete();
        return redirect()->back()->with('success', 'Unit deleted successfully.');
    }
}

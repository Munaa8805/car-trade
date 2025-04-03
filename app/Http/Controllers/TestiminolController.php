<?php

namespace App\Http\Controllers;

use App\Models\Testiminol;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;

class TestiminolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $testiminols = Testiminol::latest()->get();
        $title = 'Testiminols';

        return view('testiminol.index', [
            'testiminols' => $testiminols,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $title = 'Create Testiminol';

        return view('testiminol.create', [
            'title' => $title,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Testiminol $testiminol): View
    {
        //
        $title = 'Testiminol Details';
        return view('testiminol.show', [
            'testiminol' => $testiminol,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testiminol $testiminol): View
    {
        //
        return view('testiminol.edit', [
            'testiminol' => $testiminol,
            'title' => 'Edit Testiminol',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testiminol $testiminol)
    {
        //
        $validatedData =   $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'comment' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $testiminol->update($validatedData);
        // return Redirect::route('testiminols.index')->with('success', 'Testiminol updated successfully');
        return redirect()->route('testiminols.index')->with('success', 'Testiminol updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testiminol $testiminol): RedirectResponse
    {
        $testiminol->delete();
        // return Redirect::route('testiminols.index')->with('success', 'Testiminol deleted successfully');
        return redirect()->route('testiminols.index')->with('success', 'testiminol listing deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Website_config;
use Illuminate\Http\Request;

class WebsiteConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $config = Website_config::first();
        return view('cms.website_config.index', compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'contact' => 'required|string|max:45',
            'address' => 'required|string|max:200',
            'facebook' => 'nullable|string|max:45',
            'linkdin' => 'nullable|string|max:45',
            'twitter' => 'nullable|string|max:45',
            'youtube' => 'nullable|string|max:45',
            'other' => 'nullable|string|max:45',
            'lat' => 'nullable|string|max:45',
            'longi' => 'nullable|string|max:45',
        ]);

        Website_Config::create($data);
        return redirect()->back()->with('success', 'Config created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Website_config $website_config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Website_config $website_config)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Website_config $website_config)
    {
        $data = $request->validate([
            'contact' => 'required|string|max:45',
            'address' => 'required|string|max:200',
            'facebook' => 'nullable|string|max:45',
            'linkdin' => 'nullable|string|max:45',
            'twitter' => 'nullable|string|max:45',
            'youtube' => 'nullable|string|max:45',
            'other' => 'nullable|string|max:45',
            'lat' => 'nullable|string|max:45',
            'longi' => 'nullable|string|max:45',
        ]);

        $website_config->update($data);
        return redirect()->back()->with('success', 'Config updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Website_config $website_config)
    {
        //
    }
}

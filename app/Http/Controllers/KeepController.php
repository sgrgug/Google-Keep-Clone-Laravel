<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keep;

class KeepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keep = Keep::all();

        // It's check the availability of pinned keep to show the title pinned in blade file
        $pinAvailable = Keep::where('pin', '=', 1)->exists();
        if ($pinAvailable) {
            $isAvailability = "Pinned";
        } else {
            $isAvailability = "";
        }

        return view('home', ['keep'=>$keep], ['isAvailability'=>$isAvailability]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $keeps = new Keep;
        $keeps->title = $request->title;
        $keeps->content = $request->content;
        $keeps->save();
        return redirect(route('index'))->with('status','Added! Successfully');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $keep = Keep::find($id);
        return view('editkeep', ['keep'=>$keep]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $keeps = Keep::find($id);
        $keeps->title = $request->title;
        $keeps->content = $request->content;
        $keeps->save();
        return redirect(route('index'))->with('status','Updated! Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Keep::destroy($id);
        return redirect(route('index'));
    }
}

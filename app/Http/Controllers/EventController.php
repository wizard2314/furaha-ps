<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestEvents = Event::orderBy('created_at', 'desc')->get();
        return view('index', ['events'=> $latestEvents]);
    }

    public function single($id) {
        $singleEvent = Event::find($id);
        if(!$singleEvent){
            abort(404);
        }
        
        return view('events.single', compact('singleEvent'));
    }

    public function allEvents() {
        $allEvents = Event::all();
        return view('news', compact('allEvents'));   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all('image'));

        $filename = '';

        if($request->hasFile('image')){
            $filename = time() . '.' . $request->image->getClientOriginalExtension();

            $request->image->move(public_path('assets/images'), $filename);
        }

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $filename
        ]);

        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}

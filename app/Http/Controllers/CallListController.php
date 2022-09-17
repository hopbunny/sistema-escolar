<?php

namespace App\Http\Controllers;

use App\Models\CallList;
use Illuminate\Http\Request;

class CallListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        foreach($request->present as $key => $p)
        {
            CallList::updateOrCreate(
                [
                    'student_id' => $key,
                    'room_id' => $request->room,
                    'created_at' => CallList::where('created_at', 'LIKE', date('Y-m-d').' %')->first()->created_at ?? null
                ],
                [                   
                    'present' => empty($p) ? false : true
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CallList  $callList
     * @return \Illuminate\Http\Response
     */
    public function show(CallList $callList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CallList  $callList
     * @return \Illuminate\Http\Response
     */
    public function edit(CallList $callList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CallList  $callList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CallList $callList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CallList  $callList
     * @return \Illuminate\Http\Response
     */
    public function destroy(CallList $callList)
    {
        //
    }
}

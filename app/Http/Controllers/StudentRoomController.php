<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Student;
use App\Models\StudentRoom;
use Illuminate\Http\Request;

class StudentRoomController extends Controller
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
        $rooms = Room::all();
        $students = Student::all();
        return view('rooms.enroll', ['rooms' => $rooms, 'students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach($request->student_id as $student){
            StudentRoom::create([
                'student_id' => $student,
                'room_id' => $request->room_id
            ]);
        }
        return redirect()->route('room.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentRoom  $studentRoom
     * @return \Illuminate\Http\Response
     */
    public function show(StudentRoom $studentRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentRoom  $studentRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentRoom $studentRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentRoom  $studentRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentRoom $studentRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentRoom  $studentRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentRoom $studentRoom)
    {
        //
    }
}

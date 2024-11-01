<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
           'count'=>student::all()->count(),
           'data'=>StudentResource::collection(Student::all())
        ]);
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
        return response()->json([
            'comment'=>"Өгөгдлийн баазад шинэ мэдээлэл нэмэгдлээ",
             $x=Student::create([
                'course_id'=> 1,
                'firstName'=> $request->firstName,
                'lastName'=> $request->lastName,
                'gender'=> $request->gender,
                'phoneNumber'=> $request->phoneNumber,
                'RD'=> $request->RD,
                'isActive'=> $request->isActive,
               ])
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $x=Student::find($id);
        if ($x){
           return $x.$id."->id-тай сурагчийн Мэдээллийг харууллаа";
        }else{
            return $id."->id-тай сурагчийн Мэдээлэл байхгүй байна";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $oneStudent=Student::find($id);
        
        if($oneStudent){
             $res=$oneStudent->update([
                'firstName'=> $request->firstName,
                'lastName'=> $request->lastName,
                'gender'=> $request->gender,
                'phoneNumber'=> $request->phoneNumber,
                'RD'=> $request->RD,
                'isActive'=> $request->isActive,
            ]);
            return $oneStudent.$id." id-тай өгөгдөл өөрчлөгдлөө";
        }else{
            return $id." кодтой өгөгдөл байхгүй";
        }        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $x=Student::find($id);
        if($x){
            $aa=$x->delete();
            return $id." id-тэй курс устгалаа";
        }else{
            return $id." id-тэй курс олдсонгүй";
        }
    }
        
}


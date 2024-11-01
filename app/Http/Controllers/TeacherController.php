<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Resources\TeacherResource;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'Comment'=>"Сайн байна уу таньд энэ өдрийн мэнд хүгэе, Дата базаас бүх багш нарын мэдээллийг харууллаа.",
            'count'=>Teacher::all()->count(),
            'data'=>TeacherResource::collection(Teacher::all())        
        ], 200);
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
        $x=Teacher::create([
            'id'=> $request->id,
            'firstName'=> $request->firstName,
            'lastName'=> $request->lastName,
            'gender'=> $request->gender,
            'phoneNumber'=> $request->phoneNumber,
            'lesson'=> $request->lesson,
        ]),
       ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $x=Teacher::find($id);
        if ($x){
           return $x.$id."->id-тай багшийн Мэдээллийг харууллаа";
        }else{
            return $id."->id-тай багшийн Мэдээлэл байхгүй байна";
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
        $oneTeacher=Teacher::find($id);
        
        if($oneTeacher){
             $res=$oneTeacher->update([
                'firstName'=> $request->firstName,
                'lastName'=> $request->lastName,
                'gender'=> $request->gender,
                'phoneNumber'=> $request->phoneNumber,
                'lesson'=> $request->lesson,
            ]);
            return $oneTeacher.$id." id-тай өгөгдөл өөрчлөгдлөө";
        }else{
            return $id." кодтой өгөгдөл байхгүй";
        }        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $x=Teacher::find($id);
        if($x){
            $aa=$x->delete();
            return $id." id-тэй курс устгалаа";
        }else{
            return $id." id-тэй курс олдсонгүй";
        } //
    }
}

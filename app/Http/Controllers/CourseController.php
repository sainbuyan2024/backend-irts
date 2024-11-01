<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Resources\CourseResource;
use App\Http\Controllers\CourseControlloer;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'Comment'=>"Сайн байна уу таньд дараах мэдээллийг харуулж байна.",
            'count'=>Course::all()->count(),
            'data'=>CourseResource::collection(Course::all())        
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
        $x=Course::create([
            'id'=>$request->id,
            'teacher_id'=> 1,
            'grade'=> $request->grade,
            'group'=> $request->group,
            'YearLesson'=> $request->YearLesson,
            'isActive'=> $request->isActive,

        ]);

        return "Өгөгдлийн баазад шинэ мэдээлэл нэмэгдлээ".$x;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $x=Course::find($id);
        if ($x){
           return $x.$id."->id-тай ангийн Мэдээллийг харууллаа";
        }else{
            return $id."->id-тай ангийн Мэдээлэл байхгүй байна";
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
        $oneCourse=Course::find($id);
        
        if($oneCourse){
             $res=$oneCourse->update([
                'teacher_id'=>$request->teacher_id,
                'grade'=> $request->grade,
                'group'=> $request->group,
                'YearLesson'=> $request->YearLesson,
                'isActive'=> $request->isActive,
            ]);
            return $oneCourse.$id." id-тай өгөгдөл өөрчлөгдлөө";
        }else{
            return $id." кодтой өгөгдөл байхгүй";
        }        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $x=Course::find($id);
        if($x){
            $aa=$x->delete();
            return $id." id-тэй курс устгалаа";
        }else{
            return $id." id-тэй курс олдсонгүй";
        }
    }
}

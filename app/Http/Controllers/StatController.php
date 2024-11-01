<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stat;
use App\Http\Resources\StatResource;
class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'comment'=>"Сайн байна уу таньд энэ өдрийн мэнд хүгэе.",
                'cnt'=>Stat::all()->count(),
            'data'=>StatResource::collection(Stat::all())        
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
        $x=Stat::create([
            'name'=> $request->name,
            'abr'=> $request->abr,
        ]);

        return "Өгөгдлийн баазад шинэ мэдээлэл нэмэгдлээ".$x;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $x=Stat::find($id);
        if ($x->count()>0){
           return  response()->json([
              "data"=> $x,
              "status"=>"Амжилттай",
           ], 200);
            
        }else{
           return
            $id."->id-тай төлөв байхгүй байна";
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
        $oneStat=Stat::find($id);
        
        if($oneStat){
             $res=$oneStat->update([
                'name'=> $request->name,
                'abr'=> $request->abr,
            ]);
            return $oneStat.$id." id-тай өгөгдөл өөрчлөгдлөө";
        }else{
            return $id." кодтой өгөгдөл байхгүй";
        }        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $x=Stat::find($id);
        if($x){
            $aa=$x->delete();
            return $id." id-тэй курс устгалаа";
        }else{
            return $id." id-тэй курс олдсонгүй";
        } //
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\AttendanceResource;

class StatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'abr'=> $this->abr,
            //'attendances'=> [
            //    'count'=>$this->attendances->count(),
            //    'data'=>AttendanceResource::collection($this->attendances)
            //]
            ];
           
    }
}

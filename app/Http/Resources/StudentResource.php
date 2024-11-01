<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\AttendanceResource;


class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id'=> $this->id,
            'course_id'=> $this->course_id,
            'firstName'=> $this->firstName,
            'lastName'=> $this->lastName,
            'gender'=> $this->gender,
            'phoneNumber'=> $this->phoneNumber,
            'RD'=> $this->RD,
            'isActive'=> $this->isActive,
            //'attendances'=> [
              //  'count'=>$this->attendances->count(),
                //'data'=>AttendanceResource::collection($this->attendances)
            //]
            ];
    }
}

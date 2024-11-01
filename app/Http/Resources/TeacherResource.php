<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CourseResource;
class TeacherResource extends JsonResource
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
            'firstName'=> $this->firstName,
            'lastName'=> $this->lastName,
            'gender'=> $this->gender,
            'phoneNumber'=> $this->phoneNumber,
            'lesson'=> $this->lesson,

            //'teachers'=> [
            //    'count'=>$this->Teachers->count(),

                //'data'=>CourseResource::collection($this->courses)
            //]
            ];
    }
}

<?php

namespace App\Http\Resources;
use App\Http\Resources\StudentResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'teacher_id'=> $this->teacher_id,
            'grade'=> $this->grade,
            'group'=> $this->group,
            'YearLesson'=> $this->YearLesson,
            'isActive'=> $this->isActive
            //'attendances'=> [
              //  'count'=>$this->attendances->count(),
                //'data'=>AttendanceResource::collection($this->attendances)
            //]
        ];
    }
}

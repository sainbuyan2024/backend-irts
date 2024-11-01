<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\StatResource;
use App\Http\Resources\StudentResource;
use App\Http\Resources\CourseResource;
use App\Http\Resources\TeacherResource;
use App\Http\Resources\AttendanceResource;
class AttendanceResource extends JsonResource
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
            'student_id'=> $this->student_id,
            'stat_id'=> $this->stat_id,
            'adate'=> $this->adate,
            // 'created_at'=>true,
            // 'updated_at'=>true,

            //'attendances'=> [
              //  'count'=>$this->attendances->count(),
                //'data'=>AttendanceResource::collection($this->attendances)
            //]
        ];
    }
}

<?php


namespace App\Repositories;


use App\Interfaces\CourseInterface;
use App\Models\Course;

class CourseRepository implements CourseInterface
{

    public function update($id, array $data)
    {
        $course = Course::find($id);
        $course->update($data);
        return $course;
    }
}

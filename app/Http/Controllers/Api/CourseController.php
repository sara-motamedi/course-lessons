<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use App\Repositories\CourseRepository;

class CourseController extends Controller
{
    private CourseRepository $CourseRepository;

    public function __construct(CourseRepository $CourseRepository)
    {
        $this->CourseRepository = $CourseRepository;
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $newCourse = $this->CourseRepository->update($course->id, $request->all());
        return new CourseResource($newCourse);
    }
}

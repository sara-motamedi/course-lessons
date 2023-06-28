<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Resources\LessonResource;
use App\Models\Course;
use App\Repositories\LessonRepository;

class LessonController extends Controller
{
    private LessonRepository $LessonRepository;

    public function __construct(LessonRepository $LessonRepository)
    {
        $this->LessonRepository = $LessonRepository;
    }

    public function store(StoreLessonRequest $request, Course $course)
    {
        $data = $request->all();
        $data['course_id'] = $course->id;
        $lesson = $this->LessonRepository->store($data);
        return new LessonResource($lesson);
    }
}

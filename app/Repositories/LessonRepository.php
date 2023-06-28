<?php


namespace App\Repositories;


use App\Interfaces\LessonInterface;
use App\Models\Lesson;

class LessonRepository implements LessonInterface
{
    public $lesson;

    function __construct(Lesson $lesson)
    {
        $this->lesson = $lesson;
    }

    public function store(array $data)
    {
        $lesson = $this->lesson->create($data);
        return $lesson;
    }
}

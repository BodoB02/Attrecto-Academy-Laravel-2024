<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
//use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response;

class CourseController extends Controller
{
    private array $courses;

    public function __construct(){
        $this->courses = [
            [
            'id' => 1,
            'title' => 'Elso pelda title',
            'description' => 'Elso pelda description',
            'author' => 'Author egy',
            'url' => 'http://courseegy.hu',
            ],
            [
            'id' => 2,
            'title' => 'Masodik pelda title',
            'description' => 'Masodik pelda description',
            'author' => 'Author ketto',
            'url' => 'http://courseketto.hu',
            ],
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = response()->json(Course::all(['id','title','description']));
        response()->json($course);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCourseRequest $request)
    {
        $data = $request->only([
            'title',
            'description',
            'author',
            'url'
        ]);

        $course = Course::create($data);

        return response()->json($course, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return response()->json($course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $data = $request->only(['title', 'description']);

        $course->update($data);

        return response()->json($course);
    }

    public function destroy(Course $course)
    {
        $course->delete();

       return response()->json('', Response::HTTP_NO_CONTENT);
    }
}

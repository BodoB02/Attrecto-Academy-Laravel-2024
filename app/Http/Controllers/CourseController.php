<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
<<<<<<< HEAD
//use Symfony\Component\HttpFoundation\Response;
=======
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a
use App\Http\Resources\CourseIndexResource;

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
<<<<<<< HEAD
        response()->json(CourseIndexResource::collection(Course::all()), Response::HTTP_OK);
=======
        return response()->json(CourseIndexResource::collection(Course::all()), Response::HTTP_OK);
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a
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
<<<<<<< HEAD
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $data = $request->only(['title', 'description']);

=======
    public function update(UpdateCourseRequest $request, string $id)
    {
        $data = $request->only(['title', 'description']);

        $course = Course::findOrFail($id);

>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a
        $course->update($data);

        return response()->json($course);
    }

    public function destroy(Course $course)
    {
<<<<<<< HEAD
        $course->delete();

       return response()->json('', Response::HTTP_NO_CONTENT);
=======
        $course = Course::findOrFail($id);

        $course->delete();

        return response()->json('', Response::HTTP_NO_CONTENT);
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a
    }
}

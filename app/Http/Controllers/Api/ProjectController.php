<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $projectService;


     function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if ($this->projectService->Projects()) {
            return response()->json([
                'status' => 1,
                'message' => 'All Projects',
                'data' => $this->projectService->Projects()
            ], 200);
        }
        return response()->json([
            'status' => 0,
            'message' => 'No Project Available'
        ], 404);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        // return $data;
        if ($this->projectService->createProject($data)) {
            return response()->json([
                'status' => 1,
                'message' => 'Project Created Successfully'
            ], 201);
        }
        return response()->json([
            'status' => 0,
            'message' => 'An error occurred while creating an Employee'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $project)
    {
        $user = auth()->user();
        if ($this->projectService->ProjectByUser($user->id, $project)) {
            return response()->json([
                'status' => 1,
                'user' => $user,
                'data' => $this->projectService->Projects()
            ], 200);
        }
        return response()->json([
            'status' => 0,
            'message' => 'No Project Found'
        ], 404);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, string $project)
    {
        $data = $request->validated();
        $user = auth()->user();
        if ($this->projectService->ProjectByUserExists($user->id, $project)) {
            $existingProject = $this->projectService->Project($project);
            $data['title'] = !empty($data['title']) ?  $data['title'] : $existingProject->title;
            $data['description'] = !empty($data['description']) ? $data['description'] : $existingProject->description;
            $data['duration'] = !empty($data['duration']) ? $data['duration'] : $existingProject->duration;


            if ($this->projectService->updateProject($project, $data)) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Project Data Updated',
                    'data' => $this->projectService->Project($project)
                ], 200);
            }
            return response()->json([
                'status' => 0,
                'message' => 'An error occurred when update project information, Please check and try again'
            ], 501);
        }
        return response()->json([
            'status' => 0,
            'message' => 'No Project Found'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $project)
    {
        $user = auth()->user();
        if ($this->projectService->ProjectByUserExists($user->id, $project)) {

            if ($this->projectService->deleteProject($project)) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Project Deleted Successfully'
                ], 200);
            }
            return response()->json([
                'status' => 0,
                'message' => 'An error occurred while performing this operation, try again'
            ], 404);
        }
        return response()->json([
            'status' => 0,
            'message' => 'An error occurred while performing this operation, No Project found with the user ID'
        ], 504);

    }
}

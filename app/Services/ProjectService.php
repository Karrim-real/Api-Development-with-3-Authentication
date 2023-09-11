<?php

namespace App\Services;

use App\Interfaces\ProjectInterface;
use App\Models\Project;
class ProjectService implements ProjectInterface
{
    /**
     * projectModel
     *
     * @var mixed
     */
    protected $projectModel;

     /**
      * __construct
      *
      * @param  mixed $project
      * @return void
      */
     function __construct(Project $project) {

        $this->projectModel = $project;
    }

    /**
     * createProject
     *
     * @param  mixed $data
     * @return void
     */
    public function createProject(array $data)
    {
        return $this->projectModel::create($data);
    }

    /**
     * Projects
     *
     * @return void
     */
    public function Projects()
    {

    return $this->projectModel::all();

    }

    /**
     * Project
     *
     * @param  mixed $projectId
     * @return object
     */
    public function Project($projectId)
    {

    return $this->projectModel::findOrFail($projectId);

    }

    /**
     * ProjectByUser
     *
     * @param  mixed $userId
     * @param  mixed $projectId
     * @return void
     */
    public function ProjectByUser($userId, string $projectId)
    {

    return $this->projectModel::where([
        'id'=> $projectId,
        'user_id' => $userId
        ])->first();

    }


    /**
     * ProjectByUserExists
     *
     * @param  mixed $userId
     * @param  mixed $projectId
     * @return object
     */
    public function ProjectByUserExists(string $userId, string $projectId)
    {

    return $this->projectModel::where([
        'id'=> $projectId,
        'user_id'=> $userId
    ])->exists();

    }

    /**
     * checkIfProjectExists
     *
     * @param  mixed $projectId
     * @return void
     */
    public function checkIfProjectExists($projectId)
    {

    return $this->projectModel::where('id', $projectId)->exists();

    }

    /**
     * updateProject
     *
     * @param  mixed $projectId
     * @param  mixed $data
     * @return void
     */
    public function updateProject($projectId, $data)
    {

    return $this->projectModel::whereId($projectId)->update($data);

    }

    /**
     * deleteProject
     *
     * @param  mixed $projectId
     * @return void
     */
    public function deleteProject($projectId)
    {

    return $this->projectModel::destroy($projectId);

    }

}

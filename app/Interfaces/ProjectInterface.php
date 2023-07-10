<?php

namespace App\Interfaces;

interface ProjectInterface
{
    /**
     * createProject
     *
     * @param  mixed $data
     * @return void
     */
    public function createProject(array $data);
    /**
     * Projects
     *
     * @return void
     */
    public function Projects();
    /**
     * Project
     *
     * @param  mixed $projectId
     * @return void
     */
    public function Project(int $projectId);
    /**
     * UpdateProject
     *
     * @param  mixed $projectId
     * @param  mixed $data
     * @return void
     */
    public function UpdateProject(int $projectId, array $data);
    /**
     * deleteProject
     *
     * @param  mixed $projectId
     * @return void
     */
    public function deleteProject(int $projectId);
    /**
     * checkIfProjectExists
     *
     * @param  mixed $projectId
     * @return void
     */
    public function checkIfProjectExists(int $projectId);


}

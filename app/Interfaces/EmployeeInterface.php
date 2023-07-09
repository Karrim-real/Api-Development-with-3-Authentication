<?php

namespace App\Interfaces;

interface EmployeeInterface
{
    /**
     * createEmployee
     *
     * @return void
     */
    public function createEmployee(array $data);

    /**
     * Employees
     *
     * @return void
     */
    public function Employees();

    /**
     * Employee
     *
     * @param  mixed $employeeId
     * @return void
     */
    public function Employee(int $employeeId);

    /**
     * updateEmployee
     *
     * @param  mixed $employeeId
     * @param  mixed $data
     * @return void
     */
    public function updateEmployee(int $employeeId, array $data);

    /**
     * deleteEmployee
     *
     * @param  mixed $employeeId
     * @return void
     */
    public function deleteEmployee(int $employeeId);
}

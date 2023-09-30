<?php

namespace App\Services;

use App\Interfaces\EmployeeInterface;
use App\Models\Employee;

class EmployeeService implements EmployeeInterface
{
    protected $employeeModel;

    public function __construct(Employee $employee) {
        $this->employeeModel = $employee;
    }

    /**
     * createEmployee
     *
     * @param  mixed $data
     * @return void
     */

    public function createEmployee(array $data)
    {
        return $this->employeeModel::create($data);
    }

    public function Employees()
    {
        return $this->employeeModel::all();
    }

    /**
     * Employee
     *
     * @param  mixed $employeeId
     * @return object
     */
    public function Employee(int $employeeId)
    {

        return $this->employeeModel::findOrFail($employeeId);
    }

    public function updateEmployee(int $employeeId, array $data)
    {
        return $this->employeeModel::whereId($employeeId)->update($data);
    }

    public function deleteEmployee(int $employeeId)
    {
        return $this->employeeModel::destroy($employeeId);
    }

    public function checkIfEmployeeExists(int $employee)
    {

        return Employee::where('id', $employee)->exists();

    }
}

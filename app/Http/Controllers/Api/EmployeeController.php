<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Http\Request;
use App\Services\EmployeeService;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isEmpty;

class EmployeeController extends Controller
{
    protected $employeeService;
    public function __construct(EmployeeService $employeeService ) {
        $this->employeeService = $employeeService;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if ($this->employeeService->Employees()) {
            return response()->json([
                'status' => 1,
                'message' => 'All Employee',
                'data' => $this->employeeService->Employees()
            ], 200);
        }
        return response()->json([
            'status' => 0,
            'message' => 'No Employee Available for now'
        ], 404);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create(Employee $request)
    // {

    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $data = $request->validated();
        $data['serial_id'] = Str::uuid();
        if ($this->employeeService->createEmployee($data)) {
            return response()->json([
                'status' => 1,
                'message' => 'Employee Created Successfully'
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
    public function show(string $id)
    {
        if ($this->employeeService->checkIfEmployeeExists($id)) {
            if ($this->employeeService->Employee($id)) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Employee Found',
                    'data' => $this->employeeService->Employee($id)

                ], 200);
            }
        }
        return response()->json([
            'status' => 0,
            'message' => 'No Employee Found'
        ]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, string $employee)
    {
        $data = $request->validated();
        // return $data;

        if ($this->employeeService->checkIfEmployeeExists($employee)) {
            $existingEmployee = $this->employeeService->Employee($employee);
            $data['name'] = !empty($data['name']) ?  $data['name'] : $existingEmployee->name;
            $data['email'] = !empty($data['email']) ? $data['email'] : $existingEmployee->email;
            $data['phone_no'] = !empty($data['phone_no']) ? $data['phone_no'] : $existingEmployee->phone_no;
            $data['gender'] = !empty($data['gender']) ? $data['gender'] : $existingEmployee->gender ;
            $data['age'] = !empty($data['age']) ? $data['age'] :$existingEmployee->age  ;

            if ($this->employeeService->updateEmployee($employee, $data)) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Employee Data Updated',
                    'data' => $this->employeeService->Employee($employee)
                ], 200);
            }
            return response()->json([
                'status' => 0,
                'message' => 'An error occurred when update employee information, Please check and try again'
            ], 501);
        }
        return response()->json([
            'status' => 0,
            'message' => 'No Employee Found'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(string $employee)
    {
        if ($this->employeeService->deleteEmployee($employee)) {
            return response()->json([
                'status' => 1,
                'message' => 'Employee Deleted Successfully'
            ], 200);
        }
        return response()->json([
            'status' => 0,
            'message' => 'An error occurred while performing this operation, try again'
        ], 404);
    }
}

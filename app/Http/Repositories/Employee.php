<?php

namespace App\Http\Repositories;

use App\Models\Employees;

class Employee
{
    public function getEmployees($branch)
    {
        $employees = Employees::select()
            ->where('branchID', $branch)
            ->orderBy('employeeID', "DESC")
            ->get()
            ;

        $headers = array_keys($employees->first()->getAttributes());

        return [
            'headers' => $headers,
            'data' => $employees
        ];
    }
}

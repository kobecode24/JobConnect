<?php

namespace App\Http\Controllers\ceo;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $company = auth()->user()->company;

        $employees = $company->users;

        return view('ceo.employees.index', compact('employees'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if (!$user->roles->contains('name', 'CEO')) {
            $user->company_id = null;
            $user->save();

            return redirect()->route('ceo.employees.index')->with('success', 'User successfully removed from the company.');
        }

        return back()->with('error', 'Cannot remove a user with the CEO role from the company.');
    }

}

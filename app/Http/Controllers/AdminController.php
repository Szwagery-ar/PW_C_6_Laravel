<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $totalCustomers = User::where('role', 'customer')->count();
        return view('admin.dashboard', compact('totalCustomers'));
    }

    public function userManagement(Request $request)
    {
        $query = User::where('role', 'customer');

        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where('name', 'LIKE', "%{$searchTerm}%");
        }

        $users = $query->paginate(8);
        $totalUsers = $query->count();

        return view('admin.usermanagement', [
            'users' => $users,
            'totalUsers' => $totalUsers
        ]);
    }

    public function editUser(User $user)
    {
        return view('admin.editprofile', compact('user'));
    }


    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'password' => 'nullable|min:8',
        ]);

        $userData = $request->except('password');

        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->password);
        }

        $user->update($userData);

        return redirect()->route('admin.users')->with('success', 'User updated successfully');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully');
    }
}
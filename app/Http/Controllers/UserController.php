<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Requests\UserRequest;
class UserController extends Controller
{
    public function userIndex()
    {
        
        $users = User::
            where('id', '>', 0)
            ->paginate(5);
            

        return view('admin.user.index',compact('users'));
    }
    public function createUser()
    {
        
        return view('admin.user.create');
        
    }
    public function storeUser(Request $request)
    {
        $userData = $request->validate([
            'name' => 'required|unique:users|max:255|min:6',
            'email' => 'required|email',
            'password' => 'required',
            'status' =>'required',
        ],
        [
            'name.required' => ' Khong duoc de trong ten',
            'name.max' => 'Ten khong duoc qua 255 ki tu',
            'name.min' => 'Ten phai nhieu hon 6 ki tu',
            'email.required' => 'Phai nhap email',
            'email.email' => 'Email phải đúng định dạng',
            'password.required' => 'Yeu cau nhap mat khau',
            'status.required' => 'Yeu cau chon trang thai',

        ]
    );

        
        $user = new User();
        $user->fill($userData);
        
        

        $user->save();

        return redirect()->route('userIndex');
    }
    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.user.create',compact('user'));
    }
    public function updateUser(Request $request, $id)
    {
        $userUpdate = $request->validate([
            'name' => 'required|max:255|min:6',
            'email' => 'required|email',
            'password' => 'required',
            'status' => 'required',
        ],
        [
            'name.required' => ' Khong duoc de trong ten',
            'name.max' => 'Ten khong duoc qua 255 ki tu',
            'name.min' => 'Ten phai nhieu hon 6 ki tu',
            'email.required' => 'Phai nhap email',
            'email.email' => 'Email phải đúng định dạng',
            'password.required' => 'Yeu cau nhap mat khau',
            'status.required' => 'Yeu cau chon trang thai',
    
        ]
    );

       $userUpdate = User::find($id);
       $userUpdate->name = $request->name;
       $userUpdate->email = $request->email;
       $userUpdate->password = $request->password;
       $userUpdate->status = $request->status;
       $userUpdate->save();
       return redirect()->route('userIndex');

    }
    public function deleteUser($id){
       
        User::destroy($id);

        return redirect()->route('userIndex');

        
    }
}

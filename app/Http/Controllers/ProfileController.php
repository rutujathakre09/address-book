<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use DataTables;

class ProfileController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        if ($request->ajax()) {
            $data = DB::Table('users')->select('first_name', 'email', 'street', 'phone', 'city','profile_photo_path')->get();

            return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row) {
                                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                                return $actionBtn;
                            })                            
                            ->rawColumns(['action'])
                            ->make(true);
        }

        return view('profile.show');

        // $users = User::where('role', '!=', 'admin')->get()->toArray();
        // return view('profile.show')->with('users',$users);
    }

}

<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Models\BloodGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Builder;

class SearchBloodController extends Controller
{

    /**
     * SearchBloodController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('search_blood');
    }

    public function searchBlood(BloodGroup $bloodGroup)
    {
        if (request()->ajax()) {

            return DataTables::collection($bloodGroup->users)
                ->addIndexColumn()
                ->addColumn('blood_group', function (User $user) {
                    return BloodGroup::find($user->blood_group_id)->name;
                })->make(true);
        }

        return view('search_blood', compact('bloodGroup'));
    }

    public function loadUsers(BloodGroup $bloodGroup)
    {

    }
}

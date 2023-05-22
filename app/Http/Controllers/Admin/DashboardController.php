<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $countProjectTotal = DB::table('projects')->count('id');

        $countMaxOnCategory = DB::table('projects')->select(DB::raw('count(id) as number, category'))->groupBy('category')->get();
        $getMaxCategory = max($countMaxOnCategory->all());        


        return view('admin.dashboard', compact('countProjectTotal', 'getMaxCategory'));
    }
}

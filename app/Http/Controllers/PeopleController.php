<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PeopleController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getPeoples(Request $request)
    {
        $people = People::query();

        return datatables($people)->toJson();
    }
}

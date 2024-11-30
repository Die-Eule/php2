<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Status;

class ReportController extends Controller
{
    public function index(Request $req)
    {
        if ($req->user()->isAdmin()) {
            return redirect('/admin');
        }

        $reports = Report::where('user_id', $req->user()->id)->orderby('updated_at', 'desc')->get();
        $statuses = Status::all();
        $colors = [1 => 'text-yellow-300', 2 => 'text-green-400', 3 => 'text-red-700'];
        return view('dashboard', compact('reports', 'statuses', 'colors'));
    }

    public function add(Request $req)
    {
        $data = $req->validate(['number' => 'required|string|alpha_num', 'description' => 'required|string']);
        if (strlen(trim($data['description'])) === 0) {
            return redirect()->back();
        }
        $data['id'] = Report::withTrashed()->max('id') + 1;
        $data['status_id'] = 1;
        $data['user_id'] = $req->user()->id;
        Report::create($data);
        return redirect('/');
    }
}

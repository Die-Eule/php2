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
        $data = $req->validate([
            'number' => ['required','string','alpha_num','regex:/^[ABCEHKMOPTX][0-9]{3}[ABCEHKMOPTX]{2}[0-9]{2,3}$/i'],
            'description' => ['required','string']
        ]);
        $data['id'] = Report::withTrashed()->max('id') + 1;
        $data['status_id'] = 1;
        $data['user_id'] = $req->user()->id;
        $data['number'] = strtoupper($data['number']);
        Report::create($data);
        return redirect('/');
    }
}

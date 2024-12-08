<?php

namespace App\Http\Controllers;
use App\Models\Report;
use App\Models\Status;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $reports = Report::orderBy('status_id')->orderBy('updated_at','desc')->paginate(5);
        $statuses = Status::all();
        return view('admin.index', compact('reports', 'statuses'));
    }

    public function makeDecision(Request $req, Report $report)
    {
        $data = $req->validate(['status' => 'required|numeric']);
        if (Status::all()->contains($data['status'])) {
            $report->status_id = $data['status'];
            $report->save();
        }
        return redirect()->back();
    }

}

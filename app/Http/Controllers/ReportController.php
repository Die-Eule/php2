<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('report.index', compact('reports'));
    }

    public function destroy(Report $report)
    {
        $report -> delete();
        return redirect()->back();
    }

    public function add(Request $req)
    {
        $data = $req->validate(['number' => 'required|string', 'description' => 'required|string']);
        $data['id'] = Report::max('id') + 1;
        Report::create($data);
        return redirect()->back();
    }

    public function show(Report $report)
    {
        return view('report.show', compact('report'));
    }

    public function update(Request $req, Report $report)
    {
        $data = $req->validate(['number' => 'required|string', 'description' => 'required|string']);
        $data['id'] = Report::max('id') + 1;
        $report['number'] = $data['number'];
        $report['description'] = $data['description'];
        $report->save();
        return redirect('/reports');
    }
}

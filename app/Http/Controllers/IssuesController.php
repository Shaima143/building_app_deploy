<?php

namespace App\Http\Controllers;


use App\Issue;
use App\User;
use App\Mail\IssueRequestSubmitted;
use Illuminate\Http\Request;
use Auth;
use App\Imports\IssuesImport;
use Maatwebsite\Excel\Facades\Excel;

class IssuesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['test']);
    }

    public function store(Request $request){
        //return $request;
        // Creating a new object called Issue
        $issue = new Issue();
        $issue->name = $request->name;
        $issue->email = $request->email;
        $issue->phone = $request->phone;
        $issue->msg = $request->message;
        $issue->building_number = $request->building_number;
        $issue->appartment_number = $request->appartment_number;
        $issue->user_id = Auth::user()->id;
        $issue->attachment = null;
        $issue->save();

        \Mail::to($issue->email)->send(new IssueRequestSubmitted($issue));
        return "Record is created successfully";
    }

    public function test(){
        return 'This is a test function..';
    }

    public function list(){
        //$data['issues'] = Issue::all();
        $data['users'] = User::all();
        return view('issues.list', $data);
    }

    public function importFromExcel(Request $request){

        //validate file
        Excel::import(new IssuesImport, $request -> excelFile);

        return "Data imported sucessfully";

    }
}

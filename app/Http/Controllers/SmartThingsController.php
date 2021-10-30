<?php

namespace App\Http\Controllers;

use App\Models\Smart;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Models;


class SmartThingsController extends Controller
{
    public function addSmartView()
    {
        return view('add_smart');
    }

    public function addSmartSubmit(Request $request)
    {
        $smart = new Smart();
        $smart->type = $request->type;
        $smart->brand = $request->brand;
        $smart->model = $request->model;
        $smart->color = $request->color;
        $smart->avaibility = $request->avaibility;
        $smart->save();

        return redirect()->route('submitted.smart.view');

    }

    public function viewSmartList()
    {
        // $smarts = Smart::select('id','type', 'brand', 'model', 'color','avaibility')->get();
        // return view('view_smart', ['smarts' => $smarts]);
        $smarts = Smart::select(['id','type', 'brand', 'model', 'color','avaibility'])->get();
       
        return Datatables::of($smarts) 
                     ->addColumn('action', function(){
                    return '<button class="btn btn-danger">See</button>';
                    })
                     ->rawColumns(['action'])
                     ->make(true);
    
   }


    public function submittedSmartView()
    {
        return view('after_submit');
    }
}

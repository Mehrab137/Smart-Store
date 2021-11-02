<?php

namespace App\Http\Controllers;

use App\Models\Smart;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use App\Events\DeviceInformationIsAddedEvent;


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

        event(new DeviceInformationIsAddedEvent("noob@noob25.com"));

        return redirect()->route('submitted.smart.view');

    }

    public function viewSmartList(Request $request)
    {
        // $smarts = Smart::select('id','type', 'brand', 'model', 'color','avaibility')->get();
        // return view('view_smart', ['smarts' => $smarts]);
      
        if ($request->ajax()){
      
        $smarts = Smart::select(['id','type', 'brand', 'model', 'color','avaibility'])->get();
       
        return Datatables::of($smarts) 
                     ->addColumn('action', function(){
                    return '<button class="btn btn-danger">See</button>';
                    })
                     ->rawColumns(['action'])
                     ->make(true);
    
             }        

                return view('view_smart');        
   }


    public function submittedSmartView()
    {
        return view('after_submit');
    }

    public function newMail()
    {
        // Mail::to('noob@noob.com')->send(new Email());
    }


}
  
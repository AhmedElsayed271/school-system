<?php

namespace App\Http\Controllers;

use App\SmResultStore;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class showResultController extends Controller
{
    
    public function findResult()
    {
        
        return view("backEnd.Result.findStudent");
    }
    public function showResult(Request $request)
    {

      
    $result = SmResultStore::with(['studentInfo','subject'])->whereHas('studentInfo', function($q) use ($request){
        $q->where('email', '=', $request->email);
    })->get();


    if ($result->count() == 0) {
        return redirect()->route('find.result')->with(['errorMessage' => "This Student dons'nt Exist"]);
    }
    
    $email = $request->email;

        return view("backEnd.Result.showResult", compact('result', 'email'));
    }
    
    public function exportToPdf(Request $request)
    {

        $result = SmResultStore::with(['studentInfo','subject'])->whereHas('studentInfo', function($q) use ($request){
            $q->where('email', '=', $request->email);
        })->get();
       

        return view("backEnd.Result.pdf-templade",  compact('result'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_info;

class insertController extends Controller
{
    //
    function insert(Request $req){
        $name= $req->get('sname');
        $id= $req->get('sid');
        $batch= $req->get('sbatch');
        $reg= $req->get('sreg');
        $email= $req->get('semail');

        $data = new student_info();
        $data->sname = $name;
        $data->sid = $id;
        $data->semail = $email;
        $data->sreg = $reg;
        $data->sbatch = $batch;
        $data->save();
        return redirect('/');
    }
    function readdata(){
        $sdata = student_info::all();
        return view('show',['sinfo' => $sdata]);
    }

}

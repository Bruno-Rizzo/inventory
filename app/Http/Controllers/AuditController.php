<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuditController extends Controller
{
    public function index()
    {
        return view('admin.audits.index');
    }

    public function find(Request $request)
    {
        $audits = DB::table('audits')
                    ->whereDate('created_at','>=',$request->date_initial)
                    ->whereDate('created_at','<=',$request->date_final)
                    ->get();
                    return view('admin.audits.index',compact('audits'));
    }

    public function show($id)
    {
        $audit = DB::table('audits')
                 ->where('id',$id)
                 ->get();

        if($audit->isNotEmpty()){
            $user = User::where('id',$audit[0]->user_id)->get();
            return view('admin.audits.show',compact('audit','user'));
        }

    }

}

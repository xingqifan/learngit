<?php
namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $list = DB::table('channel_activity')
            ->orderBy('id','desc')
            ->paginate(3);
 

        //return view('test.index',['list'=>$list]);
    }
    public function getpost(Request $request)
    {

        var_dump($request->input());


    }
}
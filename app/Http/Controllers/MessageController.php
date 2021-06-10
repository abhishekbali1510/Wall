<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Message;
use App\Models\User;

class MessageController extends Controller
{
    public function index(Request $rst)
    {
        //$rst->input('msg');
        $newMsg= new Message;
        $newMsg->senderId=$rst->session()->get('user');
        $newMsg->receiverId=$rst->session()->get('receiver');
        $newMsg->content=$rst->input('msg');
        $newMsg->save();
        return back();
        
    }

    public function show(Request $r)
    {
        if($r->session()->get('login')=='true')
        {
            $allMessages = DB::select('select * from "messages" where "senderId" = ? and "receiverId" = ? or "senderId" = ? and "receiverId" = ?   ',[$r->session()->get('user'),$r->session()->get('receiver'),$r->session()->get('receiver'),$r->session()->get('user')]);// fucking thing
            // return $r->session()->get('user');
            return json_encode($allMessages);
            //return view('message.displaychat',['datas'=>$allMessages]);
        }
        else
        {
            return redirect('../');
        }
    }

    public function newIndex($receiver=null,Request $r)
    {
        if($r->session()->get('login')=='true')
        {

            $r->session()->put('receiver',$receiver);
            $users=User::all();
            return view('message.index2',['users'=>$users]);
            // return view('message.index2');

        }
        else
        {
            return redirect('../');
        }

    }

    public function test(Request $r)
    {
        $data[]=["sender"=>$r->session()->get('user'),"receiver"=>$r->session()->get('receiver')];
        return json_encode($data);
    }
}

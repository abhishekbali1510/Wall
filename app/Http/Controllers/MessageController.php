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
        return redirect('/message');
        
        
    }

    public function show()
    {
        $allMessages = DB::select('select * from messages');
        return json_encode($allMessages);
       //return view('message.displaychat',['datas'=>$allMessages]);
    }

    public function newIndex($receiver=null,Request $r)
    {
        $r->session()->put('receiver',$receiver);
        $users=User::all();
        return view('message.index2',['users'=>$users]);
    }

    public function test(Request $r)
    {
        $data[]=["sender"=>$r->session()->get('user'),"receiver"=>$r->session()->get('receiver')];
        return json_encode($data);
    }
}

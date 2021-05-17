<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Message;

class MessageController extends Controller
{
    public function index(Request $rst)
    {
        //$rst->input('msg');
        $newMsg= new Message;
        $newMsg->senderId=02;
        $newMsg->receiverId=31;
        $newMsg->content=$rst->input('msg');
        $newMsg->save();
        return redirect('/msg');
        
        
    }

    public function show()
    {
        $allMessages = DB::select('select * from messages');
        return json_encode($allMessages);
       //return view('message.displaychat',['datas'=>$allMessages]);
    }
}

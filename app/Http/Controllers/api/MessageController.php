<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Message;
use Helper;
use App\Mail\MessageSent;
use Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Message::advancedFilter();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $validator = Validator::make(request()->all(), [
            'name' => 'bail|required|string|max:50|min:3',
            'email' => 'bail|email|max:50',
            'phone' => 'bail|max:25',
            'message' => 'bail|required|string|max:1000|min:3',
        ])->validate();

        $new_message = new Message();
        $new_message->fill($request->all())->save();


        // Send email
        $to = explode(',', preg_replace('/\s+/', '', env('ADMIN_EMAILS')));
        Mail::to($to)->send(new MessageSent($new_message));

        return $new_message->name;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {

        $message->delete();

        return $message;
        // return "deleted";
    }

    public function exportExcel()
    {
        return Message::exportExcel();
    }
}

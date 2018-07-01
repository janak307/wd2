<?php

namespace App\Http\Controllers;
use App\ContactQuery;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactQueryMail;

class ContactQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mail::raw('Raw string email', function($msg) { $msg->to(['janakmistry.nmims@gmail.com']); $msg->from(['janak307@gmail.com']); });
        // dd($request);
        $contactQuery = new ContactQuery();

        $contactQuery->name = $request->txtName;   
        $contactQuery->email = $request->txtEmail;   
        $contactQuery->question = $request->txtaQuestion; 
        // dd($contactQuery);
        $contactQuery->save();

        // dd($contactQuersy->id);
        
        Mail::to(env('MAIL_TOID'))->send(new ContactQueryMail($contactQuery->name,$contactQuery->email,$contactQuery->question));

        return "Enquiry Logged Succesfully. We will contact you soon"; 
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
    public function destroy($id)
    {
        //
    }
}

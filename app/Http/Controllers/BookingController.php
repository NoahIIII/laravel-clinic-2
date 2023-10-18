<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    function edit(Request $request,$id)
    {
        $data=$request->except('_token','_method');
        Booking::where('id',$id)->update($data);
        return redirect(route('booking'))->with('suc','Status Updated');
    }
    function create(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:20|string',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'date' => 'required|date',
        ]);
        $data=$request->except('_token');
        $data['status']='pending';
        Booking::create($data);
        return redirect(route('home'))->with('suc','Booking Confirmed');
    }
}

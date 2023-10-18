<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\major;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('dashboard.index');
    }
    function viewusers()
    {
        $users=User::paginate(10);
        return view('dashboard.users',['users'=>$users]);
    }
    function viewdoctors(){
        $doctors = Doctor::paginate();
        return view('dashboard.doctors',['doctors'=>$doctors]);
    }
    function viewmajors(){
        $majors = major::paginate();
        return view('dashboard.majors',['majors'=>$majors]);
    }
    function viewbooks(){
        $books = Booking::paginate();
        return view('dashboard.booking',['books'=>$books]);
    }
    function viewcontacts(){
        $contacts = Contact::paginate();
        return view('dashboard.contacts',['contacts'=>$contacts]);
    }
    function NewUser ()
    {
        return view('dashboard.actions.createuser');
    }
    function createdoctor()
    {
        return view('dashboard.actions.createdoctor');
    }
    function removedoctor()
    {
        return view('dashboard.actions.deletedoctor');
    }
    function updatedoctor()
    {
        return view('dashboard.actions.updatedoctor');
    }
    function createmajor()
    {
        return view('dashboard.actions.createmajor');
    }
    function removemajor()
    {
        return view('dashboard.actions.deletemajor');
    }
    function updatemajor()
    {
        return view('dashboard.actions.updatemajor');
    }
    function updatebooking($id){
        return view('dashboard.actions.updatebooking',['id'=>$id]);
    }
    function updateuser(){
        return view('dashboard.actions.updateuser');
    }
}

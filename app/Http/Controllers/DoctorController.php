<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class DoctorController extends Controller
{
    function index()
    {
        $doctors = Doctor::paginate(12);
        return view('front.doctors.index', ['doctors' => $doctors]);
    }
    function show($id)
    {
        $doctor = Doctor::find($id);
        // dd($doctor);
        return view('front.doctors.doctor', ['doctor' => $doctor]);
    }
    function ShowByMajor($id)
    {
        $doctors = Doctor::where('major_id', '=', $id)->paginate(5);
        return view('front.doctors.index', ['doctors' => $doctors]);
    }
    function create(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:20|string',
            'email' => 'required|email|unique:doctors,email',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'major_id' => 'exists:doctors,major_id|required',
            'bio' => 'required|min:5|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $image=$request->file('image')->store('uploads','public');
        $hashedPassword = \Illuminate\Support\Facades\Hash::make($request->password);
        $doctor = new Doctor([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
            'major_id' => $request->major_id,
            'bio' => $request->bio,
            'image'=>$image
        ]);
        $doctor->save();
        return redirect(route('createdoctor'))->with('suc', 'New Doctor Added');
    }

    function destroy(Request $request)
    {
        $request->validate(['id' => 'required|exists:doctors,id'], ['id.exists' => 'There is no doctor with that id']);
        $id = request('id');
        Doctor::find($id)->delete();
        return redirect(route('removedoctor'))->with('suc', 'doctor Deleted');
    }
    function edit(Request $request)
    {

        $request->validate([
            'id' => 'required|exists:doctors,id',
            'name' => 'required|min:2|max:20|string',
            'email' => [
                'required',
                'email',
                Rule::unique('doctors', 'email')->ignore($request->id, 'id'), ],
            'major_id' => 'exists:doctors,major_id|required',
            'bio' => 'required|min:5|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ], ['id.exists' => 'There is no doctor with that id']);
        $image=$request->file('image')->store('uploads','public');
        $hashedPassword = \Illuminate\Support\Facades\Hash::make($request->password);
        $data = $request->except(['_token', '_method']);
        $data['id'] = $request->id;
        $data['password']=$hashedPassword;
        $data['image']=$image;
        Doctor::where('id', $request->id)->update($data);
        return redirect(route('updatedoctor'))->with(['suc' => 'Doctor Data Updated']);
    }
}

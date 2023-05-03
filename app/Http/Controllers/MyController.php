<?php

namespace App\Http\Controllers;
use App\Models\FeedbackModel;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        return view("index");
    }
    public function contact() {
        return view("contact");
    }
    public function about() {
        return view("about");
    }
    public function getData(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' =>'required|email',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'message' =>'required'
        ]);
        $feedback = new FeedbackModel();
        $feedback->name = $request['name'];
        $feedback->email = $request['email'];
        $feedback->address = $request['address'];
        $feedback->city = $request['city'];
        $feedback->state = $request['state'];
        $feedback->message = $request['message'];
        $feedback->save();
        return redirect('/showContact')->with('Success', 'Message sent successfully');
    }
    public function showContact() {
        $feedback = FeedbackModel::all();
        $data = compact('feedback');
        return view('showContact-view')->with($data);
    }
    public function edit($id) {
        $feedback = FeedbackModel::find($id);
        if(is_null($feedback)){
            return redirect('showContact');
        }
        else {
            $url = url('/showContact/update') . '/' . $id;
            $data = compact('feedback', 'url');
            return view('update')->with($data);
        }
    }
    public function update($id, Request $request) {
        $feedback = FeedbackModel::find($id);
        $feedback->name = $request['name'];
        $feedback->email = $request['email'];
        $feedback->address = $request['address'];
        $feedback->city = $request['city'];
        $feedback->state = $request['state'];
        $feedback->message = $request['message'];
        $feedback->save();
        return redirect('showContact');
    }
    public function delete($id) {
        $feedback = FeedbackModel::find($id);
        if(!is_null($feedback)){
            $feedback->delete();
        }
        else {
            echo 'No Feedback Found';
        }
        return redirect('showContact');
    }
}

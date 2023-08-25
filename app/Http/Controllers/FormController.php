<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function storeForm(Request $request)
    {

        $request->validate([
            //validation goes here

        ]);

        $data = $request->all();

        $request_types = array($request->request_type);

        if ($request->hasFile('image')) {
            $size = $request->file('image')->getSize();
            $name = $request->file('image')->getClientOriginalName();
            $data['image'] = $request->file('image')->storeAs('images/profiles', $name);
        }

        $data['request_type'] = json_encode($request_types);




        // ModelsRequest::create([
        //     'division' => $request->division,
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone_number' => $request->phone_number,
        //     'date' => $request->date,
        //     'urgency' => $request->urgency,
        //     'description' => $request->description,
        //     'request_type' => json_encode($request_types),
        //     'image' => $request->image,

        // ]);

        ModelsRequest::create($data);

        return redirect()->back()->with('stat', 'form submitted successfully!');
    }
}

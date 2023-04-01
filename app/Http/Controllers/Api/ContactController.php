<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
       $request->validate([
           'honorable_name' => 'required',
           'phone_number' => 'required|digits:10,10',
           'brand_name' => 'required'
       ]);

      Contact::create([
           'honorable_name' => $request->honorable_name,
           'phone_number' => $request->phone_number,
           'brand_name'=> $request->brand_name
      ]);
    }
}

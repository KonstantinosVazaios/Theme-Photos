<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Events\Dispatchable;
use App\Events\MailNotification;

class ContactController extends Controller
{
  public function mail(Request $request)
  {
    //Validating Inputs from Request
    $validated = Validator::make($request->all(), [
      'name' => 'required|min:3|max:50',
      'telephone' => 'required|numeric|digits_between:10,10',
      'email' => 'required|email',
      'message' => 'required|min:20|max:400',
    ]);

    //If Request Inputs have Errors return back to Form
    if ($validated->fails()) {
      return redirect(url()->previous().'#contact')
              ->withErrors($validated);
    }

    //Prepare variables for the Event
    $name = $request->input('name');
    $telephone = $request->input('telephone');
    $email = $request->input('email');
    $message = $request->input('message');

    //Dispatch New Mail Event
    event(new MailNotification($name, $telephone, $email, $message));

    //Retun Back
    return redirect(url()->previous().'#contact')->with(['status' => 'Το μήνυμα έχει σταλθεί!']);
  }
}

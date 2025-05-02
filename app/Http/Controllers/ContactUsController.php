<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUsSubmission;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function index()
    {
        // Fetch all the Contact Us entries from the database
        $contacts = ContactUsSubmission::all();
        return response()->json($contacts);
    }
    public function store(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Return validation errors if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Create and save the contact submission
        ContactUsSubmission::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return response()->json(['message' => 'Your message has been sent successfully!'], 201);
    }
}

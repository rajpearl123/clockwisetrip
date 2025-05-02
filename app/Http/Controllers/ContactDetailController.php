<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactDetail;

class ContactDetailController extends Controller
{
    public function index()
{
    $contactDetail = ContactDetail::latest()->first(); // Get the latest entry

    return response()->json($contactDetail);
}

public function update(Request $request)
{
    $request->validate([
        'Address' => 'required|string',
        'Toll' => 'required|string',
        'live' => 'required|email',
    ]);

    // Assuming you want to update the most recent entry
    $contactDetail = ContactDetail::latest()->first();

    if ($contactDetail) {
        $contactDetail->address = $request->input('Address');
        $contactDetail->toll_free_customer_care = $request->input('Toll');
        $contactDetail->live_support_email = $request->input('live');
        $contactDetail->save();

        return response()->json(['message' => 'Contact details updated successfully!'], 200);
    }

    return response()->json(['message' => 'No contact details found to update.'], 404);
}

}

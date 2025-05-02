<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Mail\SubscriptionConfirmationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class NewsletterSubscriptionController extends Controller
{
    public function index(Request $request)
    {
        // Fetch all subscriptions
        $subscriptions = Newsletter::orderBy('created_at', 'desc')->paginate(10);
        //dd($subscriptions);
        if ($request->wantsJson()) {
            return response()->json($subscriptions);
        }
        // Return JSON response
        // return response()->json($subscriptions);
        return view('backend.subscribe.index', compact('subscriptions'));
    }

    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email|unique:newsletter_subscriptions,email',
    //     ]);

    //     // Check if validation fails
    //     if ($validator->fails()) {
    //         return response()->json(['errors' => $validator->errors()], 400);
    //     }

    //     // Store the email in the database
    //     $subscription = new NewsletterSubscription();
    //     $subscription->email = $request->email;
    //     $subscription->save();

    //     // return response()->json(['message' => 'Subscription successful!'], 201);
    //     return redirect()->back()->with('message', 'Subscription successful!');

    // }

//     public function store(Request $request)
// {
//     // Validate the request
//     $validator = Validator::make($request->all(), [
//         'email' => 'required|email|unique:newsletter_subscriptions,email',
//     ]);

//     // Check if validation fails
//     if ($validator->fails()) {
//         return response()->json(['errors' => $validator->errors()], 400);
//         // return redirect()->back()->withErrors($validator)->withInput();

//     }

//     // Store the email in the database
//     $subscription = new NewsletterSubscription();
//     $subscription->email = $request->email;
//     $subscription->save();

//     // Send emails to both the subscriber and the admin
//     $adminEmail = config('mail.admin_email'); // Make sure to define this in your config/mail.php or .env file

//     // Send email to the subscriber
//     Mail::to($request->email)->send(new SubscriptionConfirmationMail($subscription));

//     // Send email to the admin
//     Mail::to($adminEmail)->send(new SubscriptionConfirmationMail($subscription));

//     // Return a response
//     return redirect()->back()->with('message', 'Subscription successful!');
// }


public function destroy($id)
{
    // Find the subscription by ID
    $subscription = Newsletter::find($id);

    // Check if the subscription exists
    if (!$subscription) {
        return redirect()->back()->with('error', 'Subscription not found.');
    }

    // Delete the subscription
    $subscription->delete();

    // Return a response
    return redirect()->back()->with('message', 'Subscription deleted successfully!');
}

}

<?php
namespace App\Http\Controllers\front;

use App\Models\Property;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
  
    public function store_comment(Request $request)
    {
        if (Auth::check()) {
            // Validate the request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'comment' => 'required|string|max:1000',
                'property_id' => 'required|exists:propertys,id',
            ]);
    
            try {
                // Create the comment
                $user = Auth::user();
                $comment = Comment::create([
                    'user_id' => $user->id,
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'comment' => $validated['comment'],
                    'property_id' => $validated['property_id'],
                ]);
    
                // Return success response
                return response()->json([
                    'message' => 'Your comment has been posted successfully!',
                    'comment' => $comment->load('user'),
                ], 200);
            } catch (\Exception $e) {
                // Catch any exceptions and return a proper error response
                return response()->json([
                    'message' => 'An error occurred while posting your comment. Please try again later.',
                    'error' => $e->getMessage(),
                ], 500);
            }
        } else {
            // Handle unauthenticated users
            if ($request->ajax()) {
                return response()->json([
                    'message' => 'Please log in to post a comment.',
                ], 401);
            }
            return redirect()->route('login');
        }
    }
    

    

    
    public function index()
    {
      $comments=Comment::get();
      return view('backend.comment.index',compact('comments'));
    }


  public function updateStatus(Request $request, $id)
    {
       
        $comment = Comment::findOrFail($id);

        $status = $request->input('status');
        if (!in_array($status, [0, 1])) {
            return response()->json(['message' => 'Invalid status value'], 400);
        }

        $comment->is_status = $status;
        $comment->save();

        return response()->json(['message' => 'Comment status updated successfully!']);
    }


}

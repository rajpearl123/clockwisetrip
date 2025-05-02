<?php
namespace App\Http\Controllers\front;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{
    // Like or unlike a property
    public function like($property_id)
    {
        // Get the authenticated user
        $user = Auth::user(); 

        // Check if the user has already liked the property
        $existingLike = DB::table('likes')
                         ->where('user_id', $user->id)
                         ->where('property_id', $property_id)
                         ->first();

        // If the user has not liked the property yet, insert a new like record
        if (!$existingLike) {
            DB::table('likes')->insert([
                'user_id' => $user->id,
                'property_id' => $property_id,
                'is_status' => 1,  // 1 means liked
            ]);

            return response()->json(['success' => true, 'status' => 'liked', 'message' => 'You have liked this property.']);
        }

        // If the user has already liked the property, toggle the like status
        if ($existingLike->is_status == 1) {
            // If already liked, set the status to 0 (unlike)
            DB::table('likes')
                ->where('user_id', $user->id)
                ->where('property_id', $property_id)
                ->update(['is_status' => 0]);

            return response()->json(['success' => true, 'status' => 'unliked', 'message' => 'You have unliked this property.']);
        } else {
            // If already unliked, set the status to 1 (like)
            DB::table('likes')
                ->where('user_id', $user->id)
                ->where('property_id', $property_id)
                ->update(['is_status' => 1]);

            return response()->json(['success' => true, 'status' => 'liked', 'message' => 'You have liked this property.']);
        }
    }
}

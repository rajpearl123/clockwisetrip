<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\TaxRate;
use App\Models\RoomType;
use App\Models\Property;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use DB;


class RoomTypeController extends Controller
{
  public function index(Request $request)
  {
      try {
          // Start the query
          $query = RoomType::query()
              
              ->where('is_deleted', '0'); 
  
          if ($request->has('search') && $request->search != '') {
              $searchTerm = $request->search;
              $query->where(function($q) use ($searchTerm) {
                  $q->where('room_type', 'like', '%' . $searchTerm . '%');
              });
          }
  
          $room_types = $query->get();

          return view('backend.room_type.index', compact('room_types'));
          
      } catch (\Exception $e) {
          return back()->with('error', 'Warning: ' . $e->getMessage());
      }
  }
  
    public function category_wise_property($categoryId)
    {
        $properties = Property::where('property_category_id', $categoryId)->get();
      
        return response()->json($properties);
    }

    public function store_room(Request $request)
    {
      $request->validate([
        'room_type' => 'required',
    ]);

    // Create a new user
    $room = new RoomType();
    $room->room_type = $request->input('room_type');
    $room->save();
    return redirect()->route('admin.room-type')->with('success', 'Room Added successfully!');
    }



    public function room_change_Status(Request $request, $id)
    {
        $user = RoomType::findOrFail($id);
        $request->validate([
            'status' => 'required|in:0,1',
        ]);
        $user->is_deleted = $request->status;
        $user->save();

        return response()->json(['success' => true]);
    }


    public function roomDelete($id){
        // dd($id);
        $room = RoomType::findOrFail($id);
        $room->delete();
        echo "Delete Successfully";
        return back()->with('error','Room Deleted Successfully!');   
 
    }


    public function roomUpdate(Request $request)
    {
        $id=$request->id;
        $request->validate([
            'room_type' => 'required',
        ]);

        $room = RoomType::findOrFail($id);
        $room->room_type = $request->input('room_type');
        $room->save();

        return redirect()->back()->with('success', ' Room Type updated successfully.');
    }

    

    


}

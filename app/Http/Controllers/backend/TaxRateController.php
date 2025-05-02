<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\TaxRate;
use App\Models\Property;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use DB;


class TaxRateController extends Controller
{
  public function view_tax_rate(Request $request)
  {
      try {
          // Start the query
          $query = TaxRate::query()
              ->join('property_categorys', 'tax_and_rate.category_id', '=', 'property_categorys.id')
              ->join('propertys', 'tax_and_rate.property_id', '=', 'propertys.id')
              ->join('room_type', 'tax_and_rate.room_type', '=', 'room_type.id')
              ->select(
                  'tax_and_rate.*',
                  'property_categorys.name as category_name',
                  'propertys.title as property_title','room_type.room_type'
              )
              ->where('tax_and_rate.is_deleted', '0'); 
  
          if ($request->has('search') && $request->search != '') {
              $searchTerm = $request->search;
              $query->where(function($q) use ($searchTerm) {
                  $q->where('property_categorys.name', 'like', '%' . $searchTerm . '%') 
                      ->orWhere('propertys.title', 'like', '%' . $searchTerm . '%');
              });
          }
  
          $taxs = $query->get();
  

          $categories = DB::table('property_categorys')->get();

          $room_types = DB::table('room_type')->where('is_deleted',0)->get();

          return view('backend.tax_rate.index', compact('taxs', 'categories','room_types'));
          
      } catch (\Exception $e) {
          return back()->with('error', 'Warning: ' . $e->getMessage());
      }
  }
  
    public function category_wise_property($categoryId)
    {
        $properties = Property::where('property_category_id', $categoryId)->get();
      
        return response()->json($properties);
    }

    public function store_tax_price(Request $request)
    {
      $request->validate([
        'porperty_category_id' => 'required',
        'property_id' => 'required',
        'room_type' => 'required',
        'price' => 'required',
    ]);

    // Create a new user
    $tax = new TaxRate();
    $tax->category_id = $request->input('porperty_category_id');
    $tax->property_id = $request->input('property_id');
    $tax->room_type = $request->input('room_type');
    $tax->rate_pr_night =$request->input('price');
    $tax->save();
    return redirect()->route('admin.tax-rate')->with('success', 'Tax and Price successfully!');
    }



    public function tax_change_Status(Request $request, $id)
    {
        $user = TaxRate::findOrFail($id);
        $request->validate([
            'status' => 'required|in:0,1',
        ]);
        $user->is_deleted = $request->status;
        $user->save();

        return response()->json(['success' => true]);
    }


    public function taxDelete($id){
        // dd($id);
        $user = TaxRate::findOrFail($id);
        $user->delete();
        echo "Delete Successfully";
        return back()->with('error','Tax Delete Successfully!');   
 
    }


    public function taxUpdate(Request $request)
    {
        $id=$request->id;
        $request->validate([
            'porperty_category_id' => 'required',
            'property_id' => 'required',
            'room_type' => 'required',
            'price' => 'required',
        ]);

        $tax = TaxRate::findOrFail($id);
        $tax->category_id = $request->input('porperty_category_id');
        $tax->property_id = $request->input('property_id');
        $tax->room_type = $request->input('room_type');
        $tax->rate_pr_night =$request->input('price');

        $tax->save();
        return redirect()->back()->with('success', 'Tax and Price updated successfully.');
    }

    

    


}

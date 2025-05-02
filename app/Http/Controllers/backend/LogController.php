<?php


namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\LogDetails;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class LogController extends Controller
{
  public function logDetail(){
    $logDetails = LogDetails::where('user_type', 'admin')->paginate(10);
    // dd($logDetails->links('pagination::bootstrap-5'));
    return view('backend.log.index',compact('logDetails'));
  }

  public function logDetail2(){
    $logDetails = LogDetails::where('user_type','vendor')->paginate(10);
    // dd($logDetails);
    return view('backend.log.index2',compact('logDetails'));
  }


}
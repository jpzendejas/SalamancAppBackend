<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GovernmentMember;

class GovernmentMemberController extends Controller
{
  public function GetGovernmentMembers(){
    $GovernmentMembers = GovernmentMember::orderby('id')->get();
    return $GovernmentMembers;
  }
}

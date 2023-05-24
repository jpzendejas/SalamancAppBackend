<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DirectoryMember;

class DirectoryController extends Controller
{
  public function GetDirectoryMembers(){
    $DirectoryMembers = DirectoryMember::orderby('id')->get();
    return $DirectoryMembers;
  }
}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ReportType;

class ReportTypeController extends Controller
{
  public function GetReportTypes(){
    $ReportTypes = ReportType::orderBy('id')->get();
    return $ReportTypes;
  }
}

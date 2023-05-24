<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CitizenReportType;

class CitizenReportTypeController extends Controller
{
    public function GetCitizenReportTypes(){
      $CitizenReportTypes = CitizenReportType::orderby('id')->get();
      return $CitizenReportTypes;
    }
}

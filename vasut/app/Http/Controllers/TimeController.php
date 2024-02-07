<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function index()
    {
        return view('time.index');
    }

    public function calculateTime(Request $request)
    {
        $city = $request->input('city');
        $distance = $request->input('distance');
        $avgSpeed = $request->input('avgspeed');
    
       
        $time = $this->calculateTimeFromDistanceAndSpeed($distance, $avgSpeed);
    
        return view('time.time', compact('city', 'distance', 'avgSpeed', 'time'));
    
    }

    private function calculateTimeFromDistanceAndSpeed($distance, $avgSpeed)
    {
        
        if ($avgSpeed != 0) {
            $time = $distance / $avgSpeed;
            return $time;
        } else {

            return null; 
        }
    }

    
}

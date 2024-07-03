<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $year = 2024;
        $month = 7;
        
        // Example of fully booked days in July 2024
        $events = [
            8 => ['event' => 'Meeting', 'time' => '10:00 AM'],
            9 => ['event' => 'Conference', 'time' => '2:00 PM'],
            // Add more events as needed
        ];

        return view('calendar', compact('year', 'month', 'events'));
    }

    public function update(Request $request)
    {
        $year = 2024;
        $month = 7;
        
        // Get the events from the request
        $events = $request->input('events', []);
        
        // Save the events (e.g., to a database or session)
        // For simplicity, we'll just pass them back to the view
        return view('calendar', compact('year', 'month', 'events'));
    }
}

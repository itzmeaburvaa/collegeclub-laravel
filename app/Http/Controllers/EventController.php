<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Club; // Assuming Club model exists
use Carbon\Carbon;

class EventController extends Controller
{
    public function index(Request $request)
{
    $clubId = $request->input('club_id');

    $query = Event::with('club');

    if ($clubId) {
        $query->where('club_id', $clubId);
    }

    $events = $query->orderBy('date')->get();

    $today = now()->toDateString();

    $upcoming = $events->where('date', '>=', $today);
    $completed = $events->where('date', '<', $today);

    $clubs = Club::all();

    return view('events', compact('upcoming', 'completed', 'clubs', 'clubId'));
}

}

<?php

namespace App\Http\Controllers;

use App\Models\Rest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestController extends Controller
{
    public function rest()
    {
        return redirect('/');
    }

    public function add()
        {
            $id = Auth::id();
            $dt = new Carbon();
            $date = $dt->toDateString();
            $time = $dt->toTimeString();

        Rest::create([
            'user_id' => $id,
            'date' => $date,
            'start_time' => $time
        ]);

        return redirect('/');
        }

    public function save(Request $request)
        {
            $id = Auth::id();
            $dt = new Carbon();
            $date = $dt->toDateString();
            $time = $dt->toTimeString();

        Rest::create([
            'user_id' => $id,
            'date' => $date,
            'end_time' => $time
        ]);
        
        return redirect('/');
        }
}
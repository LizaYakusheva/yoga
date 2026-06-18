<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        Review::create([
            'user_id' => Auth::id(),
            'review' => $request->review,
            'rating' => $request->rating,
        ]);

        return back();
    }
}

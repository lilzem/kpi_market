<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index() {
        return view('feedback');
    }

    public function store(StoreFeedbackRequest $request) {
       $validated = $request->validated();
       
       session()->flash('date', now());

       return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;
use App\Http\Requests\ReviewRequest;
use App\Mail\ReviewAcceptMail;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{
    public function review() {
        $reviews = Review::where('status', 'approved')->orderBy('review_date', 'desc')->simplePaginate(10);
        return view('review', compact('reviews'));
    }
    public function review_check(ReviewRequest $r) {
        $review = new Review;
        $review->name = $r->name;
        $review->email = $r->email;
        $review->review = $r->review;
        $review->status = 'new';
        $review->review_date = now();
        $review->save();

        Mail::to($review->email)->send(new ReviewAcceptMail());
        session()->flash('success', 'Ваш отзыв успешно отправлен и появится здесь после того, как пройдет модерацию.');
        return redirect()->route('review');
    }
}

<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function storeReview(Request $request, $productId)
    {
        $userId = auth()->user()->id;

        $validator = Validator::make($request->all(), [
            'rating' => 'required|integer|between:1,5',
            'review' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors()->first());
        }

        try {
            $existingReview = Review::where('user_id', $userId)
                ->where('product_id', $productId)
                ->first();

            if ($existingReview) {
                return back()->with('warning', 'You have already submitted a review for this product.');
            }

            $review = new Review;
            $review->user_id = $userId;
            $review->product_id = $productId;
            $review->rating = $request->rating;
            $review->review = $request->review;

            $review->save();

            return back()->with('success', 'Review submitted successfully.');

        } catch (\Exception $e) {
            \Log::error('Review Submission Error: ' . $e->getMessage());

            return back()->with('error', 'There was an error submitting your review. Please try again later.');
        }
    }
}

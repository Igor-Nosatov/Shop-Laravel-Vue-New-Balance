<?php

namespace App\Repositories\Shop\Review;
use Illuminate\Http\Request;

interface ReviewRepositoryInterface
{
    public function addReviewComment();
    public function updateReviewComment();
    public function deleteReviewComment();
}

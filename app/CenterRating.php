<?php

namespace BookStack;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CenterRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'treatement',
        'attention',
        'response_time',
        'easy_understand',
        'need_accommodation',
        'satisfied',
        'improvement',
    ];
    // create a rating
    public static function createRating($request)
    {
        $rating = new CenterRating();
        $rating->user_id = Auth::user()->id;
        $rating->treatement = $request->treatement;
        $rating->attention = $request->attention;
        $rating->response_time = $request->response_time;
        $rating->easy_understand = $request->easy_understand;
        $rating->need_accommodation = $request->need_accommodation;
        $rating->satisfied = $request->satisfied;
        $rating->improvement = $request->improvement;
        $rating->save();
    }
    // get all ratings
    public static function getAllRatings()
    {
        return CenterRating::orderBy('created_at', 'desc')->get();
    }
    // get a rating
    public function getRating($id)
    {
        return CenterRating::find($id);
    }
    // update a rating
    public function updateRating($request, $id)
    {
        $rating = CenterRating::find($id);
        $rating->treatement = $request->treatement;
        $rating->attention = $request->attention;
        $rating->response_time = $request->response_time;
        $rating->easy_understand = $request->easy_understand;
        $rating->need_accommodation = $request->need_accommodation;
        $rating->satisfied = $request->satisfied;
        $rating->improvement = $request->improvement;
        $rating->save();
    }
    // delete a rating
    public function deleteRating($id)
    {
        CenterRating::destroy($id);
    }
    // get rating by user id
    public function getRatingByUserId($id)
    {
        return CenterRating::where('user_id', $id)->get();
    }
}

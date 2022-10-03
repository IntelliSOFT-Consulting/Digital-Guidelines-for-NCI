<?php

namespace BookStack;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class WebsiteRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'experience',
        'purpose',
        'helpful',
        'how_helpful',
        'purpose_achieved',
        'biggest_challenge',
        'improve_experience',
    ];
    // create a rating
    public static function createRating($request)
    {
        $rating = new WebsiteRating();
        $rating->user_id = Auth::user()->id;
        $rating->experience = $request->experience;
        $rating->purpose = $request->purpose;
        $rating->helpful = $request->helpful;
        $rating->how_helpful = $request->how_helpful;
        $rating->purpose_achieved = $request->purpose_achieved;
        $rating->biggest_challenge = $request->biggest_challenge;
        $rating->improve_experience = $request->improve_experience;
        $rating->save();
        return $rating;
    }
    // get all ratings
    public static function getAllRatings()
    {
        //get all ratings order desc by created_at
        return WebsiteRating::all();
    }
    // get a rating
    public function getRating($id)
    {
        return WebsiteRating::find($id);
    }
    // update a rating
    public function updateRating($request, $id)
    {
        $rating = WebsiteRating::find($id);
        $rating->experience = $request->experience;
        $rating->purpose = $request->purpose;
        $rating->helpful = $request->helpful;
        $rating->how_helpful = $request->how_helpful;
        $rating->purpose_achieved = $request->purpose_achieved;
        $rating->biggest_challenge = $request->biggest_challenge;
        $rating->improve_experience = $request->improve_experience;
        $rating->save();
    }
    // delete a rating
    public function deleteRating($id)
    {
        WebsiteRating::destroy($id);
    }
}

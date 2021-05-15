<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Category;

class ScoreController extends Controller
{
    public function score(string $name)
    {
        $score = Score::where('name', $name)->first();
        $category = Category::where('id', $score->category_id)->first();
         

        return view('users/scores', ['score' => $score]);


    }


}

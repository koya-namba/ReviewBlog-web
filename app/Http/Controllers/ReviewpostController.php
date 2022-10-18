<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviewpost;

class ReviewpostController extends Controller
{
    public function index(Reviewpost $reviewpost)
    {
        return $reviewpost->get();
    }
}
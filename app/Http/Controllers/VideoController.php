<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\View\View;

class VideoController extends Controller{
    public function show(): View
    {
        $videos=video::all();
        return view('videos', [
            'data' => $videos,
        ]);
    }
}
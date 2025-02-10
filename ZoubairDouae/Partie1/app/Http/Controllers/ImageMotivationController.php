<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageMotivationController extends Controller
{

    protected $ImageService;

    public function __construct(ImageService $imageService){
        $this->ImageService = $imageService;
    }

    public function index(){

        $images = $this->imageService->getImagesWithSupport();
        return view('images.index');

    }
}

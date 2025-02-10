<?php
namespace App\Services;

use App\Models\ImageMotivation;

class ImageService 
{


    public function getImagesWithSupport(){

        return ImageMotivation::with(['employe' , 'supportMotivation' ,  'typeMotivation'])->get(); 
    }    

    public function incrementImageViews(Image $image){
        

    }

    public function  incrementSupportViews(Image $image){

    }

}
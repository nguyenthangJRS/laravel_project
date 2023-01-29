<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait FileTraits{

    function file_info($req,$fileName,$directory)
    {
        if($req->hasFile($fileName)){
            $file = $req->$fileName;
            $filePathOrigin = $file->getClientOriginalName();
            $fileNameHash = Str::random(20).'/'.$file->getClientOriginalExtension();

            $filePath = $req->file($fileName)->storeAs("public/${directory}/".auth()->id(),$fileNameHash);

            $file_info = [
                "file_name" => $filePathOrigin,
                "file_path" => Storage::url($filePath),
            ];

            return $file_info;
        }
        return null;
    }
}

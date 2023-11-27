<?php

namespace App\Traits;

trait StorageImageTrait
{
    public function storageTraitUpload($request, $fieldName, $folderName)
    {
        $file =  $request->$fieldName;
        $fileNameOrigin  = $file->getClientOriginalName();
        $fileNameHash = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $filePath = $request->file('feature_image_path')->storeAs('public/' . $folderName . auth()->id(), $fileNameHash);
        $data = [
            'file_name' => $fileNameOrigin,
            'file_path' => Storage::url($filePath)
        ];
        dd($data);
    }
}

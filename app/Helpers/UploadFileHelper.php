<?php 
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;
 
function uploadSingleFile($file, $path, $resize = null){
    $fileName           = $file->getClientOriginalName();
    $extension          = $file->getClientOriginalExtension();
    $fileNameToStore    = radomPrefix().'.'.$extension;

    if($resize != null){
        $imgFile = Image::read($file->getRealPath());
        $imgFile->resize($resize, $resize, function ($constraint) {
		    $constraint->aspectRatio();
		})->save('storage/'.$path.'/'.$fileNameToStore);
        $uploadPath = 'storage/'.$path.'/'.$fileNameToStore;
    }else{
        $filePath = $file->storeAs($path, $fileNameToStore, 'public');
        $uploadPath = "storage/$filePath";
    }
    return $uploadPath;
}

function uploadMultipleFiles($files, $path, $resize = null){
    $filePaths = array();
    foreach($files as  $file)
    {
        $fileName           = $file->getClientOriginalName();
        $extension          = $file->getClientOriginalExtension();
        $fileNameToStore    = radomPrefix().'.'.$extension;

        if($resize != null){
            $imgFile = Image::read($file->getRealPath());
            $imgFile->resize($resize, $resize, function ($constraint) {
                $constraint->aspectRatio();
            })->save('storage/'.$path.'/'.$fileNameToStore);
            $uploadPath = 'storage/'.$path.'/'.$fileNameToStore;
        }else{
            $filePath = $file->storeAs($path, $fileNameToStore, 'public');
            $uploadPath = "storage/$filePath";
        }
        array_push($filePaths, $uploadPath);
    }
    return implode(',', $filePaths);
}

function uploadBase64File($base64String, $path){
    $fileNameToStore = radomPrefix().'.png';
    $imgFile = Image::read($base64String);
    $imgFile->resize(300, 300, function ($constraint) {
        $constraint->aspectRatio();
    })->save('storage/'.$path.'/'.$fileNameToStore);
    $uploadPath = 'storage/'.$path.'/'.$fileNameToStore;
    return $uploadPath;
}

function deleteUploadFile($path){
    // $storageFilePath = str_replace('storage/', 'app/public/', $path);
    // unlink(storage_path($storageFilePath));
}
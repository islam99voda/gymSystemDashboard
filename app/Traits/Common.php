<?php
namespace App\Traits;

Trait Common {
    public function uploadFile($file, $path){
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $file->move($path, $file_name);
        return $file_name;
    }
}
//or 
protected function uploadFile($newImag, $path)
    {
        if (isset($newImag)) {
            $image_name = uuid_create() . "_" . $newImag->hashName();
            $newImag->move($path, $image_name);
            return $path . $image_name;
        }
    }

    protected function removeFile($path)
    {

        if (isset($path) && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }

    
?>

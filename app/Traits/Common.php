<?php
namespace App\Traits;

Trait Common {
    protected function uploadFile($newFile, $path)
    {
        $file_name = uuid_create() . "." . $newFile->getClientOriginalExtension();
        $filePath = $newFile->storeAs($path, $file_name, 'public');
        return $file_name;
    }

    protected function removeFile($path)
    {
        if (isset($path) && File::exists(storage_path(storagePath . $path))) {
            File::delete(storage_path(storagePath . $path));
        }
    }
}
    
?>

<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * Class ImageService
 * @package App\Services
 */
class ImageService
{
    /**
     * @param int $id
     * @param UploadedFile $image
     * @param string $folder
     * @return string
     */
    public function store(int $id, UploadedFile $image, string $folder): string
    {
        $path = $this->getPath($id, $folder);
        if ($file = $this->getDisk()->put($path, $image)) {
            return $this->getFileUrl($file);
        }
        throw new \RuntimeException("Image wasn't saved");
    }

    /**
     * @param string $imageLink
     * @return bool
     */
    public function destroy(string $imageLink): bool
    {
        $path = $this->getFilenameFromUrl($imageLink);
        return $this->getDisk()->delete($path);
    }

    public function getFileUrl($relativeFilename)
    {
        return $this->getDisk()->url($relativeFilename);
    }

    public function fileExistsFromUrl(string $imageLink): bool
    {
        $path = $this->getFilenameFromUrl($imageLink);
        return $this->getDisk()->exists($path);
    }

    /**
     * @param string $entity
     * @param int $id
     * @return bool
     */
    public function destroyByEntityId(string $entity, int $id): bool
    {
        $directory = $this->getPath($id, $entity);
        return $this->getDisk()->deleteDirectory($directory);
    }

    /**
     * @param string $filenameUrl
     * @return string
     */
    public function getFilenameFromUrl(string $filenameUrl): string
    {
        $urlPrefix = $this->getDisk()->url('');
        return substr($filenameUrl, strlen($urlPrefix) - 1);
    }

    /**
     * @param int $id
     * @param string $folder
     * @return string
     */
    private function getPath(int $id, string $folder): string
    {
        return $folder . '/' . $id;
    }

    /**
     * @return \Illuminate\Contracts\Filesystem\Filesystem|\Illuminate\Filesystem\FilesystemAdapter
     */
    protected function getDisk()
    {
        return Storage::disk('public');
    }
}
<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Services\ImageService;
use Illuminate\Http\Response;

class ImageController extends Controller
{
    /** @var ImageService $imageService */
    private $imageService;

    /**
     * ImageController constructor.
     *
     * @param ImageService $imageService
     */

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    /**
     * @param ImageRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ImageRequest $request)
    {
        try {
            $link = $this->imageService->store($request->id, $request->image, $request->folder);
        } catch (\RuntimeException $e) {
            return response()->json(['error' => $e->getMessage()], Response::HTTP_BAD_GATEWAY);
        }
        return response()->json([
            'link' => $link,
            'filename' => $this->imageService->getFilenameFromUrl($link),
        ], Response::HTTP_OK);
    }

    /**
     * @param ImageRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(ImageRequest $request)
    {
        if ($this->imageService->fileExistsFromUrl($request->image_link)) {
            if ($this->imageService->destroy($request->image_link)) {
                return response()->json([], Response::HTTP_OK);
            }
            return response()->json([], Response::HTTP_FAILED_DEPENDENCY);
        }
        return response()->json([], Response::HTTP_OK);
    }
}
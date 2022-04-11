<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadTrait;
use App\Http\Requests\StoreBodyRequest;
use App\Http\Requests\UpdateBodyRequest;
use App\Http\Resources\Admin\BodyResource;
use App\Models\Body;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BodyApiController extends Controller
{
    use MediaUploadTrait;

    public function index()
    {
        abort_if(Gate::denies('body_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BodyResource(Body::all());
    }

    public function store(StoreBodyRequest $request)
    {
        $body = Body::create($request->validated());

        foreach ($request->input('body_photo', []) as $file) {
            $body->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('body_photo');
        }

        return (new BodyResource($body))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Body $body)
    {
        abort_if(Gate::denies('body_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BodyResource($body);
    }

    public function update(UpdateBodyRequest $request, Body $body)
    {
        $body->update($request->validated());

        if (count($body->body_photo) > 0) {
            foreach ($body->body_photo as $media) {
                if (!in_array($media->file_name, $request->input('body_photo', []))) {
                    $media->delete();
                }
            }
        }
        $media = $body->body_photo->pluck('file_name')->toArray();
        foreach ($request->input('body_photo', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $body->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('body_photo');
            }
        }

        return (new BodyResource($body))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Body $body)
    {
        abort_if(Gate::denies('body_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $body->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

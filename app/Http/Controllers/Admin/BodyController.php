<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Body;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BodyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('body_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.body.index');
    }

    public function create()
    {
        abort_if(Gate::denies('body_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.body.create');
    }

    public function edit(Body $body)
    {
        abort_if(Gate::denies('body_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.body.edit', compact('body'));
    }

    public function show(Body $body)
    {
        abort_if(Gate::denies('body_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $body->load('location', 'crematorium');

        return view('admin.body.show', compact('body'));
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['body_create', 'body_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }
        if (request()->has('max_width') || request()->has('max_height')) {
            $this->validate(request(), [
                'file' => sprintf(
                'image|dimensions:max_width=%s,max_height=%s',
                request()->input('max_width', 100000),
                request()->input('max_height', 100000)
                ),
            ]);
        }

        $model                     = new Body();
        $model->id                 = $request->input('model_id', 0);
        $model->exists             = true;
        $media                     = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));
        $media->wasRecentlyCreated = true;

        return response()->json(compact('media'), Response::HTTP_CREATED);
    }
}

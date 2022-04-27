<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Crematorium;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CrematoriumController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crematorium_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.crematorium.index');
    }

    public function create()
    {
        abort_if(Gate::denies('crematorium_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.crematorium.create');
    }

    public function edit(Crematorium $crematorium)
    {
        abort_if(Gate::denies('crematorium_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.crematorium.edit', compact('crematorium'));
    }

    public function show(Crematorium $crematorium)
    {
        abort_if(Gate::denies('crematorium_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.crematorium.show', compact('crematorium'));
    }
}

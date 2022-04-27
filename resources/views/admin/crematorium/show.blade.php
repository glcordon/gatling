@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.crematorium.title_singular') }}:
                    {{ trans('cruds.crematorium.fields.id') }}
                    {{ $crematorium->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.crematorium.fields.id') }}
                            </th>
                            <td>
                                {{ $crematorium->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.crematorium.fields.crematorium_name') }}
                            </th>
                            <td>
                                {{ $crematorium->crematorium_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.crematorium.fields.phone') }}
                            </th>
                            <td>
                                {{ $crematorium->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.crematorium.fields.representative') }}
                            </th>
                            <td>
                                {{ $crematorium->representative }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.crematorium.fields.address') }}
                            </th>
                            <td>
                                {{ $crematorium->address }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('crematorium_edit')
                    <a href="{{ route('admin.crematoria.edit', $crematorium) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.crematoria.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
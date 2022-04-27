@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.location.title_singular') }}:
                    {{ trans('cruds.location.fields.id') }}
                    {{ $location->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.location.fields.id') }}
                            </th>
                            <td>
                                {{ $location->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.location.fields.name') }}
                            </th>
                            <td>
                                {{ $location->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.location.fields.phone') }}
                            </th>
                            <td>
                                {{ $location->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.location.fields.city') }}
                            </th>
                            <td>
                                {{ $location->city }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.location.fields.state') }}
                            </th>
                            <td>
                                {{ $location->state }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.location.fields.zip') }}
                            </th>
                            <td>
                                {{ $location->zip }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('location_edit')
                    <a href="{{ route('admin.locations.edit', $location) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.locations.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
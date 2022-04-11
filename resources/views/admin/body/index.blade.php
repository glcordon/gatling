@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.body.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('body_create')
                    <a class="btn btn-indigo" href="{{ route('admin.bodies.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.body.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('body.index')

    </div>
</div>
@endsection
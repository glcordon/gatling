@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.body.title_singular') }}:
                    {{ trans('cruds.body.fields.id') }}
                    {{ $body->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('body.edit', [$body])
        </div>
    </div>
</div>
@endsection
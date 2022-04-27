@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.crematorium.title_singular') }}:
                    {{ trans('cruds.crematorium.fields.id') }}
                    {{ $crematorium->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('crematorium.edit', [$crematorium])
        </div>
    </div>
</div>
@endsection
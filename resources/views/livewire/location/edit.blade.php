<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('location.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.location.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="location.name">
        <div class="validation-message">
            {{ $errors->first('location.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.location.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('location.phone') ? 'invalid' : '' }}">
        <label class="form-label" for="phone">{{ trans('cruds.location.fields.phone') }}</label>
        <input class="form-control" type="text" name="phone" id="phone" wire:model.defer="location.phone">
        <div class="validation-message">
            {{ $errors->first('location.phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.location.fields.phone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('location.city') ? 'invalid' : '' }}">
        <label class="form-label" for="city">{{ trans('cruds.location.fields.city') }}</label>
        <input class="form-control" type="text" name="city" id="city" wire:model.defer="location.city">
        <div class="validation-message">
            {{ $errors->first('location.city') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.location.fields.city_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('location.state') ? 'invalid' : '' }}">
        <label class="form-label" for="state">{{ trans('cruds.location.fields.state') }}</label>
        <input class="form-control" type="text" name="state" id="state" wire:model.defer="location.state">
        <div class="validation-message">
            {{ $errors->first('location.state') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.location.fields.state_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('location.zip') ? 'invalid' : '' }}">
        <label class="form-label" for="zip">{{ trans('cruds.location.fields.zip') }}</label>
        <input class="form-control" type="text" name="zip" id="zip" wire:model.defer="location.zip">
        <div class="validation-message">
            {{ $errors->first('location.zip') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.location.fields.zip_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.locations.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('crematorium.crematorium_name') ? 'invalid' : '' }}">
        <label class="form-label" for="crematorium_name">{{ trans('cruds.crematorium.fields.crematorium_name') }}</label>
        <input class="form-control" type="text" name="crematorium_name" id="crematorium_name" wire:model.defer="crematorium.crematorium_name">
        <div class="validation-message">
            {{ $errors->first('crematorium.crematorium_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.crematorium.fields.crematorium_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('crematorium.phone') ? 'invalid' : '' }}">
        <label class="form-label" for="phone">{{ trans('cruds.crematorium.fields.phone') }}</label>
        <input class="form-control" type="text" name="phone" id="phone" wire:model.defer="crematorium.phone">
        <div class="validation-message">
            {{ $errors->first('crematorium.phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.crematorium.fields.phone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('crematorium.representative') ? 'invalid' : '' }}">
        <label class="form-label" for="representative">{{ trans('cruds.crematorium.fields.representative') }}</label>
        <input class="form-control" type="text" name="representative" id="representative" wire:model.defer="crematorium.representative">
        <div class="validation-message">
            {{ $errors->first('crematorium.representative') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.crematorium.fields.representative_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('crematorium.address') ? 'invalid' : '' }}">
        <label class="form-label" for="address">{{ trans('cruds.crematorium.fields.address') }}</label>
        <textarea class="form-control" name="address" id="address" wire:model.defer="crematorium.address" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('crematorium.address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.crematorium.fields.address_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.crematoria.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
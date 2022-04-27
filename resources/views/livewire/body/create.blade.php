<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('body.service_id_number') ? 'invalid' : '' }}">
        <label class="form-label" for="service_id_number">{{ trans('cruds.body.fields.service_id_number') }}</label>
        <input class="form-control" type="text" name="service_id_number" id="service_id_number" wire:model.defer="body.service_id_number">
        <div class="validation-message">
            {{ $errors->first('body.service_id_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.service_id_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.funeral_home_rep') ? 'invalid' : '' }}">
        <label class="form-label" for="funeral_home_rep">Funeral Home Rep</label>
        <input class="form-control" type="text" name="funeral_home_rep" id="funeral_home_rep" wire:model.defer="body.funeral_home_rep">
        <div class="validation-message">
            {{ $errors->first('body.funeral_home_rep') }}
        </div>
        <div class="help-block">
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.first_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="first_name">{{ trans('cruds.body.fields.first_name') }}</label>
        <input class="form-control" type="text" name="first_name" id="first_name" required wire:model.defer="body.first_name">
        <div class="validation-message">
            {{ $errors->first('body.first_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.first_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.last_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="last_name">{{ trans('cruds.body.fields.last_name') }}</label>
        <input class="form-control" type="text" name="last_name" id="last_name" required wire:model.defer="body.last_name">
        <div class="validation-message">
            {{ $errors->first('body.last_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.last_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.date_of_birth') ? 'invalid' : '' }}">
        <label class="form-label required" for="date_of_birth">{{ trans('cruds.body.fields.date_of_birth') }}</label>
        <x-date-picker class="form-control" required wire:model="body.date_of_birth" id="date_of_birth" name="date_of_birth" picker="date" />
        <div class="validation-message">
            {{ $errors->first('body.date_of_birth') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.date_of_birth_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.death_time_date') ? 'invalid' : '' }}">
        <label class="form-label" for="death_time_date">{{ trans('cruds.body.fields.death_time_date') }}</label>
        <x-date-picker class="form-control" wire:model="body.death_time_date" id="death_time_date" name="death_time_date" />
        <div class="validation-message">
            {{ $errors->first('body.death_time_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.death_time_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.height') ? 'invalid' : '' }}">
        <label class="form-label" for="height">{{ trans('cruds.body.fields.height') }}</label>
        <input class="form-control" type="text" name="height" id="height" wire:model.defer="body.height">
        <div class="validation-message">
            {{ $errors->first('body.height') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.height_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.weight') ? 'invalid' : '' }}">
        <label class="form-label" for="weight">{{ trans('cruds.body.fields.weight') }}</label>
        <input class="form-control" type="text" name="weight" id="weight" wire:model.defer="body.weight">
        <div class="validation-message">
            {{ $errors->first('body.weight') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.weight_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.place_of_removal') ? 'invalid' : '' }}">
        <label class="form-label" for="place_of_removal">{{ trans('cruds.body.fields.place_of_removal') }}</label>
        <input class="form-control" type="text" name="place_of_removal" id="place_of_removal" wire:model.defer="body.place_of_removal">
        <div class="validation-message">
            {{ $errors->first('body.place_of_removal') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.place_of_removal_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.covid') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.body.fields.covid') }}</label>
        <select class="form-control" wire:model="body.covid">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['covid'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('body.covid') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.covid_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.me_case_number') ? 'invalid' : '' }}">
        <label class="form-label" for="me_case_number">{{ trans('cruds.body.fields.me_case_number') }}</label>
        <input class="form-control" type="text" name="me_case_number" id="me_case_number" wire:model.defer="body.me_case_number">
        <div class="validation-message">
            {{ $errors->first('body.me_case_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.me_case_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.house_removal') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.body.fields.house_removal') }}</label>
        <select class="form-control" wire:model="body.house_removal">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['house_removal'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('body.house_removal') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.house_removal_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.rd_number') ? 'invalid' : '' }}">
        <label class="form-label" for="rd_number">{{ trans('cruds.body.fields.rd_number') }}</label>
        <input class="form-control" type="text" name="rd_number" id="rd_number" wire:model.defer="body.rd_number">
        <div class="validation-message">
            {{ $errors->first('body.rd_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.rd_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.number_stairs_inside') ? 'invalid' : '' }}">
        <label class="form-label required" for="number_stairs_inside">{{ trans('cruds.body.fields.number_stairs_inside') }}</label>
        <input class="form-control" type="number" name="number_stairs_inside" id="number_stairs_inside" required wire:model.defer="body.number_stairs_inside" step="1">
        <div class="validation-message">
            {{ $errors->first('body.number_stairs_inside') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.number_stairs_inside_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.number_stairs_outside') ? 'invalid' : '' }}">
        <label class="form-label required" for="number_stairs_outside">{{ trans('cruds.body.fields.number_stairs_outside') }}</label>
        <input class="form-control" type="number" name="number_stairs_outside" id="number_stairs_outside" required wire:model.defer="body.number_stairs_outside" step="1">
        <div class="validation-message">
            {{ $errors->first('body.number_stairs_outside') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.number_stairs_outside_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.family_ready_for_removal') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.body.fields.family_ready_for_removal') }}</label>
        <select class="form-control" wire:model="body.family_ready_for_removal">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['family_ready_for_removal'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('body.family_ready_for_removal') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.family_ready_for_removal_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.doctors_name') ? 'invalid' : '' }}">
        <label class="form-label" for="doctors_name">{{ trans('cruds.body.fields.doctors_name') }}</label>
        <input class="form-control" type="text" name="doctors_name" id="doctors_name" wire:model.defer="body.doctors_name">
        <div class="validation-message">
            {{ $errors->first('body.doctors_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.doctors_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.doctors_phone_number') ? 'invalid' : '' }}">
        <label class="form-label" for="doctors_phone_number">{{ trans('cruds.body.fields.doctors_phone_number') }}</label>
        <input class="form-control" type="text" name="doctors_phone_number" id="doctors_phone_number" wire:model.defer="body.doctors_phone_number">
        <div class="validation-message">
            {{ $errors->first('body.doctors_phone_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.doctors_phone_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.doctors_fax') ? 'invalid' : '' }}">
        <label class="form-label" for="doctors_fax">{{ trans('cruds.body.fields.doctors_fax') }}</label>
        <input class="form-control" type="text" name="doctors_fax" id="doctors_fax" wire:model.defer="body.doctors_fax">
        <div class="validation-message">
            {{ $errors->first('body.doctors_fax') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.doctors_fax_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.pre_need_number') ? 'invalid' : '' }}">
        <label class="form-label" for="pre_need_number">{{ trans('cruds.body.fields.pre_need_number') }}</label>
        <input class="form-control" type="text" name="pre_need_number" id="pre_need_number" wire:model.defer="body.pre_need_number">
        <div class="validation-message">
            {{ $errors->first('body.pre_need_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.pre_need_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.next_of_kin') ? 'invalid' : '' }}">
        <label class="form-label required" for="next_of_kin">{{ trans('cruds.body.fields.next_of_kin') }}</label>
        <input class="form-control" type="text" name="next_of_kin" id="next_of_kin" required wire:model.defer="body.next_of_kin">
        <div class="validation-message">
            {{ $errors->first('body.next_of_kin') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.next_of_kin_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.relationship') ? 'invalid' : '' }}">
        <label class="form-label required" for="relationship">{{ trans('cruds.body.fields.relationship') }}</label>
        <input class="form-control" type="text" name="relationship" id="relationship" required wire:model.defer="body.relationship">
        <div class="validation-message">
            {{ $errors->first('body.relationship') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.relationship_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.next_of_kin_address') ? 'invalid' : '' }}">
        <label class="form-label required" for="next_of_kin_address">{{ trans('cruds.body.fields.next_of_kin_address') }}</label>
        <textarea class="form-control" name="next_of_kin_address" id="next_of_kin_address" required wire:model.defer="body.next_of_kin_address" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('body.next_of_kin_address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.next_of_kin_address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.next_of_kin_phone') ? 'invalid' : '' }}">
        <label class="form-label required" for="next_of_kin_phone">{{ trans('cruds.body.fields.next_of_kin_phone') }}</label>
        <input class="form-control" type="text" name="next_of_kin_phone" id="next_of_kin_phone" required wire:model.defer="body.next_of_kin_phone">
        <div class="validation-message">
            {{ $errors->first('body.next_of_kin_phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.next_of_kin_phone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.next_of_kin_email') ? 'invalid' : '' }}">
        <label class="form-label" for="next_of_kin_email">{{ trans('cruds.body.fields.next_of_kin_email') }}</label>
        <input class="form-control" type="email" name="next_of_kin_email" id="next_of_kin_email" wire:model.defer="body.next_of_kin_email">
        <div class="validation-message">
            {{ $errors->first('body.next_of_kin_email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.next_of_kin_email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.called_in_by') ? 'invalid' : '' }}">
        <label class="form-label" for="called_in_by">{{ trans('cruds.body.fields.called_in_by') }}</label>
        <input class="form-control" type="text" name="called_in_by" id="called_in_by" wire:model.defer="body.called_in_by">
        <div class="validation-message">
            {{ $errors->first('body.called_in_by') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.called_in_by_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.called_in_by_relationship') ? 'invalid' : '' }}">
        <label class="form-label" for="called_in_by_relationship">{{ trans('cruds.body.fields.called_in_by_relationship') }}</label>
        <input class="form-control" type="text" name="called_in_by_relationship" id="called_in_by_relationship" wire:model.defer="body.called_in_by_relationship">
        <div class="validation-message">
            {{ $errors->first('body.called_in_by_relationship') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.called_in_by_relationship_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.called_in_by_phone') ? 'invalid' : '' }}">
        <label class="form-label" for="called_in_by_phone">{{ trans('cruds.body.fields.called_in_by_phone') }}</label>
        <input class="form-control" type="text" name="called_in_by_phone" id="called_in_by_phone" wire:model.defer="body.called_in_by_phone">
        <div class="validation-message">
            {{ $errors->first('body.called_in_by_phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.called_in_by_phone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.embalm') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.body.fields.embalm') }}</label>
        <select class="form-control" wire:model="body.embalm">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['embalm'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('body.embalm') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.embalm_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.call_received_by') ? 'invalid' : '' }}">
        <label class="form-label" for="call_received_by">{{ trans('cruds.body.fields.call_received_by') }}</label>
        <input class="form-control" type="text" name="call_received_by" id="call_received_by" wire:model.defer="body.call_received_by">
        <div class="validation-message">
            {{ $errors->first('body.call_received_by') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.call_received_by_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.call_received_by_date_time') ? 'invalid' : '' }}">
        <label class="form-label" for="call_received_by_date_time">{{ trans('cruds.body.fields.call_received_by_date_time') }}</label>
        <x-date-picker class="form-control" wire:model="body.call_received_by_date_time" id="call_received_by_date_time" name="call_received_by_date_time" />
        <div class="validation-message">
            {{ $errors->first('body.call_received_by_date_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.call_received_by_date_time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.removal_made_by') ? 'invalid' : '' }}">
        <label class="form-label" for="removal_made_by">{{ trans('cruds.body.fields.removal_made_by') }}</label>
        <input class="form-control" type="text" name="removal_made_by" id="removal_made_by" wire:model.defer="body.removal_made_by">
        <div class="validation-message">
            {{ $errors->first('body.removal_made_by') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.removal_made_by_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.removal_date_time') ? 'invalid' : '' }}">
        <label class="form-label" for="removal_date_time">{{ trans('cruds.body.fields.removal_date_time') }}</label>
        <x-date-picker class="form-control" wire:model="body.removal_date_time" id="removal_date_time" name="removal_date_time" />
        <div class="validation-message">
            {{ $errors->first('body.removal_date_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.removal_date_time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.personal_item_picked_up') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.body.fields.personal_item_picked_up') }}</label>
        <select class="form-control" wire:model="body.personal_item_picked_up">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['personal_item_picked_up'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('body.personal_item_picked_up') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.personal_item_picked_up_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.list_of_items_received') ? 'invalid' : '' }}">
        <label class="form-label" for="list_of_items_received">{{ trans('cruds.body.fields.list_of_items_received') }}</label>
        <textarea class="form-control" name="list_of_items_received" id="list_of_items_received" wire:model.defer="body.list_of_items_received" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('body.list_of_items_received') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.list_of_items_received_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.family_notified') ? 'invalid' : '' }}">
        <label class="form-label" for="family_notified">{{ trans('cruds.body.fields.family_notified') }}</label>
        <textarea class="form-control" name="family_notified" id="family_notified" wire:model.defer="body.family_notified" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('body.family_notified') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.family_notified_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.body_photo') ? 'invalid' : '' }}">
        <label class="form-label" for="photo">{{ trans('cruds.body.fields.photo') }}</label>
        <x-dropzone id="photo" name="photo" action="{{ route('admin.bodies.storeMedia') }}" collection-name="body_photo" max-file-size="6" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.body_photo') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.photo_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.location_id') ? 'invalid' : '' }}">
        <label class="form-label" for="location">{{ trans('cruds.body.fields.location') }}</label>
        <x-select-list class="form-control" id="location" name="location" :options="$this->listsForFields['location']" wire:model="body.location_id" />
        <div class="validation-message">
            {{ $errors->first('body.location_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.location_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.crematorium_id') ? 'invalid' : '' }}">
        <label class="form-label" for="crematorium">{{ trans('cruds.body.fields.crematorium') }}</label>
        <x-select-list class="form-control" id="crematorium" name="crematorium" :options="$this->listsForFields['crematorium']" wire:model="body.crematorium_id" />
        <div class="validation-message">
            {{ $errors->first('body.crematorium_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.body.fields.crematorium_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('body.date_sent_to_crematoreum') ? 'invalid' : '' }}">
        <label class="form-label" for="date_sent_to_crematoreum">Date Sent To Crematoreum</label>
        <x-date-picker class="form-control" required wire:model="body.date_sent_to_crematoreum" id="date_sent_to_crematoreum" name="date_sent_to_crematoreum" picker="date" />
        <div class="validation-message">
            {{ $errors->first('body.date_sent_to_crematoreum') }}
        </div>
        <div class="help-block">
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.bodies.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
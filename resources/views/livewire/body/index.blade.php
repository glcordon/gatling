<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('body_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Body" format="csv" />
                <livewire:excel-export model="Body" format="xlsx" />
                <livewire:excel-export model="Body" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.body.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.first_name') }}
                            @include('components.table.sort', ['field' => 'first_name'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.last_name') }}
                            @include('components.table.sort', ['field' => 'last_name'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.date_of_birth') }}
                            @include('components.table.sort', ['field' => 'date_of_birth'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.death_date') }}
                            @include('components.table.sort', ['field' => 'death_date'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.ssn') }}
                            @include('components.table.sort', ['field' => 'ssn'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.height') }}
                            @include('components.table.sort', ['field' => 'height'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.weight') }}
                            @include('components.table.sort', ['field' => 'weight'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.place_of_removal') }}
                            @include('components.table.sort', ['field' => 'place_of_removal'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.time_of_death') }}
                            @include('components.table.sort', ['field' => 'time_of_death'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.covid') }}
                            @include('components.table.sort', ['field' => 'covid'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.me_case_number') }}
                            @include('components.table.sort', ['field' => 'me_case_number'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.house_removal') }}
                            @include('components.table.sort', ['field' => 'house_removal'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.rd_number') }}
                            @include('components.table.sort', ['field' => 'rd_number'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.stair_location') }}
                            @include('components.table.sort', ['field' => 'stair_location'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.family_ready_for_removal') }}
                            @include('components.table.sort', ['field' => 'family_ready_for_removal'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.doctors_name') }}
                            @include('components.table.sort', ['field' => 'doctors_name'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.doctors_phone_number') }}
                            @include('components.table.sort', ['field' => 'doctors_phone_number'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.doctors_fax') }}
                            @include('components.table.sort', ['field' => 'doctors_fax'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.at_need_service_id_number') }}
                            @include('components.table.sort', ['field' => 'at_need_service_id_number'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.pre_need_number') }}
                            @include('components.table.sort', ['field' => 'pre_need_number'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.next_of_kin') }}
                            @include('components.table.sort', ['field' => 'next_of_kin'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.relationship') }}
                            @include('components.table.sort', ['field' => 'relationship'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.next_of_kin_address') }}
                            @include('components.table.sort', ['field' => 'next_of_kin_address'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.next_of_kin_phone') }}
                            @include('components.table.sort', ['field' => 'next_of_kin_phone'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.next_of_kin_email') }}
                            @include('components.table.sort', ['field' => 'next_of_kin_email'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.called_in_by') }}
                            @include('components.table.sort', ['field' => 'called_in_by'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.called_in_by_relationship') }}
                            @include('components.table.sort', ['field' => 'called_in_by_relationship'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.called_in_by_phone') }}
                            @include('components.table.sort', ['field' => 'called_in_by_phone'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.embalm') }}
                            @include('components.table.sort', ['field' => 'embalm'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.call_received_by') }}
                            @include('components.table.sort', ['field' => 'call_received_by'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.call_received_by_date_time') }}
                            @include('components.table.sort', ['field' => 'call_received_by_date_time'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.removal_made_by') }}
                            @include('components.table.sort', ['field' => 'removal_made_by'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.removal_date_time') }}
                            @include('components.table.sort', ['field' => 'removal_date_time'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.personal_item_picked_up') }}
                            @include('components.table.sort', ['field' => 'personal_item_picked_up'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.list_of_items_received') }}
                            @include('components.table.sort', ['field' => 'list_of_items_received'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.family_notified') }}
                            @include('components.table.sort', ['field' => 'family_notified'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.photo') }}
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bodies as $body)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $body->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $body->id }}
                            </td>
                            <td>
                                {{ $body->first_name }}
                            </td>
                            <td>
                                {{ $body->last_name }}
                            </td>
                            <td>
                                {{ $body->date_of_birth }}
                            </td>
                            <td>
                                {{ $body->death_date }}
                            </td>
                            <td>
                                {{ $body->ssn }}
                            </td>
                            <td>
                                {{ $body->height }}
                            </td>
                            <td>
                                {{ $body->weight }}
                            </td>
                            <td>
                                {{ $body->place_of_removal }}
                            </td>
                            <td>
                                {{ $body->time_of_death }}
                            </td>
                            <td>
                                {{ $body->covid_label }}
                            </td>
                            <td>
                                {{ $body->me_case_number }}
                            </td>
                            <td>
                                {{ $body->house_removal_label }}
                            </td>
                            <td>
                                {{ $body->rd_number }}
                            </td>
                            <td>
                                {{ $body->stair_location_label }}
                            </td>
                            <td>
                                {{ $body->family_ready_for_removal_label }}
                            </td>
                            <td>
                                {{ $body->doctors_name }}
                            </td>
                            <td>
                                {{ $body->doctors_phone_number }}
                            </td>
                            <td>
                                {{ $body->doctors_fax }}
                            </td>
                            <td>
                                {{ $body->at_need_service_id_number }}
                            </td>
                            <td>
                                {{ $body->pre_need_number }}
                            </td>
                            <td>
                                {{ $body->next_of_kin }}
                            </td>
                            <td>
                                {{ $body->relationship }}
                            </td>
                            <td>
                                {{ $body->next_of_kin_address }}
                            </td>
                            <td>
                                {{ $body->next_of_kin_phone }}
                            </td>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $body->next_of_kin_email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $body->next_of_kin_email }}
                                </a>
                            </td>
                            <td>
                                {{ $body->called_in_by }}
                            </td>
                            <td>
                                {{ $body->called_in_by_relationship }}
                            </td>
                            <td>
                                {{ $body->called_in_by_phone }}
                            </td>
                            <td>
                                {{ $body->embalm_label }}
                            </td>
                            <td>
                                {{ $body->call_received_by }}
                            </td>
                            <td>
                                {{ $body->call_received_by_date_time }}
                            </td>
                            <td>
                                {{ $body->removal_made_by }}
                            </td>
                            <td>
                                {{ $body->removal_date_time }}
                            </td>
                            <td>
                                {{ $body->personal_item_picked_up_label }}
                            </td>
                            <td>
                                {{ $body->list_of_items_received }}
                            </td>
                            <td>
                                {{ $body->family_notified }}
                            </td>
                            <td>
                                @foreach($body->photo as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('body_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.bodies.show', $body) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('body_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.bodies.edit', $body) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('body_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $body->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $bodies->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush
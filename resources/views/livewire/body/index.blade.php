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
                            {{ trans('cruds.body.fields.death_time_date') }}
                            @include('components.table.sort', ['field' => 'death_time_date'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.covid') }}
                            @include('components.table.sort', ['field' => 'covid'])
                        </th>
                        <th>
                            {{ trans('cruds.body.fields.number_of_stairs') }}
                            @include('components.table.sort', ['field' => 'number_of_stairs'])
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
                                {{ $body->death_time_date }}
                            </td>
                            <td>
                                {{ $body->covid_label }}
                            </td>
                            <td>
                                {{ $body->number_of_stairs }}
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
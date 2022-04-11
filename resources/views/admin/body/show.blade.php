@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.body.title_singular') }}:
                    {{ trans('cruds.body.fields.id') }}
                    {{ $body->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.id') }}
                            </th>
                            <td>
                                {{ $body->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.first_name') }}
                            </th>
                            <td>
                                {{ $body->first_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.last_name') }}
                            </th>
                            <td>
                                {{ $body->last_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.date_of_birth') }}
                            </th>
                            <td>
                                {{ $body->date_of_birth }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.death_date') }}
                            </th>
                            <td>
                                {{ $body->death_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.ssn') }}
                            </th>
                            <td>
                                {{ $body->ssn }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.height') }}
                            </th>
                            <td>
                                {{ $body->height }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.weight') }}
                            </th>
                            <td>
                                {{ $body->weight }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.place_of_removal') }}
                            </th>
                            <td>
                                {{ $body->place_of_removal }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.time_of_death') }}
                            </th>
                            <td>
                                {{ $body->time_of_death }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.covid') }}
                            </th>
                            <td>
                                {{ $body->covid_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.me_case_number') }}
                            </th>
                            <td>
                                {{ $body->me_case_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.house_removal') }}
                            </th>
                            <td>
                                {{ $body->house_removal_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.rd_number') }}
                            </th>
                            <td>
                                {{ $body->rd_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.stair_location') }}
                            </th>
                            <td>
                                {{ $body->stair_location_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.family_ready_for_removal') }}
                            </th>
                            <td>
                                {{ $body->family_ready_for_removal_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.doctors_name') }}
                            </th>
                            <td>
                                {{ $body->doctors_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.doctors_phone_number') }}
                            </th>
                            <td>
                                {{ $body->doctors_phone_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.doctors_fax') }}
                            </th>
                            <td>
                                {{ $body->doctors_fax }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.at_need_service_id_number') }}
                            </th>
                            <td>
                                {{ $body->at_need_service_id_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.pre_need_number') }}
                            </th>
                            <td>
                                {{ $body->pre_need_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.next_of_kin') }}
                            </th>
                            <td>
                                {{ $body->next_of_kin }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.relationship') }}
                            </th>
                            <td>
                                {{ $body->relationship }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.next_of_kin_address') }}
                            </th>
                            <td>
                                {{ $body->next_of_kin_address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.next_of_kin_phone') }}
                            </th>
                            <td>
                                {{ $body->next_of_kin_phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.next_of_kin_email') }}
                            </th>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $body->next_of_kin_email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $body->next_of_kin_email }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.called_in_by') }}
                            </th>
                            <td>
                                {{ $body->called_in_by }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.called_in_by_relationship') }}
                            </th>
                            <td>
                                {{ $body->called_in_by_relationship }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.called_in_by_phone') }}
                            </th>
                            <td>
                                {{ $body->called_in_by_phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.embalm') }}
                            </th>
                            <td>
                                {{ $body->embalm_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.call_received_by') }}
                            </th>
                            <td>
                                {{ $body->call_received_by }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.call_received_by_date_time') }}
                            </th>
                            <td>
                                {{ $body->call_received_by_date_time }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.removal_made_by') }}
                            </th>
                            <td>
                                {{ $body->removal_made_by }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.removal_date_time') }}
                            </th>
                            <td>
                                {{ $body->removal_date_time }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.personal_item_picked_up') }}
                            </th>
                            <td>
                                {{ $body->personal_item_picked_up_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.list_of_items_received') }}
                            </th>
                            <td>
                                {{ $body->list_of_items_received }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.family_notified') }}
                            </th>
                            <td>
                                {{ $body->family_notified }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.body.fields.photo') }}
                            </th>
                            <td>
                                @foreach($body->photo as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('body_edit')
                    <a href="{{ route('admin.bodies.edit', $body) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.bodies.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
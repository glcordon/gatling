<?php

namespace App\Http\Requests;

use App\Models\Body;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBodyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('body_create'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => [
                'string',
                'required',
            ],
            'last_name' => [
                'string',
                'required',
            ],
            'date_of_birth' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'death_date' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'ssn' => [
                'string',
                'nullable',
            ],
            'height' => [
                'string',
                'nullable',
            ],
            'weight' => [
                'string',
                'nullable',
            ],
            'place_of_removal' => [
                'string',
                'nullable',
            ],
            'time_of_death' => [
                'nullable',
                'date_format:' . config('project.time_format'),
            ],
            'covid' => [
                'required',
                'in:' . implode(',', array_keys(Body::COVID_SELECT)),
            ],
            'me_case_number' => [
                'string',
                'nullable',
            ],
            'house_removal' => [
                'nullable',
                'in:' . implode(',', array_keys(Body::HOUSE_REMOVAL_SELECT)),
            ],
            'rd_number' => [
                'string',
                'nullable',
            ],
            'stair_location' => [
                'nullable',
                'in:' . implode(',', array_keys(Body::STAIR_LOCATION_SELECT)),
            ],
            'family_ready_for_removal' => [
                'nullable',
                'in:' . implode(',', array_keys(Body::FAMILY_READY_FOR_REMOVAL_SELECT)),
            ],
            'doctors_name' => [
                'string',
                'nullable',
            ],
            'doctors_phone_number' => [
                'string',
                'nullable',
            ],
            'doctors_fax' => [
                'string',
                'nullable',
            ],
            'at_need_service_id_number' => [
                'string',
                'nullable',
            ],
            'pre_need_number' => [
                'string',
                'nullable',
            ],
            'next_of_kin' => [
                'string',
                'nullable',
            ],
            'relationship' => [
                'string',
                'nullable',
            ],
            'next_of_kin_address' => [
                'string',
                'nullable',
            ],
            'next_of_kin_phone' => [
                'string',
                'nullable',
            ],
            'next_of_kin_email' => [
                'email:rfc',
                'nullable',
            ],
            'called_in_by' => [
                'string',
                'nullable',
            ],
            'called_in_by_relationship' => [
                'string',
                'nullable',
            ],
            'called_in_by_phone' => [
                'string',
                'nullable',
            ],
            'embalm' => [
                'nullable',
                'in:' . implode(',', array_keys(Body::EMBALM_SELECT)),
            ],
            'call_received_by' => [
                'string',
                'nullable',
            ],
            'body.call_received_by_date_time' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'removal_made_by' => [
                'string',
                'nullable',
            ],
            'body.removal_date_time' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'personal_item_picked_up' => [
                'nullable',
                'in:' . implode(',', array_keys(Body::PERSONAL_ITEM_PICKED_UP_SELECT)),
            ],
            'list_of_items_received' => [
                'string',
                'nullable',
            ],
            'family_notified' => [
                'string',
                'nullable',
            ],
        ];
    }
}

<?php

namespace App\Http\Livewire\Body;

use App\Models\Body;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Create extends Component
{
    public Body $body;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    public function mount(Body $body)
    {
        $this->body                 = $body;
        $this->body->stair_inside   = false;
        $this->body->stairs_outside = false;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.body.create');
    }

    public function submit()
    {
        $this->validate();

        $this->body->save();
        $this->syncMedia();

        return redirect()->route('admin.bodies.index');
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->body->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }

    protected function rules(): array
    {
        return [
            'body.service_id_number' => [
                'string',
                'nullable',
            ],
            'body.first_name' => [
                'string',
                'required',
            ],
            'body.last_name' => [
                'string',
                'required',
            ],
            'body.date_of_birth' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'body.death_time_date' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'body.height' => [
                'string',
                'nullable',
            ],
            'body.weight' => [
                'string',
                'nullable',
            ],
            'body.place_of_removal' => [
                'string',
                'nullable',
            ],
            'body.covid' => [
            ],
            'body.me_case_number' => [
                'string',
                'nullable',
            ],
            'body.house_removal' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['house_removal'])),
            ],
            'body.rd_number' => [
                'string',
                'nullable',
            ],
            
            'body.num_stairs_outside' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                //'nullable',
            ],
            'body.num_stairs_inside' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                //'nullable',
            ],
            'body.family_ready_for_removal' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['family_ready_for_removal'])),
            ],
            'body.doctors_name' => [
                'string',
                'nullable',
            ],
            'body.doctors_phone_number' => [
                'string',
                'nullable',
            ],
            'body.doctors_fax' => [
                'string',
                'nullable',
            ],
            'body.at_need_service_id_number' => [
                'string',
                'nullable',
            ],
            'body.pre_need_number' => [
                'string',
                'nullable',
            ],
            'body.next_of_kin' => [
                'string',
                'required',
            ],
            'body.relationship' => [
                'string',
                'required',
            ],
            'body.next_of_kin_address' => [
                'string',
                'required',
            ],
            'body.next_of_kin_phone' => [
                'string',
                'required',
            ],
            'body.next_of_kin_email' => [
                'email:rfc',
                'nullable',
            ],
            'body.called_in_by' => [
                'string',
                'nullable',
            ],
            'body.called_in_by_relationship' => [
                'string',
                'nullable',
            ],
            'body.called_in_by_phone' => [
                'string',
                'nullable',
            ],
            'body.embalm' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['embalm'])),
            ],
            'body.call_received_by' => [
                'string',
                'nullable',
            ],
            'body.call_received_by_date_time' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'body.removal_made_by' => [
                'string',
                'nullable',
            ],
            'body.removal_date_time' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'body.personal_item_picked_up' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['personal_item_picked_up'])),
            ],
            'body.list_of_items_received' => [
                'string',
                'nullable',
            ],
            'body.family_notified' => [
                'string',
                'nullable',
            ],
            'mediaCollections.body_photo' => [
                'array',
                'nullable',
            ],
            'mediaCollections.body_photo.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['covid']                    = $this->body::COVID_SELECT;
        $this->listsForFields['house_removal']            = $this->body::HOUSE_REMOVAL_SELECT;
        $this->listsForFields['family_ready_for_removal'] = $this->body::FAMILY_READY_FOR_REMOVAL_SELECT;
        $this->listsForFields['embalm']                   = $this->body::EMBALM_SELECT;
        $this->listsForFields['personal_item_picked_up']  = $this->body::PERSONAL_ITEM_PICKED_UP_SELECT;
    }
}

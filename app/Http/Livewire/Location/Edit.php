<?php

namespace App\Http\Livewire\Location;

use App\Models\Location;
use Livewire\Component;

class Edit extends Component
{
    public Location $location;

    public function mount(Location $location)
    {
        $this->location = $location;
    }

    public function render()
    {
        return view('livewire.location.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->location->save();

        return redirect()->route('admin.locations.index');
    }

    protected function rules(): array
    {
        return [
            'location.name' => [
                'string',
                'required',
            ],
            'location.phone' => [
                'string',
                'nullable',
            ],
            'location.city' => [
                'string',
                'nullable',
            ],
            'location.state' => [
                'string',
                'nullable',
            ],
            'location.zip' => [
                'string',
                'nullable',
            ],
        ];
    }
}

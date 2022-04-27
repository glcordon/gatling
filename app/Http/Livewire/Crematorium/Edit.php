<?php

namespace App\Http\Livewire\Crematorium;

use App\Models\Crematorium;
use Livewire\Component;

class Edit extends Component
{
    public Crematorium $crematorium;

    public function mount(Crematorium $crematorium)
    {
        $this->crematorium = $crematorium;
    }

    public function render()
    {
        return view('livewire.crematorium.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->crematorium->save();

        return redirect()->route('admin.crematoria.index');
    }

    protected function rules(): array
    {
        return [
            'crematorium.crematorium_name' => [
                'string',
                'nullable',
            ],
            'crematorium.phone' => [
                'string',
                'nullable',
            ],
            'crematorium.representative' => [
                'string',
                'nullable',
            ],
            'crematorium.address' => [
                'string',
                'nullable',
            ],
        ];
    }
}

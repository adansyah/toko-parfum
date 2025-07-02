<?php

namespace App\Livewire\Adminpage\Kategory;

use App\Http\Requests\KategoryRequest;
use App\Models\Kategory;
use Livewire\Component;

class Form extends Component
{
    public $name_kategory;
    public $perbandingan;
    public $botol;
    public $bibit;

    public function save(KategoryRequest $request)
    {
        $this->validated();

        Kategory::create($request->all());
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        return view('livewire.adminpage.kategory.form');
    }
}

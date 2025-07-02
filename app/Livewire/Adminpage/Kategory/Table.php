<?php

namespace App\Livewire\Adminpage\Kategory;

use Livewire\Component;
use App\Models\Kategory;

class Table extends Component
{
    public $kategori = [];

    public function mount()
    {
        $this->kategori = Kategory::all();
    }
    public function render()
    {
        return view('livewire.adminpage.kategory.table');
    }
}

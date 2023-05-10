<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaginaLlegada extends Component
{

    public $email;

    public function Subscribe()
    {

        \Log::debug($this->email);
    }
    public function render()
    {
        return view('livewire.pagina-llegada');
    }
}

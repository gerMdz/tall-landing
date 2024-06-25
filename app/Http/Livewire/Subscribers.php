<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Subscribers extends Component
{

    public $search = '';

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function search(): void
    {
        $this->emit('search', $this->search);
    }
    public function delete(Subscriber $subscriber): void
    {
        $subscriber->delete();
    }

    public function render(): View|Factory|\Illuminate\View\View|Application
    {
        $subscribers = Subscriber::where(
            'email','like','%'.$this->search.'%'
        )
            ->get()
        ;
        return view('livewire.subscribers')->with([
            'subscriptores' => $subscribers]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PaginaLlegada extends Component
{

    public string $email = 'tu_email@email.com';

    protected array $rules = [
        'email' => 'required|email:filter|unique:subscribers,email'
    ];

    public function Subscribe(): void
    {

        $this->validate();

        DB::transaction(function () {
            $subscriber = Subscriber::create([
                'email' => $this->email
            ]);

            $notification = new VerifyEmail();
            $subscriber->notify($notification);
        }, $deadlockRetries = 5);


        $this->reset('email');
    }
    public function render()
    {
        return view('livewire.pagina-llegada');
    }
}

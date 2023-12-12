<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class PaginaLlegada extends Component
{

    public string $email = 'tu_email@email.com';
    public $showSubscribe = false;
    public $showSuccess = false;

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

            $notification::createUrlUsing( function ($notifiable){
                return URL::temporarySignedRoute(
                    'subscribers.verify',
                    now()->addMinutes(30),
                    [
                        'subscriber' => $notifiable->getKey()
                    ]
                );
            });

            $subscriber->notify($notification);
        }, $deadlockRetries = 5);


        $this->reset('email');

        $this->showSubscribe = false;
        $this->showSuccess = true;
    }
    public function render()
    {
        return view('livewire.pagina-llegada');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{

    public $title = "Dashboard";
    public function render()
    {
        return view('dashboard');
    }
}

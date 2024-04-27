<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class perfil extends Component
{
    public $user;
    public function __construct($auth)
    {
        $this->user=$auth;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.perfil');
    }
}

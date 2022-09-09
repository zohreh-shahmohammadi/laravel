<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewLivewire extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
             <h2>Thisi is New Livewire</h2>
            </div>
        blade;
    }
}
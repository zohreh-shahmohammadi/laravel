<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class TestExample extends Component
{
    public $name = "";
    public $family = "";
    public function mount($post)
    {
        $this->name = $post['name'];
        $this->family = $post['family'];
    }

    public function changename()
    {
        $this->name = "sara";
        $this->family = "salimi";
    }
    public function render()
    {
        return view('livewire.test.test-example');
    }
}
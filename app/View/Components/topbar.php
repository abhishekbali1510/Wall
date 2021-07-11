<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Http\Request;

class topbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public function __construct(Request $r)
    {
        $this->name=$r->session()->get('user'); 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.topbar');
    }
}

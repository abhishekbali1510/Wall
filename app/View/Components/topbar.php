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
        if($r->session()->get('user'))
        $this->name=$r->session()->get('user');  
        else
        $this->name="hey";
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

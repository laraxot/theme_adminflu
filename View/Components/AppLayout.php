<?php

namespace Themes\AdminFlu\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     
     */
    public function render():\Illuminate\Contracts\Support\Renderable
    {
        return view('layouts.app');
    }
}
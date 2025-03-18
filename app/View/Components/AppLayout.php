<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public $pageName;
    /**
     * Get the view / contents that represents the component.
     */
    public function __construct($pageName = null)
    {
        $this->pageName = $pageName;
    }

    public function render(): View
    {
        return view('layouts.app');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsiteFooter extends Component
{
    public $footer;
    
    /**
     * Create a new component instance.
     */
    public function __construct($footer)
    {
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website-footer');
    }
}

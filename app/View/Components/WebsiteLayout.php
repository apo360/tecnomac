<?php

namespace App\View\Components;

use Closure;
use App\Models\Website;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class WebsiteLayout extends Component
{

    public $headerData;
    public $footerData;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($headerData, $footerData)
    {
        $this->headerData = $headerData;
        $this->footerData = $footerData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website');
    }
}

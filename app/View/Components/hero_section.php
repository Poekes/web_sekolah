<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hero_section extends Component
{
    /**
     * Create a new component instance.
     */
    public $hero_content;
    public function __construct($hero_content = [])
    {
        $this->hero_content = $hero_content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero_section');
    }
}

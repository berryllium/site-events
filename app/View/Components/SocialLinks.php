<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SocialLinks extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected array $place,
        protected int $zoom = 1
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.social-links', [
            'place' => $this->place,
            'zoomClass' => 'fa-' . $this->zoom . 'x',
        ]);
    }
}

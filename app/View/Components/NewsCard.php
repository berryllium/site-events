<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class NewsCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected array $data,
        protected string $type,
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-card', [
            'img' => $this->data['main_picture'] ?? 'https://placehold.co/400',
            'text' => Str::of(strip_tags($this->data['text']))->limit(100),
            'date' => $this->data['date'],
            'id' => $this->data['id']
        ]);
    }
}

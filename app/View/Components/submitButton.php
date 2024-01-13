<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class submitButton extends Component
{

    public $text;
    public $iconClass;

    public function __construct($text, $iconClass)
    {
        $this->text = $text;
        $this->iconClass = $iconClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.submit-button');
    }
}

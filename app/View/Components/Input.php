<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $type;
    public $id;
    public $title;
    public $value;
    public $message;


    public function __construct($name, $type, $id, $title, $value, $message)
    {
        $this->name = $name;
        $this->type = $type;
        $this->id = $id;
        $this->title = $title;
        $this->value = $value;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}

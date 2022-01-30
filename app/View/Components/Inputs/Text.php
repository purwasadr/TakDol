<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Text extends Component
{

    public $name;

    public $label;

    public $errorMsg;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $errorMsg)
    {
        $this->name = $name;
        $this->label = $label;
        $this->errorMsg = $errorMsg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.text');
    }
}

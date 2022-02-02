<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Text extends Component
{

    public $name;
    public $label;
    public $id;
    public $autofocus;
    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $id = null, $autofocus = false, $required = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->id = $id;
        $this->autofocus = $autofocus;
        $this->required = $required;
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

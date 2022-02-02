<?php

namespace App\View\Components\Forms\Inputs;

use Illuminate\View\Component;

class Input extends Component
{

    public $name;
    public $label;
    public $id;
    public $autofocus;
    public $required;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $id = null, $autofocus = false, $required = false, $type)
    {
        $this->name = $name;
        $this->label = $label;
        $this->id = $id;
        $this->autofocus = $autofocus;
        $this->required = $required;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.inputs.input');
    }
}

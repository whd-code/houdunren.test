<?php

namespace App\View\Components;

use Illuminate\View\Component;

class form extends Component
{
    public $theme;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($theme="input")
    {
        $this->theme=$theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.' . $this->theme);
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class item extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $img;
    public $title;
    public $describe;
    public function __construct($img,$title,$describe)
    {
        //
        $this->img=$img;
        $this->title=$title;
        $this->describe=$describe;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.item');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class page2 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $describe;
    public $image;
    public $order;
    public function __construct($title,$describe,$image,$order)
    {
        //
        $this->title = $title;
        $this->describe = $describe;
        $this->image = $image;
        $this->order = $order;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.page2');
    }
}

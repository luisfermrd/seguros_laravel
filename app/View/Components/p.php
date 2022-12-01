<?php

namespace App\View\Components;

use Illuminate\View\Component;

class p extends Component
{
    public $clases;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'default')
    {
        switch ($color) {
            case 'default':
                $clases = "text-white bg-blue-700 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2";
                break;
            case 'dark':
                $clases = "text-white bg-gray-800 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2";
                break;
            case 'light':
                $clases = "text-gray-900 bg-white border border-gray-300  font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2";
                break;
            case 'green':
                $clases = "text-white bg-green-700 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2";
                break;
            case 'red':
                $clases = "text-white bg-red-700 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2";
                break;
            case 'yellow':
                $clases = "text-white bg-yellow-400 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2";
                break;
            default:
                $clases = "text-white bg-blue-700 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2";
                break;
        }

        $this->clases = $clases;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.p');
    }
}

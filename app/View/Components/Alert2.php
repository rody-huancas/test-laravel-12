<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $class;

    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
                $class = 'text-blue-800 bg-blu-50 dark:bg-gray-800 dark:text-blue-400';
                break;
            case 'danger':
                $class = 'text-red-800 bg-blu-50 dark:bg-gray-800 dark:text-red-400';
                break;
            case 'success':
                $class = 'text-green-800 bg-blu-50 dark:bg-gray-800 dark:text-green-400';
                break;
            case 'warning':
                $class = 'text-yellow-800 bg-blu-50 dark:bg-gray-800 dark:text-yellow-400';
                break;
            case 'dark':
                $class = 'text-gray-800 bg-blu-50 dark:bg-gray-800 dark:text-gray-400';
                break;
            default:
                $class = 'text-blue-800 bg-blu-50 dark:bg-gray-800 dark:text-blue-400';
                break;
        }

        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.Alert2');
    }
}

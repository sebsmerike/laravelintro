<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alertclass extends Component
{
    // Definir variables para que la vista pueda acceder a ellas
    public $class;

    /**
     * Se llama cuando se crea el componente y luego se renderiza
     */
    public function __construct($type='info') // Variables que se reciben
    {
        // Lógica

        switch ($type) {
            case 'info':
                $class = "text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800";
                break;
            
            case 'danger':
                $class = "text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800";
                break;
            
            case 'success':
                $class = "text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800";
                break;
            
            case 'warning':
                $class = "text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800";
                break;
            
            case 'dark':
            default:
                $class = "text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600";
                break;
        }

        $this->class = $class; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alertclass');
    }
}

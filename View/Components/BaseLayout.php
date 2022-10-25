<?php

declare(strict_types=1);

namespace Themes\AdminFlu\View\Components;

use Illuminate\View\Component;

class BaseLayout extends Component {
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        /**
         * @phpstan-var view-string
         */
        $view = 'layouts.base';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}

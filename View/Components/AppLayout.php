<?php

declare(strict_types=1);

namespace Themes\AdminFlu\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component {
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): \Illuminate\Contracts\Support\Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = 'layouts.app';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}

<?php

declare(strict_types=1);

namespace Themes\AdminFlu\View\Composers;

use Illuminate\View\View;
use Modules\Theme\View\Composers\XotBaseComposer;

/**
 * Undocumented class.
 */
class ThemeComposer extends XotBaseComposer {
    /**
     * Undocumented function.
     */
    public function __construct() {
    }

    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view) {
        $view->with('_theme', $this);
    }
}

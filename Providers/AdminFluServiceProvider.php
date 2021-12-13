<?php

declare(strict_types=1);

namespace Themes\AdminFlu\Providers;

use Modules\Xot\Providers\XotBaseThemeServiceProvider;

/**
 * Undocumented class.
 */
class AdminFluServiceProvider extends XotBaseThemeServiceProvider {
    public string $dir = __DIR__;
    public string $name = 'AdminFlu';
    public string $ns = 'adm_theme';
}

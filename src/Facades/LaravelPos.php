<?php

namespace LaravelPos\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class LaravelPos
 * @package LaravelPos\Facades
 */
class LaravelPos extends Facade {

    protected static function getFacadeAccessor() { return 'laravelpos'; }

}

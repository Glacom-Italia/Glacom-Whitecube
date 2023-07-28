<?php

namespace Glacom\NovaFlexibleContent\Layouts;

use Glacom\NovaFlexibleContent\Flexible;

abstract class Preset
{
    /**
     * Execute the preset configuration
     *
     * @return void
     */
    abstract public function handle(Flexible $field);
}

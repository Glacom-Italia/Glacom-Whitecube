<?php

namespace Glacom\NovaFlexibleContent\Value;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Glacom\NovaFlexibleContent\Concerns\HasFlexible;

class FlexibleCast implements CastsAttributes
{
    use HasFlexible;

    /**
     * @var array
     */
    protected $layouts = [];

    /**
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * @return \Glacom\NovaFlexibleContent\Layouts\Collection|array<\Glacom\NovaFlexibleContent\Layouts\Layout>
     */
    public function get($model, string $key, $value, array $attributes)
    {
        $this->model = $model;

        return $this->cast($value, $this->getLayoutMapping());
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value;
    }

    protected function getLayoutMapping()
    {
        return $this->layouts;
    }
}

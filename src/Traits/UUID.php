<?php

namespace WebDevRus\Laravel;

use Illuminate\Support\Str;

trait UUID
{
    /**
     * @return void
     */
    protected static function bootUUID(): void
    {
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Str::uuid()->toString();
        });
    }

    /**
     * @return string
     */
    public function getKeyName(): string
    {
        return 'uuid';
    }
    
    /**
     * @return string
     */
    public function getKeyType(): string
    {
        return 'string';
    }

    /**
     * @return boolean
     */
    public function getIncrementing(): bool
    {
        return false;
    }

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return $this->getKeyName();
    }
}

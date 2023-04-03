<?php

declare(strict_types=1);

namespace Database\Factories;

/**
 * @template TModel of \Illuminate\Database\Eloquent\Model
 *
 * @mixin \Illuminate\Database\Eloquent\Factories\Factory<TModel>
 *
 * @property TModel $model
 */
class FactoryMacros
{
    /**
     * @param  array<model-property<TModel>, mixed>  $attributes
<<<<<<< HEAD
     * @return \Closure(array<model-property<TModel>, mixed>, array<model-property<TModel>, mixed>):TModel
     */
    public function firstOrCreate(array $attributes = []): \Closure
    {
        return function (array $attributes = [], array $values = []): \Illuminate\Database\Eloquent\Model {
            if ($instance = $this->model::where($attributes)->first()) {
                return $instance;
            }

            return $this->create($attributes);
        };
    }

    /**
     * @param  array<model-property<TModel>, mixed>  $attributes
=======
>>>>>>> 007776b (Add a test to reproduce issue #1591)
     * @param  array<model-property<TModel>, mixed>  $values
     * @return \Closure(array<model-property<TModel>, mixed>, array<model-property<TModel>, mixed>):TModel
     */
    public function updateOrCreate(array $attributes = [], array $values = []): \Closure
    {
        return function (array $attributes = [], array $values = []) {
            if ($instance = $this->model::where($attributes)->first()) {
                $instance->update($values);

                return $instance;
            }

            return $this->create(array_merge($attributes, $values));
        };
    }
}

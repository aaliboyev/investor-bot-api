<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

final class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name'           => 'Abror Aliboyev',
            'email'          => 'aaliboyev@bk.ru',
            'password'       => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * @param  array $attributes
     * @return \Illuminate\Database\Eloquent\Model|\App\Models\User
     */
    public function createOne($attributes = [])
    {
        return parent::createOne($attributes);
    }
}

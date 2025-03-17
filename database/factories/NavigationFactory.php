<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Navigation>
 */
class NavigationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => [
                ['url' => '/', 'name' => 'Homepage', 'target' => '_self', 'is_active' => true],
                ['url' => '/blog', 'name' => 'Notes <div class="notify"></div>', 'target' => '_self', 'is_active' => true],
                ['url' => '/docs', 'name' => 'Docs', 'target' => '_self', 'is_active' => true],
                ['url' => 'https://github.com/mviniciusca/warriorfolio', 'name' => 'Github', 'target' => '_blank', 'is_active' => true],
            ],
        ];
    }
}

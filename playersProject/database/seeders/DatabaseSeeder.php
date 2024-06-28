<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jogador;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /*  \App\Models\User::factory()->create([
            'name' => 'Test User',
             'email' => 'test@example.com',
        ]); */

        Jogador::create(
            [
                'nome' => 'Marco',
                'valor' => '100.000',
                'status' => 'Ativo',
                'pais' => 'Brasil',
                'posicao' => 'Centro-Avante',
                'clube' => 'Flamengo',
            ]
        );
    }
}

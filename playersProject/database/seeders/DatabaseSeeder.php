<?php

namespace Database\Seeders;

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

        Jogador::create([
            'nome' => 'Marco',
            'valor' => '100.000',
            'status' => 'Ativo',
            'pais' => 'Brasil',
            'posicao' => 'Centro-Avante',
            'clube' => 'Flamengo',
        ]);

        Jogador::create([
            'nome' => 'Carlos',
            'valor' => '200.000',
            'status' => 'Ativo',
            'pais' => 'Argentina',
            'posicao' => 'Meia',
            'clube' => 'River Plate',
        ]);

        Jogador::create([
            'nome' => 'Luis',
            'valor' => '300.000',
            'status' => 'Inativo',
            'pais' => 'Uruguai',
            'posicao' => 'Zagueiro',
            'clube' => 'Nacional',
        ]);

        Jogador::create([
            'nome' => 'Pedro',
            'valor' => '150.000',
            'status' => 'Ativo',
            'pais' => 'Portugal',
            'posicao' => 'Atacante',
            'clube' => 'Benfica',
        ]);

        Jogador::create([
            'nome' => 'Jorge',
            'valor' => '250.000',
            'status' => 'Ativo',
            'pais' => 'Espanha',
            'posicao' => 'Goleiro',
            'clube' => 'Barcelona',
        ]);

        Jogador::create([
            'nome' => 'Ricardo',
            'valor' => '180.000',
            'status' => 'Ativo',
            'pais' => 'Brasil',
            'posicao' => 'Lateral',
            'clube' => 'São Paulo',
        ]);

        Jogador::create([
            'nome' => 'Miguel',
            'valor' => '220.000',
            'status' => 'Inativo',
            'pais' => 'Chile',
            'posicao' => 'Meia',
            'clube' => 'Colo-Colo',
        ]);

        Jogador::create([
            'nome' => 'Roberto',
            'valor' => '270.000',
            'status' => 'Ativo',
            'pais' => 'Itália',
            'posicao' => 'Atacante',
            'clube' => 'Juventus',
        ]);

        Jogador::create([
            'nome' => 'Andrés',
            'valor' => '190.000',
            'status' => 'Ativo',
            'pais' => 'Colômbia',
            'posicao' => 'Zagueiro',
            'clube' => 'Atlético Nacional',
        ]);

        Jogador::create([
            'nome' => 'Gabriel',
            'valor' => '210.000',
            'status' => 'Ativo',
            'pais' => 'Brasil',
            'posicao' => 'Centro-Avante',
            'clube' => 'Palmeiras',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class ClientesTableSeeder extends Seeder
{
    /**
     * A função run é uma função é executada quando você executa o comando php artisan db:seed. 
     * Nesse caso, a função cria 10 usuários falsos no banco de dados usando o pacote Faker para gerar nomes e endereços de email aleatórios.
     * O hash da senha “senha123” é gerado usando a função bcrypt. 
     * Função insere os usuários falsos no banco de dados usando o método insert do Query Builder
     * Comando para executar a função no terminal : 
     * php artisan db:seed --class=ClientesTableSeeder
     */
    
    public function run(): void
    {
        foreach (range(1, 10) as $index) {
            DB::table('cliente')->insert([
                'nm_cliente' => $faker->name
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\messages;

class messagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Messages::create([
            'titulo' => 'Mensagem de Teste 1',
            'texto' => 'Essa é apenas uma mensagem de teste para o seeder.',
            'autor' => 'Emilia'
        ]);

        Messages::create([
            'titulo' => 'Mensagem de Teste 2',
            'texto' => 'Essa é apenas uma mensagem de teste para o seeder.',
            'autor' => 'Emilia'
        ]);
    }
}

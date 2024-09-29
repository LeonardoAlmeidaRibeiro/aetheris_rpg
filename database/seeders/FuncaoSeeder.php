<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            DB::table('cad_bas_funcao')->insert([
                'id' => 1,
                'nome' => 'ATIRADOR',
                'vida' => 55,
                'ataque' => 8,
                'alcance' => 8,
                'tipo' => 'longo alcance',
                'defesa' => 6,
                'movimento' => 5,
                'descricao' => 'Um atirador é um atacante à distância que sacrifica poder de defesa e versatilidade para focar em danos maciços e contínuos em alvos individuais.',
                'passiva' => 'Precisão',
                'gatilho' => 'jdhasdkhaskjdhaskdhasd',
                'resposta' => 'asdjklasdjklasdjaslkdasjdlkasjjkd aksdjlaskdjklas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

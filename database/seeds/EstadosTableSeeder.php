<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Alimenta uma schema de estados
     * @author Cesar André (https://github.com/cesar-andre)
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert(['UF' => 'AC', 'nome' => 'ACRE', 'id' => 12]);
        DB::table('estados')->insert(['UF' => 'AL', 'nome' => 'ALAGOAS', 'id' => 27]);
        DB::table('estados')->insert(['UF' => 'AM', 'nome' => 'AMAZONAS', 'id' => 13]);
        DB::table('estados')->insert(['UF' => 'AP', 'nome' => 'AMAPÁ', 'id' => 16]);
        DB::table('estados')->insert(['UF' => 'BA', 'nome' => 'BAHIA', 'id' => 29]);
        DB::table('estados')->insert(['UF' => 'CE', 'nome' => 'CEARÁ', 'id' => 23]);
        DB::table('estados')->insert(['UF' => 'DF', 'nome' => 'DISTRITO FEDERAL', 'id' => 53]);
        DB::table('estados')->insert(['UF' => 'ES', 'nome' => 'ESPÍRITO SANTO', 'id' => 32]);
        DB::table('estados')->insert(['UF' => 'GO', 'nome' => 'GOIÁS', 'id' => 52]);
        DB::table('estados')->insert(['UF' => 'MA', 'nome' => 'MARANHÃO', 'id' => 21]);
        DB::table('estados')->insert(['UF' => 'MG', 'nome' => 'MINAS GERAIS', 'id' => 31]);
        DB::table('estados')->insert(['UF' => 'MS', 'nome' => 'MATO GROSSO DO SUL', 'id' => 50]);
        DB::table('estados')->insert(['UF' => 'MT', 'nome' => 'MATO GROSSO', 'id' => 51]);
        DB::table('estados')->insert(['UF' => 'PA', 'nome' => 'PARÁ', 'id' => 15]);
        DB::table('estados')->insert(['UF' => 'PB', 'nome' => 'PARAIBA', 'id' => 25]);
        DB::table('estados')->insert(['UF' => 'PE', 'nome' => 'PERNAMBUCO', 'id' => 26]);
        DB::table('estados')->insert(['UF' => 'PI', 'nome' => 'PIAUÍ', 'id' => 22]);
        DB::table('estados')->insert(['UF' => 'PR', 'nome' => 'PARANÁ', 'id' => 41]);
        DB::table('estados')->insert(['UF' => 'RJ', 'nome' => 'RIO DE JANEIRO', 'id' => 33]);
        DB::table('estados')->insert(['UF' => 'RN', 'nome' => 'RIO GRANDE DO NORTE', 'id' => 24]);
        DB::table('estados')->insert(['UF' => 'RO', 'nome' => 'RONDÔNIA', 'id' => 11]);
        DB::table('estados')->insert(['UF' => 'RR', 'nome' => 'RORAIMA', 'id' => 14]);
        DB::table('estados')->insert(['UF' => 'RS', 'nome' => 'RIO GRANDE DO SUL', 'id' => 43]);
        DB::table('estados')->insert(['UF' => 'SC', 'nome' => 'SANTA CATARINA', 'id' => 42]);
        DB::table('estados')->insert(['UF' => 'SE', 'nome' => 'SERGIPE', 'id' => 28]);
        DB::table('estados')->insert(['UF' => 'SP', 'nome' => 'SÃO PAULO', 'id' => 35]);
        DB::table('estados')->insert(['UF' => 'TO', 'nome' => 'TOCANTINS','id' =>  17]);
    }
}

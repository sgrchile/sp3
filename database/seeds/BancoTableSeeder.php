<?php

use Illuminate\Database\Seeder;

class BancoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\Banco::create([ 'BCO_DESC' => 'BANCO DE CHILE']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO INTERNACIONAL']);
      App\Banco::create([ 'BCO_DESC' => 'SCOTIABANK CHILE']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO DE CREDITO E INVERSIONES']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO BICE']);
      App\Banco::create([ 'BCO_DESC' => 'HSBC BANK']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO SANTANDER-CHILE']);
      App\Banco::create([ 'BCO_DESC' => 'ITAÚ CORPBANCA']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO SECURITY']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO FALABELLA']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO RIPLEY']);
      App\Banco::create([ 'BCO_DESC' => 'RABOBANK CHILE']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO CONSORCIO']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO PENTA']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO BBVA']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO BTG PACTUAL CHILE']);
      App\Banco::create([ 'BCO_DESC' => 'BANCO DEL ESTADO DE CHILE']);
    }
}

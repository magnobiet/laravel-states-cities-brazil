<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = date("Y-m-d H:i:s");

        DB::table("states")->insert([
            [
                "id"         => 11,
                "name"       => "Rondônia",
                "abbr"       => "RO",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 12,
                "name"       => "Acre",
                "abbr"       => "AC",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 13,
                "name"       => "Amazonas",
                "abbr"       => "AM",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 14,
                "name"       => "Roraima",
                "abbr"       => "RR",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 15,
                "name"       => "Pará",
                "abbr"       => "PA",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 16,
                "name"       => "Amapá",
                "abbr"       => "AP",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 17,
                "name"       => "Tocantins",
                "abbr"       => "TO",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 21,
                "name"       => "Maranhão",
                "abbr"       => "MA",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 22,
                "name"       => "Piauí",
                "abbr"       => "PI",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 23,
                "name"       => "Ceará",
                "abbr"       => "CE",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 24,
                "name"       => "Rio Grande do Norte",
                "abbr"       => "RN",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 25,
                "name"       => "Paraíba",
                "abbr"       => "PB",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 26,
                "name"       => "Pernambuco",
                "abbr"       => "PE",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 27,
                "name"       => "Alagoas",
                "abbr"       => "AL",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 28,
                "name"       => "Sergipe",
                "abbr"       => "SE",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 29,
                "name"       => "Bahia",
                "abbr"       => "BA",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 31,
                "name"       => "Minas Gerais",
                "abbr"       => "MG",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 32,
                "name"       => "Espírito Santo",
                "abbr"       => "ES",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 33,
                "name"       => "Rio de Janeiro",
                "abbr"       => "RJ",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 35,
                "name"       => "São Paulo",
                "abbr"       => "SP",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 41,
                "name"       => "Paraná",
                "abbr"       => "PR",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 42,
                "name"       => "Santa Catarina",
                "abbr"       => "SC",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 43,
                "name"       => "Rio Grande do Sul",
                "abbr"       => "RS",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 50,
                "name"       => "Mato Grosso do Sul",
                "abbr"       => "MS",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 51,
                "name"       => "Mato Grosso",
                "abbr"       => "MT",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 52,
                "name"       => "Goiás",
                "abbr"       => "GO",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 53,
                "name"       => "Distrito Federal",
                "abbr"       => "DF",
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);

    }

}

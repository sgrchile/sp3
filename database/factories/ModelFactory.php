<?php

$factory->define(App\Proveedor::class, function (Faker\Generator $faker) {
    $gender = (string) $faker->randomElement(['male', 'female']);

    return [
        'PRO_RUN'    => '16512070-5',
        'PRO_NOMBRE' => 'Juan',
        'PRO_APE_PAT' => 'Perez',
        'PRO_APE_MAT' => 'Rozalez',
        'PRO_SEXO' => 'HOMBRE',
        'PRO_DIRECCION' => $faker->streetAddress,
        'PRO_NACIONALIDAD' => 'Chilena',
        'PRO_SEG_MED' => $faker->word,
        'PRO_AFP' => $faker->word,
        'PRO_N_CUENTA' => $faker->creditCardNumber,
        'PRO_RAZON_SOCIAL' => $faker->jobTitle,
        'PRO_TEL' => $faker->phoneNumber,
        'PRO_CELULAR' => $faker->phoneNumber,
        'PRO_FECHA_PAGO' => $faker->dateTime,
        'PRO_FECHA_NAC' => $faker->dateTime,
        'PRO_CONTACTO_SECUNDARIO' => $faker->phoneNumber,
        'PRO_PAGINA_WEB' => $faker->domainName,
        'PRO_FACEBOOK' => $faker->userName,
        'PRO_EMAIL' => $faker->safeEmail,
        'PRO_GIRO' => $faker->jobTitle,
        'password' => bcrypt("12345"),
        'PRO_REFERENCIA' => $faker->paragraph,
        'PRO_CONTRATO' => $faker->paragraph,
        'PRO_CAR_ID'        => '37',
        'PRO_RUBRO'         => 'CONSTRUCCIÓN',
        'PRO_SUBRUBRO'      => 'CONSTRUCCIÓN',
        'PRO_EMP'           => '1',
        'PRO_ESTADO_PERSONAL' => '1',
        'PRO_TP_COD'          => '1',
        'PRO_BCO_ID'          => '1',
        'PRO_TCTA_BCO'        => '1',
        'PRO_PAI_COD'         => '1',
        'PRO_REG_COD'         => App\Region::all()->random()->REG_COD,
        'PRO_PV_COD'          => App\Provincia::all()->random()->PV_COD,
        'PRO_CIU_COD'         => App\Ciudad::all()->random()->CIU_COD,
    ];
});

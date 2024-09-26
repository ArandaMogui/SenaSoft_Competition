<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListaOpcionesSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('listaopciones')->insert([
            ['variable' => 'TipoResultado', 'descripcion' => 'Tipos de resultado para laboratorio clínico', 'valor' => 1, 'nombre' => 'Numérico', 'abreviacion' => '', 'habilita' => true],
            ['variable' => 'TipoResultado', 'descripcion' => 'Tipos de resultado para laboratorio clínico', 'valor' => 2, 'nombre' => 'Texto', 'abreviacion' => '', 'habilita' => true],
            ['variable' => 'TipoResultado', 'descripcion' => 'Tipos de resultado para laboratorio clínico', 'valor' => 3, 'nombre' => 'Opción múltiple con múltiple respuesta', 'abreviacion' => '', 'habilita' => false],
            ['variable' => 'TipoResultado', 'descripcion' => 'Tipos de resultado para laboratorio clínico', 'valor' => 4, 'nombre' => 'Texto largo', 'abreviacion' => '', 'habilita' => true],
        ]);

        DB::table('listaopciones')->insert([
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 1, 'nombre' => 'Cédula de ciudadanía', 'abreviacion' => 'CC', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 2, 'nombre' => 'Tarjeta de identidad', 'abreviacion' => 'TI', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 3, 'nombre' => 'Cédula de extranjería', 'abreviacion' => 'CE', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 4, 'nombre' => 'Registro civil', 'abreviacion' => 'RC', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 5, 'nombre' => 'Pasaporte', 'abreviacion' => 'PA', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 6, 'nombre' => 'Adulto sin identificación', 'abreviacion' => 'AS', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 7, 'nombre' => 'Menor sin identificación', 'abreviacion' => 'MS', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 8, 'nombre' => 'Número único de identificación', 'abreviacion' => 'NU', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 9, 'nombre' => 'Certificado de nacido vivo', 'abreviacion' => 'NV', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 10, 'nombre' => 'Salvoconducto', 'abreviacion' => 'SC', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 11, 'nombre' => 'Nit', 'abreviacion' => 'NIT', 'habilita' => false],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 12, 'nombre' => 'Carnet diplomático', 'abreviacion' => 'CD', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 13, 'nombre' => 'Permiso especial de permanencia', 'abreviacion' => 'PE', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 14, 'nombre' => 'Residente especial para la paz', 'abreviacion' => 'RE', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 15, 'nombre' => 'Permiso por protección temporal', 'abreviacion' => 'PT', 'habilita' => true],
            ['variable' => 'TipoIdentificacion', 'descripcion' => 'Tipos de identificación de personas', 'valor' => 16, 'nombre' => 'Documento extranjero', 'abreviacion' => 'DE', 'habilita' => true],
        ]);

        DB::table('listaopciones')->insert([
            ['variable' => 'RegSegSocial', 'descripcion' => 'Regímenes de seguridad social', 'valor' => 1, 'nombre' => 'Particular', 'abreviacion' => '', 'habilita' => true],
            ['variable' => 'RegSegSocial', 'descripcion' => 'Regímenes de seguridad social', 'valor' => 2, 'nombre' => 'Contributivo', 'abreviacion' => '', 'habilita' => true],
            ['variable' => 'RegSegSocial', 'descripcion' => 'Regímenes de seguridad social', 'valor' => 3, 'nombre' => 'Subsidiado', 'abreviacion' => '', 'habilita' => true],
            ['variable' => 'RegSegSocial', 'descripcion' => 'Regímenes de seguridad social', 'valor' => 4, 'nombre' => 'No asegurado', 'abreviacion' => '', 'habilita' => true],
            ['variable' => 'RegSegSocial', 'descripcion' => 'Regímenes de seguridad social', 'valor' => 5, 'nombre' => 'Otro régimen', 'abreviacion' => '', 'habilita' => true],
            ['variable' => 'RegSegSocial', 'descripcion' => 'Regímenes de seguridad social', 'valor' => 6, 'nombre' => 'Accidente de tránsito / ECAT', 'abreviacion' => '', 'habilita' => true],
            ['variable' => 'RegSegSocial', 'descripcion' => 'Regímenes de seguridad social', 'valor' => 7, 'nombre' => 'Riesgo laboral', 'abreviacion' => '', 'habilita' => true],
            ['variable' => 'RegSegSocial', 'descripcion' => 'Regímenes de seguridad social', 'valor' => 8, 'nombre' => 'Desplazado', 'abreviacion' => '', 'habilita' => true],
        ]);

        DB::table('listaopciones')->insert([
            ['variable' => 'SexoBiologico', 'descripcion' => 'Sexo biológico al nacer', 'valor' => 1, 'nombre' => 'Masculino', 'abreviacion' => 'M', 'habilita' => true],
            ['variable' => 'SexoBiologico', 'descripcion' => 'Sexo biológico al nacer', 'valor' => 2, 'nombre' => 'Femenino', 'abreviacion' => 'F', 'habilita' => true],
        ]);

        DB::table('listaopciones')->insert([
            ['variable' => 'TipoProf', 'descripcion' => 'Tipo de profesional', 'valor' => 1, 'nombre' => 'Médico especialista', 'abreviacion' => '1', 'habilita' => true],
            ['variable' => 'TipoProf', 'descripcion' => 'Tipo de profesional', 'valor' => 2, 'nombre' => 'Médico general', 'abreviacion' => '2', 'habilita' => true],
            ['variable' => 'TipoProf', 'descripcion' => 'Tipo de profesional', 'valor' => 3, 'nombre' => 'Enfermera', 'abreviacion' => '3', 'habilita' => true],
            ['variable' => 'TipoProf', 'descripcion' => 'Tipo de profesional', 'valor' => 4, 'nombre' => 'Auxiliar de enfermería', 'abreviacion' => '4', 'habilita' => true],
            ['variable' => 'TipoProf', 'descripcion' => 'Tipo de profesional', 'valor' => 5, 'nombre' => 'Otro', 'abreviacion' => '5', 'habilita' => true],
        ]);
    }
}
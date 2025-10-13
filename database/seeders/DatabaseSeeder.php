<?php

namespace Database\Seeders;

use App\Models\Configuracion;
use App\Models\Gestion;
use App\Models\Grado;
use App\Models\Materia;
use App\Models\Nivel;
use App\Models\Paralelo;
use App\Models\Periodo;
use App\Models\Turno;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(RoleSeeder::class);

        User::create([
            'name' => 'Alan',
            'email' => 'alan@admin.com',
            'password' => Hash::make('12345678'),
        ])->assignRole('ADMINISTRADOR');

        Configuracion::create([
            'nombre' => 'Institución Educativa',
            'descripcion' => 'Descripción de la institución',
            'direccion' => 'cuahutemoc 38 agricola ignacio aragoza',
            'telefono' => '2219751770',
            'divisa' => 'USD',
            'correo_electronico' => 'info@institucion.edu',
            'web' => 'www.institucion.edu',
            'logo' => 'uploads/logos/1759285204_Captura de pantalla 2025-09-20 184710.png',
            ]);

            Gestion::create(['nombre' => '2024',]);
            Gestion::create(['nombre' => '2025',]);
            Gestion::create(['nombre' => '2026',]);
            Gestion::create(['nombre' => '2027',]);
            Gestion::create(['nombre' => '2028',]);

            Periodo::create(['nombre' => '1er trimestre','gestion_id' => 1,]);
            Periodo::create(['nombre' => '1er trimestre','gestion_id' => 2,]);
            Periodo::create(['nombre' => '1er trimestre','gestion_id' => 3,]);
            Periodo::create(['nombre' => '1er trimestre','gestion_id' => 4,]);
            Periodo::create(['nombre' => '1er trimestre','gestion_id' => 5,]);
            Periodo::create(['nombre' => '2do trimestre','gestion_id' => 1,]);
            Periodo::create(['nombre' => '2do trimestre','gestion_id' => 2,]);
            Periodo::create(['nombre' => '2do trimestre','gestion_id' => 3,]);
            Periodo::create(['nombre' => '2do trimestre','gestion_id' => 4,]);
            Periodo::create(['nombre' => '2do trimestre','gestion_id' => 5,]);
            Periodo::create(['nombre' => '3er trimestre','gestion_id' => 1,]);
            Periodo::create(['nombre' => '3er trimestre','gestion_id' => 2,]);
            Periodo::create(['nombre' => '3er trimestre','gestion_id' => 3,]);
            Periodo::create(['nombre' => '3er trimestre','gestion_id' => 4,]);
            Periodo::create(['nombre' => '3er trimestre','gestion_id' => 5,]);

            Nivel::create(['nombre' => 'INICIAL',]);
            Nivel::create(['nombre' => 'PRIMARIA',]);
            Nivel::create(['nombre' => 'SECUNDARIA',]);
            Nivel::create(['nombre' => 'PREPARATORIA',]);
            Nivel::create(['nombre' => 'UNIVERSIDAD',]);

            Grado::create(['nombre' => '1ro INICIAL', 'nivel_id' => 1,]);
            Grado::create(['nombre' => '2do INICIAL', 'nivel_id' => 1,]);
            Grado::create(['nombre' => '1ro PRIMARIA', 'nivel_id' => 2,]);
            Grado::create(['nombre' => '2do PRIMARIA', 'nivel_id' => 2,]);
            Grado::create(['nombre' => '1ro SECUNDARIA', 'nivel_id' => 3,]);
            Grado::create(['nombre' => '2do SECUNDARIA', 'nivel_id' => 3,]);
            Grado::create(['nombre' => '3ro SECUNDARIA', 'nivel_id' => 3,]);
            Grado::create(['nombre' => '1ro PREPARATORIA', 'nivel_id' => 4,]);
            Grado::create(['nombre' => '2do PREPARATORIA', 'nivel_id' => 4,]);
            Grado::create(['nombre' => '3ro PREPARATORIA', 'nivel_id' => 4,]);
            Grado::create(['nombre' => '1ro UNIVERSIDAD', 'nivel_id' => 5,]);
            Grado::create(['nombre' => '2do UNIVERSIDAD', 'nivel_id' => 5,]);
            Grado::create(['nombre' => '3ro UNIVERSIDAD', 'nivel_id' => 5,]);

            Paralelo::create(['nombre' => 'A','grado_id' => 1,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 1,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 2,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 2,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 3,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 3,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 4,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 4,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 5,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 5,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 6,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 6,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 7,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 7,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 8,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 8,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 9,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 9,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 10,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 10,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 11,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 11,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 12,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 12,]);
            Paralelo::create(['nombre' => 'A','grado_id' => 13,]);
            Paralelo::create(['nombre' => 'B','grado_id' => 13,]);

            Turno::create(['nombre' => 'Mañana',]);
            Turno::create(['nombre' => 'Tarde',]);
            Turno::create(['nombre' => 'Noche',]);

            Materia::create(['nombre' => 'Matemáticas',]);
            Materia::create(['nombre' => 'Lengua y Literatura',]);
            Materia::create(['nombre' => 'Ciencias Sociales',]);
            Materia::create(['nombre' => 'Ciencias Naturales',]);
            Materia::create(['nombre' => 'Educación Física',]);
            Materia::create(['nombre' => 'Inglés',]);
            Materia::create(['nombre' => 'Arte',]);
            Materia::create(['nombre' => 'Música',]);
            Materia::create(['nombre' => 'Historia',]);
            Materia::create(['nombre' => 'Geografía',]);
            Materia::create(['nombre' => 'Biología',]);
            Materia::create(['nombre' => 'Química',]);
            Materia::create(['nombre' => 'Física',]);
            Materia::create(['nombre' => 'Educación Cívica',]);
            Materia::create(['nombre' => 'Tecnología',]);

            
    }
}

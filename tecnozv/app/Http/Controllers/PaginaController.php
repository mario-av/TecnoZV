<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    private function getPisosData()
    {
return [
            [
                'id' => 1,
                'nombre' => 'Ático de Lujo en el Realejo',
                'direccion' => 'Calle Realejo Alto, 5',
                'precio' => 350000,
                'metros' => 110,
                'habitaciones' => 3,
                'descripcion' => 'Impresionante ático con terraza privada y vistas a la Alhambra. Totalmente reformado con materiales de alta calidad. Zona tranquila y céntrica.'
            ],
            [
                'id' => 2,
                'nombre' => 'Piso Familiar en Zaidín',
                'direccion' => 'Avenida de Dilar, 150',
                'precio' => 145000,
                'metros' => 95,
                'habitaciones' => 4,
                'descripcion' => 'Amplio piso ideal para familias, cerca de colegios y centros de salud. Buena conexión de transporte público y luminoso.'
            ],
            [
                'id' => 3,
                'nombre' => 'Estudio Moderno junto a la Catedral',
                'direccion' => 'Calle Cárcel Baja, 12',
                'precio' => 130000,
                'metros' => 40,
                'habitaciones' => 1,
                'descripcion' => 'Estudio tipo loft ideal para inversión o primera vivienda. Totalmente amueblado y listo para entrar. A pocos metros del centro histórico.'
            ],
            [
                'id' => 4,
                'nombre' => 'Casa Adosada con Jardín en Armilla',
                'direccion' => 'Calle Madrid, 7',
                'precio' => 220000,
                'metros' => 180,
                'habitaciones' => 5,
                'descripcion' => 'Espaciosa casa adosada de tres plantas con jardín privado. Ubicada en una zona residencial tranquila de Armilla, con buen acceso a la autovía.'
            ],
            [
                'id' => 5,
                'nombre' => 'Apartamento Turístico en Albayzín',
                'direccion' => 'Cuesta del Chapiz, 3',
                'precio' => 195000,
                'metros' => 55,
                'habitaciones' => 2,
                'descripcion' => 'Encantador apartamento con el típico sabor del Albayzín. Ideal para alquiler turístico de alta rentabilidad. Vistas espectaculares garantizadas.'
            ],
            [
                'id' => 6,
                'nombre' => 'Vivienda Reformada en Chana',
                'direccion' => 'Avenida de Andalucía, 45',
                'precio' => 115000,
                'metros' => 70,
                'habitaciones' => 2,
                'descripcion' => 'Piso con reforma integral reciente. Electricidad y fontanería nuevas. Cerca de la estación de tren y zonas comerciales.'
            ],
            [
                'id' => 7,
                'nombre' => 'Chalet Independiente en Monachil',
                'direccion' => 'Calle Sierra Nevada, 14',
                'precio' => 480000,
                'metros' => 250,
                'habitaciones' => 6,
                'descripcion' => 'Lujoso chalet con piscina y amplios terrenos. Entorno natural inigualable, perfecto para amantes de la tranquilidad y la montaña.'
            ],
            [
                'id' => 8,
                'nombre' => 'Piso Luminoso en Ronda',
                'direccion' => 'Camino de Ronda, 120',
                'precio' => 240000,
                'metros' => 105,
                'habitaciones' => 3,
                'descripcion' => 'Octava planta con mucha luz natural y vistas despejadas. Calefacción central y servicios de portería. Garaje opcional.'
            ],
            [
                'id' => 9,
                'nombre' => 'Loft en el Parque Tecnológico (PTS)',
                'direccion' => 'Avenida de la Innovación, 2',
                'precio' => 165000,
                'metros' => 65,
                'habitaciones' => 1,
                'descripcion' => 'Moderno loft en una de las zonas de mayor crecimiento de Granada. Ideal para profesionales o estudiantes de medicina. Edificio nuevo.'
            ],
            [
                'id' => 10,
                'nombre' => 'Piso con Encanto en Plaza Nueva',
                'direccion' => 'Carrera del Darro, 8',
                'precio' => 280000,
                'metros' => 80,
                'habitaciones' => 2,
                'descripcion' => 'Vivienda histórica con balcones a la Carrera del Darro. Una joya en el corazón de Granada. Requiere pequeña actualización.'
            ],
            [
                'id' => 11,
                'nombre' => 'Apartamento en la Costa Tropical (Almuñécar)',
                'direccion' => 'Paseo Marítimo, 55',
                'precio' => 170000,
                'metros' => 70,
                'habitaciones' => 2,
                'descripcion' => 'Apartamento en primera línea de playa. Terraza con vistas al mar. Perfecto como segunda residencia vacacional.'
            ],
            [
                'id' => 12,
                'nombre' => 'Dúplex con Solárium en Pulianas',
                'direccion' => 'Calle Real, 19',
                'precio' => 155000,
                'metros' => 90,
                'habitaciones' => 3,
                'descripcion' => 'Amplio dúplex en el centro de Pulianas. Tranquilidad y proximidad a Granada. Solárium de 25m² incluido.'
            ],
            [
                'id' => 13,
                'nombre' => 'Piso Exterior en Fuentenueva',
                'direccion' => 'Calle Severo Ochoa, 1',
                'precio' => 210000,
                'metros' => 98,
                'habitaciones' => 3,
                'descripcion' => 'Piso exterior, muy cerca de las facultades y jardines del Triunfo. Excelente para estudiantes o como inversión de alquiler.'
            ],
            [
                'id' => 14,
                'nombre' => 'Casa de Pueblo en Cenes de la Vega',
                'direccion' => 'Calle Granada, 30',
                'precio' => 110000,
                'metros' => 150,
                'habitaciones' => 4,
                'descripcion' => 'Típica casa andaluza con patio interior y muchas posibilidades de reforma. A solo 10 minutos en coche del centro de Granada.'
            ],
            [
                'id' => 15,
                'nombre' => 'Piso Céntrico con Garaje',
                'direccion' => 'Calle Pedro Antonio de Alarcón, 50',
                'precio' => 265000,
                'metros' => 115,
                'habitaciones' => 3,
                'descripcion' => 'Vivienda con excelente ubicación, plaza de garaje incluida. Aire acondicionado centralizado y cocina equipada.'
            ],
            [
                'id' => 16,
                'nombre' => 'Bajo con Acceso Directo en Gójar',
                'direccion' => 'Calle San Sebastián, 8',
                'precio' => 140000,
                'metros' => 80,
                'habitaciones' => 2,
                'descripcion' => 'Bajo con acceso directo desde la calle, ideal para personas con movilidad reducida. Zona tranquila y bien comunicada en el Área Metropolitana.'
            ],
            [
                'id' => 17,
                'nombre' => 'Piso Alto en Caleta',
                'direccion' => 'Avenida de la Constitución, 4',
                'precio' => 290000,
                'metros' => 130,
                'habitaciones' => 4,
                'descripcion' => 'Vivienda en edificio señorial, junto a los juzgados y el metro. Servicios centrales y portero físico. Excelentes calidades.'
            ],
            [
                'id' => 18,
                'nombre' => 'Chalet Pareado en Las Gabias',
                'direccion' => 'Calle de la Hípica, 1',
                'precio' => 310000,
                'metros' => 210,
                'habitaciones' => 4,
                'descripcion' => 'Chalet con parcela propia, piscina y zona de barbacoa. Entorno residencial y familiar. Listo para entrar a vivir.'
            ],
            [
                'id' => 19,
                'nombre' => 'Apartamento en Sierra Nevada (Pradollano)',
                'direccion' => 'Edificio Monte Oiz, s/n',
                'precio' => 99000,
                'metros' => 35,
                'habitaciones' => 1,
                'descripcion' => 'Apartamento a pie de pistas, ideal para la temporada de esquí. Capacidad para 4 personas. Magnífica inversión.'
            ],
            [
                'id' => 20,
                'nombre' => 'Piso Histórico en Puerta Real',
                'direccion' => 'Calle Reyes Católicos, 30',
                'precio' => 420000,
                'metros' => 140,
                'habitaciones' => 5,
                'descripcion' => 'Piso con techos altos y gran potencial en el punto neurálgico de Granada. Edificio clásico con ascensor. Oportunidad única.'
            ],
        ];
    }
    public function welcome()
    {
        return view('tecnozv.welcome');
    }

    public function index()
    {
        $pisos = $this->getPisosData();
        return view('tecnozv.index', ['pisos' => $pisos]);
    }


    public function show($id)
    {
        $pisos = $this->getPisosData();
        

        $piso = collect($pisos)->firstWhere('id', $id);

        if (!$piso) {
            abort(404, 'Piso no encontrado.');
        }

        return view('tecnozv.show', ['piso' => $piso]);
    }


    public function atencionCliente()
    {
        return view('tecnozv.atencion');
    }


    public function contacto()
    {
        return view('tecnozv.contacto');
    }
}
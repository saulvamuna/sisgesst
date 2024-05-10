<?php

namespace Database\Seeders;

use App\Models\InterventionMeasure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterventionMeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ELIMINACION
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Modificar un diseño para eliminar el peligro.',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Introducir dispositivos mecánicos de alzamiento para eliminar el peligro de manipulación manual',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Contar con ayudas mecánicas.',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Contar con programas de mantenimiento planificado a máquinas y equipos',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Máquinas más grandes y lentas en vez de otras más pequeñas y rápidas',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Matrices fijas en lugar de matrices de una operación',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Prensas neumáticas',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Cizallas rotativas',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Prensas hidráulicas',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Correas de transmisión en vez de engranajes',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Remplazo ajuste de piezas gastadas o desbalanceadas de las máquinas',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Lubricación de las piezas de las máquinas y empleo de aceites de corte',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Forma y afilado adecuado de las herramientas de corte',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Utilizar  mínima cantidad de material radioactivo',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Realizar mantenimiento preventivo, predictivo y correctivo a todas las sillas de la empresa.',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'Incrementar el distanciamiento de la fuente.',
        ]);
        InterventionMeasure::create([
            'name' => 'Eliminacion',
            'description' => 'N.A.',
        ]);

        //SUSTITUCION
        InterventionMeasure::create([
            'name' => 'Sustitucion',
            'description' => 'Sustituir por un material menos peligroso.',
        ]);
        InterventionMeasure::create([
            'name' => 'Sustitucion',
            'description' => 'Reducir la energía del sistema (reducir fuerza, amperaje, presión, temperatura)',
        ]);
        InterventionMeasure::create([
            'name' => 'Sustitucion',
            'description' => 'Cambiar una herramienta por otra de mayor impacto.',
        ]);
        InterventionMeasure::create([
            'name' => 'Sustitucion',
            'description' => 'Capacitar al personal',
        ]);
        InterventionMeasure::create([
            'name' => 'Sustitucion',
            'description' => 'Compresión en vez de remachado por impactos',
        ]);
        InterventionMeasure::create([
            'name' => 'Sustitucion',
            'description' => 'Soldadura en vez de remachado',
        ]);
        InterventionMeasure::create([
            'name' => 'Sustitucion',
            'description' => 'Trabajo en caliente en lugar de en frío',
        ]);
        InterventionMeasure::create([
            'name' => 'Sustitucion',
            'description' => 'Prensado en vez de laminado o forjado',
        ]);
        InterventionMeasure::create([
            'name' => 'Sustitucion',
            'description' => 'Ducha y lavabo al final de la jornada de trabajo',
        ]);
        InterventionMeasure::create([
            'name' => 'Sustitucion',
            'description' => 'Solicitar una escalera  manual que cumpla  con la legislacion vigente',
        ]);
        InterventionMeasure::create([
            'name' => 'Sustitucion',
            'description' => 'N.A.',
        ]);

        //CONTROLES DE INGENIERIA
        InterventionMeasure::create([
            'name' => 'Controles de ingenieria',
            'description' => 'Instalar sistemas de ventilación',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles de ingenieria',
            'description' => 'Ubicar guardas de seguridad en las máquinas',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles de ingenieria',
            'description' => 'Anclamiento de máquinas',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles de ingenieria',
            'description' => 'Cerramiento acústico',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles de ingenieria',
            'description' => 'Instalar sistemas de extracción',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles de ingenieria',
            'description' => 'Sacar ventaja del progreso técnico para mejorar los controles',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles de ingenieria',
            'description' => 'Suministrar el elemento de protección personal para la tarea',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles de ingenieria',
            'description' => 'Capacitar al personal en trabajo seguro con equipos de computo, Implementar pausas activas.',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles de ingenieria',
            'description' => 'Ayudante con soportes y ganchos para frenar y halar carretilla',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles de ingenieria',
            'description' => 'Implementar programa de manejo seguro de productos químicos que contemple: Almacenamiento, manipulación y disposición adecuada.',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles de ingenieria',
            'description' => 'N.A.',
        ]);

        //CONTROLES ADMINISTRATIVOS, SEÑALIZACION, ADVERTENCIAS
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Identificar fallas humanas',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Definir procedimientos de seguridad',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Verificar que se cumpla con las normas de trabajo seguro',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Rotación de personal o rotación de tareas durante la jornada laboral',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Capacitar al personal en Higiene Postural',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Capacitar al personal en trabajo seguro',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Capacitar al personal en manejo a la defensiva y situaciones difíciles.',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Capacitación en Estilos de vida laboral saludables.',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Capacitar al personal en Seguridad y Sistemas de Almacenamiento',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Capacidades físicas y mentales de la persona',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Capacitar al personal en cumplimiento de las normas de tránsito por parte del personal',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Implementar Programa de Pausas Activas o de acondicionamiento físico',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Realizar inspecciones de seguridad',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Mantener demarcadas las áreas de circulación y almacenamiento.',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Mantener limpia y ordenada el área',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Definir medidas de prevención y/o de protección contra caídas',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Señalizar áreas criticas y riesgos en las áreas de trabajo',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Utilizar permanente de equipo de protección personal',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Supervisar el uso de EPP',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Instalar sistemas de alarmas',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Realizar evaluaciones médicas y/o ocupacionales (de tipo ergonómico) de ingreso, periódicas y de retiro al personal',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Realizar evaluaciones medicas ocupacionales (Visiometrías) al personal (Exámen de ingreso, periódicos y de retiro)',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Utilizar pantallas antireflectivas para computadores',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Ubicar los computadores de manera paralela a la luz (tanto natural como artificial) para que no se reflejen en las pantallas.',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Conservar las herramientas en buen estado.',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Establecer sistemas de comunicación permanente con el personal de la empresa en caso de emergencia.',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Implementar Programa de Riesgo Psicosocial (Res. 2646)',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Divulgar Ley 1010 de Acoso Laboral',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Realizar actividades de Bienestar Laboral y Social',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Adaptación del trabajo',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Disminuir el tiempo de exposición.',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Realizar vigilancia médica',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Evitar comer/ beber/ fumar en el lugar de trabajo',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Implementar programa de clima laboral',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'Implementar períodos de descanso',
        ]);
        InterventionMeasure::create([
            'name' => 'Controles administrativos, señalización, advertencia',
            'description' => 'N.A.',
        ]);

        //EQUIPO / ELEMENTOS DE PROTECCION PERSONAL
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Capuchon',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Mascarilla respirable con cartuchos para gases y vapores',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Gafas de seguridad tipo buso',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Gafas de seguridad lente oscuro',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Equipos de proteccion contra caidas',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Gafas de seguridad lente claro ',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Careta con visor ',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Careta para soldadura',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Protector auditivo',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Respirador de cartucho químico',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Suministrar reposapiés en los puestos de trabajo que no cuentan con el recurso.',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Utilización permanente de equipo de protección personal, Supervisar su uso adecuado.',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Inspección de seguridad periódica',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Elementos de Protección Personal de acuerdo al Riesgo: Casco, Guantes, Botas,  Gafas, Protección Respiratoria,  arnés etc…',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Respirador para material particulado',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Mascarilla desechable',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Guantes de cuero',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Guantes de caucho',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Guantes de látex',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Guantes de nitrilo',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Guantes en hilaza',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Guantes en hilaza con pvc',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Guantes de carnaza',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Guantes de asbesto',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Guantes de acero',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Botas con puntera dielectrica',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Botas de caucho con puntera dielectrica',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Arnes de seguridad',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Peto en plástico',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'Peto en pvc',
        ]);
        InterventionMeasure::create([
            'name' => 'Equipo / elementos de protección personal',
            'description' => 'N.A.',
        ]);
    }
}

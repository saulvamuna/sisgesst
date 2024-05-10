<?php

namespace Database\Seeders;

use App\Models\DangerDescription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DangerDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DangerDescription::create([
            'danger' => 'Biológico',
            'danger_description' => 'Hongos'
        ]);

        DangerDescription::create([
            'danger' => 'Biológico',
            'danger_description' => 'Hongos y bacterias'
        ]);

        DangerDescription::create([
            'danger' => 'Biológico',
            'danger_description' => 'Contacto con animales'
        ]);

        DangerDescription::create([
            'danger' => 'Biológico',
            'danger_description' => 'Ingestión de alimentos contaminados'
        ]);

        DangerDescription::create([
            'danger' => 'Biológico',
            'danger_description' => 'Contacto con fluidos corporales'
        ]);

        DangerDescription::create([
            'danger' => 'Biológico',
            'danger_description' => 'Inhalación o ingestión de microorganismos'
        ]);

        //FISICO
        DangerDescription::create([
            'danger' => 'Físico',
            'danger_description' => 'Ruido'
        ]);
        DangerDescription::create([
            'danger' => 'Físico',
            'danger_description' => 'Iluminación deficiente'
        ]);
        DangerDescription::create([
            'danger' => 'Físico',
            'danger_description' => 'Iluminación en exceso'
        ]);
        DangerDescription::create([
            'danger' => 'Físico',
            'danger_description' => 'Vibración'
        ]);
        DangerDescription::create([
            'danger' => 'Físico',
            'danger_description' => 'Temperaturas extremas (Calor o frio)'
        ]);
        DangerDescription::create([
            'danger' => 'Físico',
            'danger_description' => 'Presiones anormales'
        ]);
        DangerDescription::create([
            'danger' => 'Físico',
            'danger_description' => 'Radiaciones ionizantes (Rayos x, gama, beta y alfa)'
        ]);
        DangerDescription::create([
            'danger' => 'Físico',
            'danger_description' => 'Contacto con superficies calientes'
        ]);
        DangerDescription::create([
            'danger' => 'Físico',
            'danger_description' => 'Humedad'
        ]);
        DangerDescription::create([
            'danger' => 'Físico',
            'danger_description' => 'Recipientes a praesión'
        ]);
        DangerDescription::create([
            'danger' => 'Físico',
            'danger_description' => 'Radiaciones no ionizantes (Laser, ultravioleta, infrarojas, radiofrecuencia, microondas)'
        ]);

        //QUIMICO
        DangerDescription::create([
            'danger' => 'Químico',
            'danger_description' => 'Polvos orgánicos, inorgánicos'
        ]);
        DangerDescription::create([
            'danger' => 'Químico',
            'danger_description' => 'Fibras'
        ]);
        DangerDescription::create([
            'danger' => 'Químico',
            'danger_description' => 'Líquidos'
        ]);
        DangerDescription::create([
            'danger' => 'Químico',
            'danger_description' => 'Gases y vapores'
        ]);
        DangerDescription::create([
            'danger' => 'Químico',
            'danger_description' => 'Aerosoles líquidos (nieblas y rocíos)'
        ]);
        DangerDescription::create([
            'danger' => 'Químico',
            'danger_description' => 'Aerosoles sólidos (polvos orgánicos o inorgánicos, humo metálico o no metálico y fibras)'
        ]);
        DangerDescription::create([
            'danger' => 'Químico',
            'danger_description' => 'Material particulado'
        ]);
        DangerDescription::create([
            'danger' => 'Químico',
            'danger_description' => 'Salpicadura de químicos'
        ]);

        //FISICO-QUIMICO
        DangerDescription::create([
            'danger' => 'Físico-Químico',
            'danger_description' => 'Sólido combustible'
        ]);
        DangerDescription::create([
            'danger' => 'Físico-Químico',
            'danger_description' => 'Líquido combustible'
        ]);
        DangerDescription::create([
            'danger' => 'Físico-Químico',
            'danger_description' => 'Líquido inflamable'
        ]);
        DangerDescription::create([
            'danger' => 'Físico-Químico',
            'danger_description' => 'Gases explosivos'
        ]);
        DangerDescription::create([
            'danger' => 'Físico-Químico',
            'danger_description' => 'Gases inflamables'
        ]);

        //BIOMECANICOS
        DangerDescription::create([
            'danger' => 'Biomecánico',
            'danger_description' => 'Posiciones de pie prolongadas'
        ]);
        DangerDescription::create([
            'danger' => 'Biomecánico',
            'danger_description' => 'Posiciones sentadas prolongadas'
        ]);
        DangerDescription::create([
            'danger' => 'Biomecánico',
            'danger_description' => 'Flexiones repetitivas (tronco o piernas)'
        ]);
        DangerDescription::create([
            'danger' => 'Biomecánico',
            'danger_description' => 'Sobre esfuerzo físico'
        ]);
        DangerDescription::create([
            'danger' => 'Biomecánico',
            'danger_description' => 'Hiperextensiones'
        ]);
        DangerDescription::create([
            'danger' => 'Biomecánico',
            'danger_description' => 'Movimiento repetitivo'
        ]);
        DangerDescription::create([
            'danger' => 'Biomecánico',
            'danger_description' => 'Manipulación manual de cargas'
        ]);
        DangerDescription::create([
            'danger' => 'Biomecánico',
            'danger_description' => 'Diseño del puesto de trabajo'
        ]);
        DangerDescription::create([
            'danger' => 'Biomecánico',
            'danger_description' => 'Posición inadecuada del puesto de trabajo'
        ]);

        //MECANICO
        DangerDescription::create([
            'danger' => 'Mecánico',
            'danger_description' => 'Contacto con herramientas manuales'
        ]);
        DangerDescription::create([
            'danger' => 'Mecánico',
            'danger_description' => 'Contacto con herramientas cortopunzantes'
        ]);
        DangerDescription::create([
            'danger' => 'Mecánico',
            'danger_description' => 'Proyección de partículas'
        ]);
        DangerDescription::create([
            'danger' => 'Mecánico',
            'danger_description' => 'Atrapamiento'
        ]);
        DangerDescription::create([
            'danger' => 'Mecánico',
            'danger_description' => 'Golpeado con o contra'
        ]);
        DangerDescription::create([
            'danger' => 'Mecánico',
            'danger_description' => 'Manipulación de materiales'
        ]);
        DangerDescription::create([
            'danger' => 'Mecánico',
            'danger_description' => 'Máquinas en movimiento'
        ]);
        DangerDescription::create([
            'danger' => 'Mecánico',
            'danger_description' => 'Caídas de objetos'
        ]);
        DangerDescription::create([
            'danger' => 'Mecánico',
            'danger_description' => 'Contacto con superficies calientes'
        ]);
        DangerDescription::create([
            'danger' => 'Mecánico',
            'danger_description' => 'Falta de mantenimiento preventivo'
        ]);
        DangerDescription::create([
            'danger' => 'Mecánico',
            'danger_description' => 'Falta de mantenimiento correctivo'
        ]);

        //ELECTRICO
        DangerDescription::create([
            'danger' => 'Eléctrico',
            'danger_description' => 'Contacto indirecto (alta y baja tensión)'
        ]);
        DangerDescription::create([
            'danger' => 'Eléctrico',
            'danger_description' => 'Contacto directo (alta y baja tensión)'
        ]);
        DangerDescription::create([
            'danger' => 'Eléctrico',
            'danger_description' => 'Contacto con electricidad estática'
        ]);

        //LOCATIVO
        DangerDescription::create([
            'danger' => 'Locativo',
            'danger_description' => 'Almacenamiento inadecuado'
        ]);
        DangerDescription::create([
            'danger' => 'Locativo',
            'danger_description' => 'Pisos con desnivel'
        ]);
        DangerDescription::create([
            'danger' => 'Locativo',
            'danger_description' => 'Pisos lisos'
        ]);
        DangerDescription::create([
            'danger' => 'Locativo',
            'danger_description' => 'Condiciones de orden y aseo'
        ]);
        DangerDescription::create([
            'danger' => 'Locativo',
            'danger_description' => 'Falta de señalización y demarcación de áreas'
        ]);
        DangerDescription::create([
            'danger' => 'Locativo',
            'danger_description' => 'Techos (en mal estado)'
        ]);
        DangerDescription::create([
            'danger' => 'Locativo',
            'danger_description' => 'Trabajo en alturas'
        ]);
        DangerDescription::create([
            'danger' => 'Locativo',
            'danger_description' => 'Espacios confinados'
        ]);

        //PSICOSOCIAL
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Pago inoportuno'
        ]);
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Estilo de mando'
        ]);
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Tipo de contratación'
        ]);
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Capacitación insuficiente'
        ]);
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Mecanismos de comunicación inadecuados'
        ]);
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Tecnología obsoleta'
        ]);
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Relaciones interpesonales inadecuadas'
        ]);
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Sobrecarga de trabajo'
        ]);
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Demandas emocionales (Acoso)'
        ]);
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Asignación de responsabilidades inadecuada'
        ]);
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Monotonía de la tarea'
        ]);
        DangerDescription::create([
            'danger' => 'Psicosocial',
            'danger_description' => 'Jornada de trabajo (pausas, trabajo nocturno, rotación, horas extras, descansos)'
        ]);

        //PUBLICO
        DangerDescription::create([
            'danger' => 'Público',
            'danger_description' => 'Accidentes de tránsito'
        ]);
        DangerDescription::create([
            'danger' => 'Público',
            'danger_description' => 'Robos, atracos, asaltos. Atentados, de órden público, etc'
        ]);

        //SANEAMIENTO
        DangerDescription::create([
            'danger' => 'Saneamiento',
            'danger_description' => 'Desechos y olores desagradables'
        ]);
        DangerDescription::create([
            'danger' => 'Saneamiento',
            'danger_description' => 'Acumulacion de basuras'
        ]);
        DangerDescription::create([
            'danger' => 'Saneamiento',
            'danger_description' => 'Falta o mal estado de servicios sanitarios'
        ]);
        DangerDescription::create([
            'danger' => 'Saneamiento',
            'danger_description' => 'Desechos Biologicos'
        ]);
        DangerDescription::create([
            'danger' => 'Saneamiento',
            'danger_description' => 'Alcantarillado faltante o en mal estado'
        ]);

        //FENOMENOS NATURALES
        DangerDescription::create([
            'danger' => 'Fenómenos naturales',
            'danger_description' => 'Sismo'
        ]);
        DangerDescription::create([
            'danger' => 'Fenómenos naturales',
            'danger_description' => 'Terremoto'
        ]);
        DangerDescription::create([
            'danger' => 'Fenómenos naturales',
            'danger_description' => 'Vendaval'
        ]);
        DangerDescription::create([
            'danger' => 'Fenómenos naturales',
            'danger_description' => 'Inundación'
        ]);
        DangerDescription::create([
            'danger' => 'Fenómenos naturales',
            'danger_description' => 'Derrumbe'
        ]);
        DangerDescription::create([
            'danger' => 'Fenómenos naturales',
            'danger_description' => 'Precipitaciones (lluvias, granizadas, heladas)'
        ]);
    }
}

<style>
    * {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .tabla {
        width: 100%;
        margin-bottom: 30px;
        background: rgb(75 85 99);
    }

    .titulo {
        width: 100%;
        background: rgb(75 85 99);
        font-size: 18px;
        font-weight: 700;
        text-align: center;
        color: #fff;
    }
    .titulo th{
        padding: 6px 0;
    }

    .subtitulo {
        width: 50%;
        background: rgb(209 213 219);
        text-align: center;
        font-weight: 700;
        color: rgb(75 85 99);
        padding: 4px 0;
    }

    .informacion {
        width: 50%;
        background: #fff;
        padding: 4px;
    }

    .tituloTwo {
        width: 30%;
        background: rgb(75 85 99);
        padding: 1px 0;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        color: #fff;
    }
    .informacionTwo {
        width: 70%;
        background: #fff;
        padding: 4px 4px 4px 15px;
    }
    .subtituloThree{
        width: 33%;
        background: rgb(209 213 219);
        text-align: center;
        font-weight: 700;
        color: rgb(75 85 99);
        padding: 4px 0;
    }
    .informacionThree{
        width: 33%;
        background: #fff;
        padding: 4px;
    }
    .subtituloFour {
        width: 23%;
        background: rgb(209 213 219);
        color: rgb(75 85 99);
        padding: 0 0 0 10px;
        font-size: 16px;
        font-weight: 700;
    }
    .informacionFour {
        width: 65%;
        background: #fff;
        padding: 4px 4px 4px 15px;
    }
    .informacionFive{
        width: 12%;
        background: #fff;
        padding: 4px 4px 4px 15px;
    }
    .informacionSix{
        width: 7%;
        background: #fff;
        text-align: center;
    }
    .subtituloSeven{
        width: 25%;
        background: rgb(209 213 219);
        text-align: center;
        font-weight: 700;
        color: rgb(75 85 99);
        padding: 4px 0;
    }
    .informacionSeven{
        width: 25%;
        background: #fff;
        padding: 4px;
        text-align: center;
    }
    .informacionEight{
        background: rgb(209 213 219);
        color: rgb(75 85 99);
        padding: 0 0 0 10px;
        font-size: 16px;
        font-weight: 700;
    }
    .tituloNine{
        width: 50%;
        background: rgb(75 85 99);
        padding: 1px 0;
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        color: #fff;
    }
    .informacionNine{
        width: 50%;
        background: #fff;
        padding: 4px;
        text-align: center;
    }
</style>
<table class="tabla">
    <thead>
        <tr class="titulo">
            <th colspan="2">PROCESO</th>
        </tr>
        <tr>
            <th class="subtitulo">Nombre</th>
            <th class="subtitulo">Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="informacion">{{ $evaluation->task->activity->process->name }}</td>
            <td class="informacion">{{ $evaluation->task->activity->process->description }}</td>
        </tr>
    </tbody>
</table>
<table class="tabla">
    <thead>
        <tr class="titulo">
            <th colspan="2">ACTIVIDAD</th>
        </tr>
        <tr>
            <th class="subtitulo">Nombre</th>
            <th class="subtitulo">Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="informacion">{{ $evaluation->task->activity->name }}</td>
            <td class="informacion">{{ $evaluation->task->activity->description }}</td>
        </tr>
    </tbody>
</table>
<table class="tabla">
    <thead>
        <tr class="titulo">
            <th colspan="2">TAREA</th>
        </tr>
        <tr>
            <th class="subtitulo">Nombre</th>
            <th class="subtitulo">Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="informacion">{{ $evaluation->task->name }}</td>
            <td class="informacion">{{ $evaluation->task->description }}</td>
        </tr>
    </tbody>
</table>
<table class="tabla">
    <thead>
        <tr class="titulo">
            <th colspan="2">CLASIFICACION DE PELIGRO</th>
        </tr>
        <tr>
            <th class="subtitulo">Nombre</th>
            <th class="subtitulo">Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="informacion">{{ $evaluation->danger_classification }}</td>
            <td class="informacion">{{ $dangerDescription->danger_description }}</td>
        </tr>
    </tbody>
</table>
<table class="tabla">
    <thead>
        <tr>
            <th class="tituloTwo">Nombre</th>
            <td class="informacionTwo">{{ $evaluation->danger_classification }}</td>

        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="tituloTwo">Descripcion</th>
            <td class="informacionTwo">{{ $dangerDescription->danger_description }}</td>
        </tr>
    </tbody>
</table>
<table class="tabla">
    <thead>
        <tr class="titulo">
            <th colspan="3">CONTROLES EXISTENTES</th>
        </tr>
        <tr>
            <th class="subtituloThree">Fuente</th>
            <th class="subtituloThree">Medio</th>
            <th class="subtituloThree">Individuo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="informacionThree">{{ $evaluation->source }}</td>
            <td class="informacionThree">{{ $evaluation->means }}</td>
            <td class="informacionThree">{{ $evaluation->individual }}</td>
        </tr>
    </tbody>
</table>
<table class="tabla">
    <thead>
        <tr class="titulo">
            <th colspan="4">CLASIFICACION DE PELIGRO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="subtituloFour">Nivel de deficiencia (ND)</td>
            <td class="informacionFive">{{ $deficiencyLevel->name . ' (' . $deficiencyLevel->prefix . ')' }}</td>
            <td class="informacionSix">{{ $deficiencyLevel->value }}</td>
            <td class="informacionFour">{{ $deficiencyLevel->meaning }}</td>
        </tr>
        <tr>
            <td class="subtituloFour">Nivel de exposicion (NE)</td>
            <td class="informacionFive">{{ $exposureLevel->name . ' (' . $exposureLevel->prefix . ')'}}</td>
            <td class="informacionSix">{{ $exposureLevel->value }}</td>
            <td class="informacionFour">{{ $exposureLevel->meaning }}</td>
        </tr>
        <tr>
            <td class="subtituloFour">Nivel de probabilidad (ND * NE)</td>
            <td class="informacionFive">{{ $probabilityLevel->name . ' (' . $probabilityLevel->prefix . ')'}}</td>
            <td class="informacionSix">{{ $evaluation->value_probability_level }}</td>
            <td class="informacionFour">{{ $probabilityLevel->meaning }}</td>
        </tr>
        <tr>
            <td class="subtituloFour">Nivel de consecuencia</td>
            <td class="informacionFive">{{ $consequenceLevel->name . ' (' . $consequenceLevel->prefix . ')'}}</td>
            <td class="informacionSix">{{ $consequenceLevel->value }}</td>
            <td class="informacionFour">{{ $consequenceLevel->meaning }}</td>
        </tr>
        <tr>
            <td class="subtituloFour">Nivel de riesgo intervencion (NR)</td>
            <td class="informacionFive">{{ $interventionLevel->name}}</td>
            <td class="informacionSix">{{ $evaluation->value_probability_level * $consequenceLevel->value }}</td>
            <td class="informacionFour">{{ $interventionLevel->meaning }}</td>
        </tr>
        <tr>
            <td class="subtituloFour">Aceptabilidad del riesgo</td>
            <td class="informacionFive">{{ $riskAcceptability->name }}</td>
            <td colspan="2" class="informacionFour">{{ $riskAcceptability->meaning }}</td>
        </tr>
    </tbody>
</table>
<table class="tabla">
    <thead>
        <tr class="titulo">
            <th colspan="4">NUMERO DE EXPUESTOS</th>
        </tr>
        <tr>
            <th class="subtituloSeven">Vinculados</th>
            <th class="subtituloSeven">Contratistas</th>
            <th class="subtituloSeven">Temporales</th>
            <th class="subtituloSeven">Tiempo de exposicion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="informacionSeven">{{ $evaluation->linked }}</td>
            <td class="informacionSeven">{{ $evaluation->contractors }}</td>
            <td class="informacionSeven">{{ $evaluation->temporary }}</td>
            <td class="informacionSeven">{{ $evaluation->exposure_time }}</td>
        </tr>
    </tbody>
</table>
<table class="tabla">
    <thead>
        <tr class="titulo">
            <th colspan="3">CONTROLES EXISTENTES</th>
        </tr>
        <tr>
            <th class="subtituloThree">Medida</th>
            <th class="subtituloThree">Descripcion</th>
            <th class="subtituloThree">Sugerencia</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="informacionEight">Eliminacion</td>
            <td class="informacionThree">{{ $elimination }}</td>
            <td class="informacionThree">{{ $eliminationSuggestion }}</td>
        </tr>
        <tr>
            <td class="informacionEight">Sustitucion</td>
            <td class="informacionThree">{{ $substitution }}</td>
            <td class="informacionThree">{{ $substitutionSuggestion }}</td>
        </tr>
        <tr>
            <td class="informacionEight">Controles de ingenieria</td>
            <td class="informacionThree">{{ $controlEngineering }}</td>
            <td class="informacionThree">{{ $engineeringSuggestion }}</td>
        </tr>
        <tr>
            <td class="informacionEight">Controles administrativos, señalización, advertencia</td>
            <td class="informacionThree">{{ $administrativeControls }}</td>
            <td class="informacionThree">{{ $administrativeSuggestion }}</td>
        </tr>
        <tr>
            <td class="informacionEight">Equipo / elementos de protección personal</td>
            <td class="informacionThree">{{ $personalProtection }}</td>
            <td class="informacionThree">{{ $protectionSuggestion }}</td>
        </tr>
    </tbody>
</table>
<table class="tabla">
    <tbody>
        <tr>
            <th class="tituloNine">Cumplimiento Requisito Legal</th>
            <td class="informacionNine">{{ $evaluation->legal_requirement }}</td>
        </tr>
    </tbody>
</table>

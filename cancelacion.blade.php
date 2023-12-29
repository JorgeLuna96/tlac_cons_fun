<div class="pagina">
    @include('cabecera')
    @include('fondo')
    <div style="padding-left: 55px">
        <div class="row info">
            <div class="gorw" style="color: #214465">
                CONTRIBUYENTE: <span style="color: black; font-weight: bold">{{ $contribuyente->nombre }}</span>
            </div>
            <div class="grow" style="padding-left: 14%; color: black; font-weight: bold; text-align: center">
                {{ $opcioLin }}: <span style="color: #214465; font-weight: bold">{{ $numLicencia }}</span>
            </div>
        </div>
        <div class="row info">
            <div style="border: 1px solid black; margin: 15px 5px; padding: 15px 5px">
                <p>
                    Situación por la que se cancela automáticamente la presente licencia de funcionamiento sin ser notificado
                    por el H. Ayunatamiento de Tlacotepec de Benito Juárez Pue.
                </p>
                <ul style="padding-left: 15px; padding-top: 10px">
                    <li>Falta de renovacón</li>
                    <li>Cambio de propietario sin notificarlo</li>
                    <li>Modificaciones del giro sin notificarlo</li>
                    <li>No respetar el alcance de la licencia</li>
                    <li>Cambio de denominación sin notificarlo</li>
                </ul>
            </div>
        </div>
        <div style="padding-left: 10%">
            <table class="info cuerpo" style="width: 80%">
                <tr class="info row">
                    <td class="info" style="border: 1px solid black; width:30%; padding-top: 36px">
                        <div style="padding-left: 15px;">
                            REGISTRO: <span>{{$registro}}</span>
                        </div>
                    </td>
                    <td class="info" style="border: 1px solid black; width: 55%; padding: 15.2px 8px;">
                        <div>C. Leónides Martínez Flores. Regidor de industria, comercio, agricultura y ganadería.</div>
                        <div>
                            C.P. Angelica Gorgonio Martínez. Directora de industria y comercio.
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div style="padding-top: 5px; padding-left: 10%">
            <table class="info cuerpo" style="width: 70%">
                <tr class="info grow" style="text-align: center">
                    <td style="border: 1px solid black; width: 23%; padding: 15.2px 8px">
                        <div style="color: #214465; font-weight: bold; white-space:nowrap; display:block">
                            FECHA DE INICIO: <span style="color: black; font-weight: bold; display:block;">{{ date('d-m-Y',strtotime($fechaInicio)) }}</span>
                        </div>
                    </td>
                    <td style="border: 1px solid black; width: 23%; padding: 15.2px 8px">
                        <div style="color: #214465; font-weight: bold">
                            FECHA DE TERMINACIÓN: <span style="color: black; font-weight: bold">{{ date('d-m-Y',strtotime($fechaTerminacion)) }}</span>
                        </div>
                    </td>
                    <td style="border: 1px solid black; width: 23%; padding: 15.2px 8px">
                        <div style="color: #214465; font-weight: bold;">
                            FECHA DE RENOVACIÓN: <span style="color: black; font-weight: bold">{{ date('d-m-Y',strtotime($fechaRenovacion)) }}</span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
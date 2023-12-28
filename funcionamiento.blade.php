<div class="pagina">
    @include('cabecera')
    <div style="padding-left: 55px">
        <div class="row contribuyente" style="padding-top: 10px">
            <div style="color: #214465; border: 1px solid black" >
                <div style="padding: 10px 5px">
                    CONTRIBUYENTE: <span style="color: black; font-weight: bold">{{--{{$contribuyente->nombre}}--}}</span>
                </div>
            </div>
        </div>
        <div style="padding-top: 10px">
            <table class="info cuerpo">
                <tr class=" grow info">
                    <td style="width: 50%;  border: 1px solid black; padding-left: 8px">
                        <div style="padding: 10px 5px; color: #214465">
                            NOMBRE COMERCIAL: <span style="color: black; font-weight: bold">{{--{{ $contribuyente->nombre_comercial}}--}}</span>
                        </div>
                    </td>
                    <td style="width: 10%; border: 1px solid black; text-align: center; color: #214465">
                        RFC: <span style="color: black; font-weight: bold;">{{--{{ $contribuyente->rfc }}--}}</span>
                    </td>
                    <td style=" border: none"></td>
                    <td style="width: 23%; color: black; font-weight: bold; padding: 10px 5px; position: absolute; top: auto; left: 67%; right: 0; bottom: 63%; border: 1px solid black; text-align: center; margin-right: 10px">
                        {{--{{ $opcioLin }}--}} <span style="color: #214465; font-weight: bold">{{--{{ $numLicencia }}--}}</span>
                    </td>
                </tr>
                <tr class=" grow info">
                    <td style="border: 1px solid black;">
                        <div style="padding: 10px 5px; color: #214465">
                            DIRECCIÓN: <span style="color: black; font-weight: bold">{{--{{ $docto->direccion->direccion_completa }}--}}</span>

                        </div>
                    </td>
                    <td style="border: 1px solid black; padding: 0 5px; text-align: center; color: #214465;">
                        HORARIO: <span style="color: black; font-weight: bold">{{--{{ $horario }}--}}</span>
                    </td>
                </tr>
                </table>
        </div>
        <div style="padding-top: 20px">
            <table class="info cuerpo">
                <tr class="info">
                    <td style="border: 1px solid black; width: 60%">
                        <div style="padding: 10px 5px; color: #214465">
                            GIRO: <span style="color: black; font-weight: bold">{{--{{ $contribuyente->giro->nombre ?? 'N/A' }}--}}</span>
                        </div>
                    </td>
                    <td style="width: 5%"></td>
                    <td style="border: 1px solid black; width: 5%">
                        <div style="padding: 0 5px; color: #214465">
                            FECHA DE INICIO: <span style="color: black; font-weight: bold">{{--{{ date('d-m-Y',strtotime($fechaInicio)) }}--}}</span>
                        </div>
                    </td>
                    <td style="border: 1px solid black; width: 5%">
                        <div style="padding: 0 5px; color: #214465">
                            FECHA DE TERMINACIÓN: <span style="font-weight: bold; color: black">{{--{{ date('d-m-Y',strtotime($fechaTerminacion)) }}--}}</span>
                        </div>
                    </td>
                    <td style="border: 1px solid black; width: 5%">
                        <div style="padding: 0 5px; color: #214465">
                            FECHA DE RENOVACIÓN: <span style="color: black; font-weight: bold">{{--{{ date('d-m-Y',strtotime($fechaRenovacion)) }}--}}</span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div style="padding-top: 40px">
            <div style="position: absolute; top: auto; left:8.5%; right: 0; bottom: 16%;">
                <div class="firma" style="width: 35%"></div>
            </div>
            <div style="position: absolute; top: auto; left: 49%; right: 0; bottom: 16%;">
                <div class="firma" style="width: 60%"></div>
            </div>
        </div>
        <div class="row info" style="text-align: center; padding-top: 16%;
         position: absolute; top: auto; left: 5%; right: 0; bottom: 13%;">
            <div class="grow" style="padding-left: 92px; font-weight: bold">LEÓNIDES MARTÍNEZ FLORES</div>
            <div class="grow" style="padding-left: 128px; font-weight: bold">JONATHAN ANTONIO TELLÉZ HERNÁNDEZ</div>
        </div>
        <div class="row info" style=" position: absolute; top: auto; left: 15%; right: 0; bottom: 7%; ">
            <div class="grow" style="width:20%;  padding-right: 55px; text-align: center; font-weight: bold">REGIDOR DE INDUSTRIA, COMERCIO,AGRICULTURA Y GANADERÍA</div>
            <div class="grow" style="padding-left: 22%; font-weight: bold">TESORERO MUNICIPAL</div>
        </div>
    </div>
    @include('fondo')
</div>
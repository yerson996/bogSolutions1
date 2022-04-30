
<style>
.clase_table{
  border-collapse: separate;
  border-spacing: 10;
  border: 4px double gray;
  border-radius: 15px;
  -moz-border-radius: 20px;
  padding: 5px;
  text-align: center;
}

.clase {
  border-collapse: separate;
  border-spacing: 2;
  border: 2px solid gray;
  border-radius: 2px;
  padding: 5px;

}

.linea {
    border: 3px solid;
}


#col1 {
float: left;
width: 28%;
margin-right: 0.5em;
margin-bottom: 1em;
}

#col2 {
float: left;
width: 20%;
margin-right: 1em;
margin-bottom: 1em;
}

#col3 {
float: right;
width: 28%;
margin-right: 0.5em;
margin-bottom: 1em;
}

#col4 {
float: right;
width: 20%;
margin-right: 1em;
margin-bottom: 1em;
}

#izq {
float: left;
width: 48.5%;
margin-right: 1em;
margin-bottom: 1em;
}

#der {
float: right;
width: 48.5%;
margin-right: 1em;
margin-bottom: 1em;
}

#izq1 {
float: left;
font-size: 30px; 
font-weight: 1000;"
margin-right: 1em;
margin-bottom: 1em;
}

#der1 {
float: right;
font-size: 30px; 
font-weight: 1000;"
margin-right: 1em;
margin-bottom: 1em;
}

#center
{
    align: center;
    text-align: center;
    width: "100%";
}

#W70
{
    width: 70%;
}

#W20
{
    width: 20%;
}
#W10
{
    width: 10%;
}
#W35
{
    width: 35%;
}

#first
{
    align: center;
    text-align: center;
    width: "100%";
    background-color: #e6e6e6;
}

.tables td, .tables th {
  padding: 0.4rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
  border-left: 1px solid #dee2e6;
  text-align: center;
}





</style>

<?php

use Illuminate\Support\Facades\DB;

$nombreLegal=DB::table('clientes')->where('id', $remisione->doc)->value('nombreLegal');
$nombre1=DB::table('clientes')->where('id', $remisione->doc)->value('nombre1');
$nombre2=DB::table('clientes')->where('id', $remisione->doc)->value('nombre2');
$apellido1=DB::table('clientes')->where('id', $remisione->doc)->value('apellido1');
$apellido2=DB::table('clientes')->where('id', $remisione->doc)->value('apellido2');
$direccion=DB::table('clientes')->where('id', $remisione->doc)->value('direccion');
$ciudad=DB::table('clientes')->where('id', $remisione->doc)->value('ciudad');
$cel=DB::table('clientes')->where('id', $remisione->doc)->value('cel');
$correo=DB::table('clientes')->where('id', $remisione->doc)->value('correo');
$tipoDoc=DB::table('clientes')->where('id', $remisione->doc)->value('tipoDoc');

$C1 = DB::table('productos')->where('id', $remisione->item1)->value("precio");
$C2 = DB::table('productos')->where('id', $remisione->item2)->value("precio");
$C3 = DB::table('productos')->where('id', $remisione->item3)->value("precio");
$C4 = DB::table('productos')->where('id', $remisione->item4)->value("precio");
$C5 = DB::table('productos')->where('id', $remisione->item5)->value("precio");
$C6 = DB::table('productos')->where('id', $remisione->item6)->value("precio");
$C7 = DB::table('productos')->where('id', $remisione->item7)->value("precio");
$C8 = DB::table('productos')->where('id', $remisione->item8)->value("precio");
$C9 = DB::table('productos')->where('id', $remisione->item9)->value("precio");
$C10 = DB::table('productos')->where('id', $remisione->item10)->value("precio");
$C11 = DB::table('productos')->where('id', $remisione->item11)->value("precio");
$C12 = DB::table('productos')->where('id', $remisione->item12)->value("precio");
$C13 = DB::table('productos')->where('id', $remisione->item13)->value("precio");
$C14 = DB::table('productos')->where('id', $remisione->item14)->value("precio");
$C15 = DB::table('productos')->where('id', $remisione->item15)->value("precio");

$I1 = DB::table('productos')->where('id', $remisione->item1)->value("item");
$I2 = DB::table('productos')->where('id', $remisione->item2)->value("item");
$I3 = DB::table('productos')->where('id', $remisione->item3)->value("item");
$I4 = DB::table('productos')->where('id', $remisione->item4)->value("item");
$I5 = DB::table('productos')->where('id', $remisione->item5)->value("item");
$I6 = DB::table('productos')->where('id', $remisione->item6)->value("item");
$I7 = DB::table('productos')->where('id', $remisione->item7)->value("item");
$I8 = DB::table('productos')->where('id', $remisione->item8)->value("item");
$I9 = DB::table('productos')->where('id', $remisione->item9)->value("item");
$I10 = DB::table('productos')->where('id', $remisione->item10)->value("item");
$I11 = DB::table('productos')->where('id', $remisione->item11)->value("item");
$I12 = DB::table('productos')->where('id', $remisione->item12)->value("item");
$I13 = DB::table('productos')->where('id', $remisione->item13)->value("item");
$I14 = DB::table('productos')->where('id', $remisione->item14)->value("item");
$I15 = DB::table('productos')->where('id', $remisione->item15)->value("item");

$N1 = DB::table('productos')->where('id', $remisione->item1)->value("nombre");
$N2 = DB::table('productos')->where('id', $remisione->item2)->value("nombre");
$N3 = DB::table('productos')->where('id', $remisione->item3)->value("nombre");
$N4 = DB::table('productos')->where('id', $remisione->item4)->value("nombre");
$N5 = DB::table('productos')->where('id', $remisione->item5)->value("nombre");
$N6 = DB::table('productos')->where('id', $remisione->item6)->value("nombre");
$N7 = DB::table('productos')->where('id', $remisione->item7)->value("nombre");
$N8 = DB::table('productos')->where('id', $remisione->item8)->value("nombre");
$N9 = DB::table('productos')->where('id', $remisione->item9)->value("nombre");
$N10 = DB::table('productos')->where('id', $remisione->item10)->value("nombre");
$N11 = DB::table('productos')->where('id', $remisione->item11)->value("nombre");
$N12 = DB::table('productos')->where('id', $remisione->item12)->value("nombre");
$N13 = DB::table('productos')->where('id', $remisione->item13)->value("nombre");
$N14 = DB::table('productos')->where('id', $remisione->item14)->value("nombre");
$N15 = DB::table('productos')->where('id', $remisione->item15)->value("nombre");

$P1 = $C1 * $remisione->cant1;
$P2 = $C2 * $remisione->cant2;
$P3 = $C3 * $remisione->cant3;
$P4 = $C4 * $remisione->cant4;
$P5 = $C5 * $remisione->cant5;
$P6 = $C6 * $remisione->cant6;
$P7 = $C7 * $remisione->cant7;
$P8 = $C8 * $remisione->cant8;
$P9 = $C9 * $remisione->cant9;
$P10 = $C10 * $remisione->cant10;
$P11 = $C11 * $remisione->cant11;
$P12 = $C12 * $remisione->cant12;
$P13 = $C13 * $remisione->cant13;
$P14 = $C14 * $remisione->cant14;
$P15 = $C15 * $remisione->cant15;

$Total=$P1+$P2+$P3+$P4+$P5+$P6+$P7+$P8+$P9+$P10+$P11+$P12+$P13+$P14+$P15;

?>

            
            


            <table id="izq1" class="ini">
                <td>
                    <tr><img style="padding: 0px 0px 0px 2rem; width: 25%;" src="http://localhost:8000/logo.jpeg"></tr>
                    <tr><strong style="font-size: 25px;">REMISIÓN No. RM-{{$remisione->id}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong></tr>
                </td>
            </table>

            <table id="der1" class="ini">
                <td>
                    <tr><img style="padding: 0px 0px 0px 2rem; width: 25%;" src="http://localhost:8000/logo.jpeg"></tr>
                    <tr>REMISIÓN No. RM-{{$remisione->id}}</tr>
                </td>
            </table>

           


                    

        <div class="card-body">
            <div class="form-group">

                    <!--Tabla Cliente-->
                    <table id="col1" class="clase_table table-striped table-hover" with="30%">
                    <thead>
                        <tr>
                            <th id="center" colspan="4">CLIENTE</th>
                        </tr>
                    </thead>
                        <tr>
                            <th id="center" colspan="4">&nbsp;</th>
                        </tr>

                        <tr>
                            <th>Nombre:</th>
                            <td colspan="3">
                                <u>
                                {{$nombre1}}
                                {{$nombre2}}
                                {{$apellido1}}
                                {{$apellido2}}
                                {{$nombreLegal}}
                                </u>
                            </td>
                        </tr>
                        <tr>
                            <th>Dirección:</th>
                            <td colspan="3">  <u>{{ $direccion }}</u></td>
                        </tr>
                        <tr>
                            <th>Ciudad:</th>
                            <td><u>{{ $ciudad }}</u></td>
                            <th>{{ $tipoDoc }}:</th>
                            <td><u>{{ $remisione->doc }}</u></td>
                        </tr>
                        <tr>
                            <th>Celular:</th>
                            <td><u>{{ $cel }}</u></td>
                            <th>Correo:</th>
                            <td><u>{{ $correo }}</u></td>
                        </tr>  
                    </table>


                <div class="form-group">
                <table id="col2" class="clase_table table-striped table-hover" with="19%">
                    <thead>
                        <tr>
                            <th id="center" colspan="2">DATOS DE ENTREGA</th>
                        </tr>
                    </thead>
                        <tr>
                            <th>Fecha:</th>
                            <td><u></u></td>
                        </tr>
                        <tr>
                            <th>Dirección:</th>
                            <td> <u></u></td>
                        </tr>
                        <tr>
                            <th>Ciudad:</th>
                            <td><u>{{ $ciudad }}</u></td>
                        </tr>
                        <tr>
                            <th>Vencimiento:</th>
                            <td><u></u></td>
                        </tr>
                        <tr>
                            <th>Condición:</th>
                            <td><u></u></td>
                        </tr>
                </table>
                
                <div class="form-group">
                <table id="col4" class="clase_table table-striped table-hover" with="30%">
                    <thead>
                        <tr>
                            <th id="center" colspan="2">DATOS DE ENTREGA</th>
                        </tr>
                    </thead>
                        <tr>
                            <th>Fecha:</th>
                            <td><u></u></td>
                        </tr>
                        <tr>
                            <th>Dirección:</th>
                            <td> <u></u></td>
                        </tr>
                        <tr>
                            <th>Ciudad:</th>
                            <td><u>{{ $ciudad }}</u></td>
                        </tr>
                        <tr>
                            <th>Vencimiento:</th>
                            <td><u></u></td>
                        </tr>
                        <tr>
                            <th>Condición:</th>
                            <td><u></u></td>
                        </tr>
                </table>

                    <!--Tabla Cliente-->
                    
                    <table id="col3" class="clase_table table-striped table-hover" with="30%">
                    <thead>
                        <tr>
                            <th id="center" colspan="4">CLIENTE</th>
                        </tr>
                    </thead>
                        <tr>
                            <th id="center" colspan="4">&nbsp;</th>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td colspan="3">
                                <u>
                                {{$nombre1}}
                                {{$nombre2}}
                                {{$apellido1}}
                                {{$apellido2}}
                                {{$nombreLegal}}
                                </u>
                            </td>
                        </tr>
                        <tr>
                            <th>Dirección:</th>
                            <td colspan="3">  <u>{{ $direccion }}</u></td>
                        </tr>
                        <tr>
                            <th>Ciudad:</th>
                            <td><u>{{ $ciudad }}</u></td>
                            <th>{{ $tipoDoc }}:</th>
                            <td><u>{{ $remisione->doc }}</u></td>
                        </tr>
                        <tr>
                            <th>Celular:</th>
                            <td><u>{{ $cel }}</u></td>
                            <th>Correo:</th>
                            <td><u>{{ $correo }}</u></td>
                        </tr>  
                    </table>
            </div>
                <!-- Izquierda -->

                <table id="izq" class="clase tables" with="30%">
                <thead>
                        <tr>
                            <th id="first">Item</th>
                            <th id="first">Descripción</th>
                            <th id="first">Cant.</th>
                            <th id="first">Valor U. Nto</th>
                            <th id="first">Valor Total</th>
                        </tr>
                    </thead>
                        <tr>
                            <td>{{ $I1 }}</td>
                            <td>{{ $N1 }}</td>
                            <td>{{ $remisione->cant1 }}</td>
                            <td>{{ $C1 }}</td>
                            <td>{{ $P1 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I2 }}</td>
                            <td>{{ $N2 }}</td>
                            <td>{{ $remisione->cant2 }}</td>
                            <td>{{ $C2 }}</td>
                            <td>{{ $P2 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I3 }}</td>
                            <td>{{ $N3 }}</td>
                            <td>{{ $remisione->cant3 }}</td>
                            <td>{{ $C3 }}</td>
                            <td>{{ $P3 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I4 }}</td>
                            <td>{{ $N4 }}</td>
                            <td>{{ $remisione->cant4 }}</td>
                            <td>{{ $C4 }}</td>
                            <td>{{ $P4 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I5 }}</td>
                            <td>{{ $N5 }}</td>
                            <td>{{ $remisione->cant5 }}</td>
                            <td>{{ $C5 }}</td>
                            <td>{{ $P5 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I6 }}</td>
                            <td>{{ $N6 }}</td>
                            <td>{{ $remisione->cant6 }}</td>
                            <td>{{ $C6 }}</td>
                            <td>{{ $P6 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I7 }}</td>
                            <td>{{ $N7 }}</td>
                            <td>{{ $remisione->cant7 }}</td>
                            <td>{{ $C7 }}</td>
                            <td>{{ $P7 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I8 }}</td>
                            <td>{{ $N8 }}</td>
                            <td>{{ $remisione->cant8 }}</td>
                            <td>{{ $C8 }}</td>
                            <td>{{ $P8 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I9 }}</td>
                            <td>{{ $N9 }}</td>
                            <td>{{ $remisione->cant9 }}</td>
                            <td>{{ $C9 }}</td>
                            <td>{{ $P9 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I10 }}</td>
                            <td>{{ $N10 }}</td>
                            <td>{{ $remisione->cant10 }}</td>
                            <td>{{ $C10 }}</td>
                            <td>{{ $P10 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I11 }}</td>
                            <td>{{ $N11 }}</td>
                            <td>{{ $remisione->cant11 }}</td>
                            <td>{{ $C11 }}</td>
                            <td>{{ $P11 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I12 }}</td>
                            <td>{{ $N12 }}</td>
                            <td>{{ $remisione->cant12 }}</td>
                            <td>{{ $C12 }}</td>
                            <td>{{ $P12 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I13 }}</td>
                            <td>{{ $N13 }}</td>
                            <td>{{ $remisione->cant13 }}</td>
                            <td>{{ $C13 }}</td>
                            <td>{{ $P13 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I14 }}</td>
                            <td>{{ $N14 }}</td>
                            <td>{{ $remisione->cant14 }}</td>
                            <td>{{ $C14 }}</td>
                            <td>{{ $P14 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I15 }}</td>
                            <td>{{ $N15 }}</td>
                            <td>{{ $remisione->cant15 }}</td>
                            <td>{{ $C15 }}</td>
                            <td>{{ $P15 }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Notas: {{$remisione->notas}}</td>
                            <td id="first">Total</td>
                            <td colspan="2">${{ number_format($Total, 2) }}</td>
                        </tr>
                        <tr>
                            <th colspan="2" style="height: 120px;">Firma Autorizada:</th>
                            <th colspan="4" style="height: 120px;">Recibido cliente:</th>
                        </tr>
                        <tr>
                            <th colspan="10">GRACIAS POR CONFIAR EN NOSOTROS</th>
                        </tr>
                    </table>

                <!-- Derecha -->
                <table id="der" class="clase tables" with="30%">
                    <thead>
                        <tr>
                            <th id="first">Item</th>
                            <th id="first">Descripción</th>
                            <th id="first">Cant.</th>
                            <th id="first">Valor U. Nto</th>
                            <th id="first">Valor Total</th>
                        </tr>
                    </thead>
                        <tr>
                            <td>{{ $I1 }}</td>
                            <td>{{ $N1 }}</td>
                            <td>{{ $remisione->cant1 }}</td>
                            <td>{{ $C1 }}</td>
                            <td>{{ $P1 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I2 }}</td>
                            <td>{{ $N2 }}</td>
                            <td>{{ $remisione->cant2 }}</td>
                            <td>{{ $C2 }}</td>
                            <td>{{ $P2 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I3 }}</td>
                            <td>{{ $N3 }}</td>
                            <td>{{ $remisione->cant3 }}</td>
                            <td>{{ $C3 }}</td>
                            <td>{{ $P3 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I4 }}</td>
                            <td>{{ $N4 }}</td>
                            <td>{{ $remisione->cant4 }}</td>
                            <td>{{ $C4 }}</td>
                            <td>{{ $P4 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I5 }}</td>
                            <td>{{ $N5 }}</td>
                            <td>{{ $remisione->cant5 }}</td>
                            <td>{{ $C5 }}</td>
                            <td>{{ $P5 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I6 }}</td>
                            <td>{{ $N6 }}</td>
                            <td>{{ $remisione->cant6 }}</td>
                            <td>{{ $C6 }}</td>
                            <td>{{ $P6 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I7 }}</td>
                            <td>{{ $N7 }}</td>
                            <td>{{ $remisione->cant7 }}</td>
                            <td>{{ $C7 }}</td>
                            <td>{{ $P7 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I8 }}</td>
                            <td>{{ $N8 }}</td>
                            <td>{{ $remisione->cant8 }}</td>
                            <td>{{ $C8 }}</td>
                            <td>{{ $P8 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I9 }}</td>
                            <td>{{ $N9 }}</td>
                            <td>{{ $remisione->cant9 }}</td>
                            <td>{{ $C9 }}</td>
                            <td>{{ $P9 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I10 }}</td>
                            <td>{{ $N10 }}</td>
                            <td>{{ $remisione->cant10 }}</td>
                            <td>{{ $C10 }}</td>
                            <td>{{ $P10 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I11 }}</td>
                            <td>{{ $N11 }}</td>
                            <td>{{ $remisione->cant11 }}</td>
                            <td>{{ $C11 }}</td>
                            <td>{{ $P11 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I12 }}</td>
                            <td>{{ $N12 }}</td>
                            <td>{{ $remisione->cant12 }}</td>
                            <td>{{ $C12 }}</td>
                            <td>{{ $P12 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I13 }}</td>
                            <td>{{ $N13 }}</td>
                            <td>{{ $remisione->cant13 }}</td>
                            <td>{{ $C13 }}</td>
                            <td>{{ $P13 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I14 }}</td>
                            <td>{{ $N14 }}</td>
                            <td>{{ $remisione->cant14 }}</td>
                            <td>{{ $C14 }}</td>
                            <td>{{ $P14 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I15 }}</td>
                            <td>{{ $N15 }}</td>
                            <td>{{ $remisione->cant15 }}</td>
                            <td>{{ $C15 }}</td>
                            <td>{{ $P15 }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Notas: {{$remisione->notas}}</td>
                            <td id="first">Total</td>
                            <td colspan="2">${{ number_format($Total, 2) }}</td>
                        </tr>
                        <tr>
                            <th colspan="2" style="height: 120px;">Firma Autorizada:</th>
                            <th colspan="4" style="height: 120px;">Recibido cliente:</th>
                        </tr>
                        <tr>
                            <th colspan="10">GRACIAS POR CONFIAR EN NOSOTROS</th>
                        </tr>
                    </table>
            </div>
            </div>
            </div>
                

    </section>
                    

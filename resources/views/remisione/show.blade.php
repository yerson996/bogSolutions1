
<style>
.clase_table{
  border-collapse: separate;
  border-spacing: 10;
  border: 4px double gray;
  border-radius: 15px;
  -moz-border-radius: 20px;
  padding: 5px;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
}

.clase {
  border-collapse: separate;
  border-spacing: 2;
  border: 2px solid gray;
  border-radius: 2px;
  padding: 5px;
  font-family: Arial, Helvetica, sans-serif;

}

.linea {
    border: 3px solid;
}


#col1 {
float: left;
width: 28%;
margin-right: 0.5em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
}

#col2 {
float: left;
width: 20%;
margin-right: 1em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
}

#col3 {
float: right;
width: 28%;
margin-right: 0.5em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
}

#col4 {
float: right;
width: 20%;
margin-right: 1em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
}

#izq {
float: left;
width: 48.5%;
margin-right: 1em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
}

#der {
float: right;
width: 48.5%;
margin-right: 1em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
}

#izq1 {
float: left;
font-size: 30px; 
font-weight: 1000;"
margin-right: 1em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
}

#der1 {
float: right;
font-size: 30px; 
font-weight: 1000;"
margin-right: 1em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
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
    font-family: Arial, Helvetica, sans-serif;
}

.tables td, .tables th {
  padding: 0.4rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
  border-left: 1px solid #dee2e6;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
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

$C1 = $remisione->precio1;
$C2 = $remisione->precio2;
$C3 = $remisione->precio3;
$C4 = $remisione->precio4;
$C5 = $remisione->precio5;
$C6 = $remisione->precio6;
$C7 = $remisione->precio7;
$C8 = $remisione->precio8;
$C9 = $remisione->precio9;
$C10 = $remisione->precio10;
$C11 = $remisione->precio11;
$C12 = $remisione->precio12;
$C13 = $remisione->precio13;
$C14 = $remisione->precio14;
$C15 = $remisione->precio15;

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

            
            
<body class="font-family: Arial, Helvetica, sans-serif;">

            <table id="izq1">
                <td>
                <tr><img style="padding: 0px 0px 0px 2rem; width: 25%;" src="http://localhost:8000/logo.png"></tr>   
                    <tr style="font-size: 25px; font-family: Arial, Helvetica, sans-serif;">
                    <strong style="font-size: 25px; font-family: Arial, Helvetica, sans-serif;"> &nbsp;&nbsp;&nbsp;REMISIÓN No. RM-{{$remisione->id}}&nbsp;&nbsp;&nbsp;<strong>
                    </tr>      
                </td>
            </table>

            <table id="der1">
                <td>
                <tr><img style="padding: 0px 0px 0px 2rem; width: 25%;" src="http://localhost:8000/logo.png"></tr>
                    <tr >
                        
                        <strong style="font-size: 25px; font-family: Arial, Helvetica, sans-serif;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REMISIÓN No. RM-{{$remisione->id}} <br> <strong>
                    </tr>   
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
                            <td><u>{{$remisione->created_at->format('d-m-Y')}}</u></td>
                        </tr>
                        <tr>
                            <th>Vencimiento:</th>
                            <td><u>{{$remisione->created_at->format('d-m-Y')}}</u></td>
                        </tr>
                        <tr>
                            <th>Condición:</th>
                            <td><u>{{$remisione->pago}}</u></td>
                        </tr>
                        <tr>
                            <th>Celular:</th>
                            <td><u>{{ $cel }}</u></td>
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
                            <td><u>{{$remisione->created_at->format('d-m-Y')}}</u></td>
                        </tr>
                        <tr>
                            <th>Vencimiento:</th>
                            <td><u>{{$remisione->created_at->format('d-m-Y')}}</u></td>
                        </tr>
                        <tr>
                            <th>Condición:</th>
                            <td><u>{{$remisione->pago}}</u></td>
                        </tr>
                        <tr>
                            <th>Celular:</th>
                            <td><u>{{ $cel }}</u></td>
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
                            <td>{{ $remisione->precio1 }}</td>
                            <td>{{ $remisione->tprecio1 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I2 }}</td>
                            <td>{{ $N2 }}</td>
                            <td>{{ $remisione->cant2 }}</td>
                            <td>{{ $remisione->precio2 }}</td>
                            <td>{{ $remisione->tprecio2 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I3 }}</td>
                            <td>{{ $N3 }}</td>
                            <td>{{ $remisione->cant3 }}</td>
                            <td>{{ $remisione->precio3 }}</td>
                            <td>{{ $remisione->tprecio3 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I4 }}</td>
                            <td>{{ $N4 }}</td>
                            <td>{{ $remisione->cant4 }}</td>
                            <td>{{ $remisione->precio4 }}</td>
                            <td>{{ $remisione->tprecio4 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I5 }}</td>
                            <td>{{ $N5 }}</td>
                            <td>{{ $remisione->cant5 }}</td>
                            <td>{{ $remisione->precio5 }}</td>
                            <td>{{ $remisione->tprecio5 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I6 }}</td>
                            <td>{{ $N6 }}</td>
                            <td>{{ $remisione->cant6 }}</td>
                            <td>{{ $remisione->precio6 }}</td>
                            <td>{{ $remisione->tprecio6 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I7 }}</td>
                            <td>{{ $N7 }}</td>
                            <td>{{ $remisione->cant7 }}</td>
                            <td>{{ $remisione->precio7 }}</td>
                            <td>{{ $remisione->tprecio7 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I8 }}</td>
                            <td>{{ $N8 }}</td>
                            <td>{{ $remisione->cant8 }}</td>
                            <td>{{ $remisione->precio8 }}</td>
                            <td>{{ $remisione->tprecio8 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I9 }}</td>
                            <td>{{ $N9 }}</td>
                            <td>{{ $remisione->cant9 }}</td>
                            <td>{{ $remisione->precio9 }}</td>
                            <td>{{ $remisione->tprecio9 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I10 }}</td>
                            <td>{{ $N10 }}</td>
                            <td>{{ $remisione->cant10 }}</td>
                            <td>{{ $remisione->precio10 }}</td>
                            <td>{{ $remisione->tprecio10 }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Notas: </td>
                            <td id="first">Total</td>
                            <td colspan="2">${{ number_format($Total, 2) }}</td>
                        </tr>
                        <tr>
                            <th colspan="2" style="height: 120px;">{{$remisione->notas}}</th>
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
                            <td>{{ $remisione->precio1 }}</td>
                            <td>{{ $remisione->tprecio1 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I2 }}</td>
                            <td>{{ $N2 }}</td>
                            <td>{{ $remisione->cant2 }}</td>
                            <td>{{ $remisione->precio2 }}</td>
                            <td>{{ $remisione->tprecio2 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I3 }}</td>
                            <td>{{ $N3 }}</td>
                            <td>{{ $remisione->cant3 }}</td>
                            <td>{{ $remisione->precio3 }}</td>
                            <td>{{ $remisione->tprecio3 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I4 }}</td>
                            <td>{{ $N4 }}</td>
                            <td>{{ $remisione->cant4 }}</td>
                            <td>{{ $remisione->precio4 }}</td>
                            <td>{{ $remisione->tprecio4 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I5 }}</td>
                            <td>{{ $N5 }}</td>
                            <td>{{ $remisione->cant5 }}</td>
                            <td>{{ $remisione->precio5 }}</td>
                            <td>{{ $remisione->tprecio5 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I6 }}</td>
                            <td>{{ $N6 }}</td>
                            <td>{{ $remisione->cant6 }}</td>
                            <td>{{ $remisione->precio6 }}</td>
                            <td>{{ $remisione->tprecio6 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I7 }}</td>
                            <td>{{ $N7 }}</td>
                            <td>{{ $remisione->cant7 }}</td>
                            <td>{{ $remisione->precio7 }}</td>
                            <td>{{ $remisione->tprecio7 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I8 }}</td>
                            <td>{{ $N8 }}</td>
                            <td>{{ $remisione->cant8 }}</td>
                            <td>{{ $remisione->precio8 }}</td>
                            <td>{{ $remisione->tprecio8 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I9 }}</td>
                            <td>{{ $N9 }}</td>
                            <td>{{ $remisione->cant9 }}</td>
                            <td>{{ $remisione->precio9 }}</td>
                            <td>{{ $remisione->tprecio9 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $I10 }}</td>
                            <td>{{ $N10 }}</td>
                            <td>{{ $remisione->cant10 }}</td>
                            <td>{{ $remisione->precio10 }}</td>
                            <td>{{ $remisione->tprecio10 }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Notas: </td>
                            <td id="first">Total</td>
                            <td colspan="2">${{ number_format($Total, 2) }}</td>
                        </tr>
                        <tr>
                            <th colspan="2" style="height: 120px;">{{$remisione->notas}}</th>
                            <th colspan="4" style="height: 120px;">Recibido cliente:</th>
                        </tr>
                        <tr>
                            <th colspan="10">GRACIAS POR CONFIAR EN NOSOTROS</th>
                        </tr>
                    </table>
            </div>
            </div>
            </div>
 
                
            </body>
                

    </section>
                    

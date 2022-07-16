
<style>
.clase_table{
  border-collapse: separate;
  border-spacing: 10;
  border: 4px double rgb(0, 0, 0);
  border-radius: 15px;
  -moz-border-radius: 20px;
  padding: 5px;
  text-align: left;
  font-family: Arial, Helvetica, sans-serif;
  text-transform: uppercase;
}

.clase {
  border-collapse: separate;
  border-spacing: 2;
  border: 2px solid rgb(0, 0, 0);
  border-radius: 2px;
  padding: 5px;
  text-align: left;
  font-family: Arial, Helvetica, sans-serif;
  text-transform: uppercase;
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
font-size: 12px;
}

#col2 {
float: left;
width: 20%;
margin-right: 1em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
}

#col3 {
float: right;
width: 28%;
margin-right: 0.5em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
}

#col4 {
float: right;
width: 20%;
margin-right: 1em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
}

#izq {
float: left;
width: 48.5%;
margin-right: 1em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
}

#der {
float: right;
width: 48.5%;
margin-right: 1em;
margin-bottom: 1em;
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
}

#izq1 {
float: left;
width: 48.5%;
font-size: 20px;
font-weight: 600;
text-align: center;
font-family: Arial, Helvetica, sans-serif;
margin-top: 35px;
margin-bottom: 20px;
}

#der1 {
float: right;
width: 48.5%;
font-size: 20px;
font-weight: 600;
margin-right: 0.5em;
text-align: center;
font-family: Arial, Helvetica, sans-serif;
margin-top: 35px;
margin-bottom: 20px;
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
    align: left;
    text-align: left;
    width: "100%";
    background-color: #acacac;
    font-family: Arial, Helvetica, sans-serif;
}

.tables td, .tables th {
  padding: 0.4rem;
  vertical-align: top;
  border-left: 2px solid #3b3b3b;
  text-align: left;
  font-family: Arial, Helvetica, sans-serif;
}

.table tr{
border: 2px solid #3b3b3b;
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
<tr>
    <td style="width: 60%">
        <img style="width: 350px; margin-left: 16%; margin-right: 30%;" src="http://localhost:8000/logo.png" align="middle">
    </td>
    <td style="width: 40%">
        REMISIÓN <br> RM-{{$remisione->id}}
    </td>
</tr>
</table>

<table id="der1">
<tr>
    <td style="width: 60%">
        <img style="width: 350px; margin-left: 16%; margin-right: 30%;" src="http://localhost:8000/logo.png" align="middle">
    </td>
    <td style="width: 40%">
        REMISIÓN <br> RM-{{$remisione->id}}
    </td>
</tr>
</table>



        <div class="card-body">
            <div class="form-group">

                    <!--Tabla Cliente-->
                    <table id="col1" class="clase_table table-striped table-hover" with="30%">
                    <thead>
                        <tr>
                            <th id="center" style="font-size:15px;" colspan="4"><strong>CLIENTE</strong> </th>
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
                        <tr>
                            <th>Celular:</th>
                            <td><u>{{ $cel }}</u></td>
                        </tr>
                    </table>



                <div class="form-group">
                <table id="col2" class="clase_table table-striped table-hover" with="19%">
                    <thead>
                        <tr>
                            <th id="center" style="font-size:15px;" colspan="2"><strong>DATOS DE ENTREGA</strong> </th>
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
                            <th>&nbsp;</th>
                        </tr>

                </table>

                <div class="form-group">
                <table id="col4" class="clase_table table-striped table-hover" with="30%">
                    <thead>
                        <tr>
                            <th id="center" style="font-size:15px;" colspan="2"><strong>DATOS DE ENTREGA</strong> </th>
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
                            <th>&nbsp;</th>
                        </tr>

                </table>

                    <!--Tabla Cliente-->

                    <table id="col3" class="clase_table table-striped table-hover" with="30%">
                    <thead>
                        <tr>
                            <th id="center" style="font-size:15px;" colspan="4"><strong>CLIENTE</strong> </th>
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
                        <tr>
                            <th>Celular:</th>
                            <td><u>{{ $cel }}</u></td>
                        </tr>
                    </table>
            </div>
                <!-- Izquierda -->

                <table id="izq" class="clase tables" with="30%" style="border-collapse: collapse;">
                <thead>
                        <tr>
                            <th id="first" style="border: 2px solid #3b3b3b;">ITEM</th>
                            <th id="first" style="border: 2px solid #3b3b3b;">DESCRIPCIÓN</th>
                            <th id="first" style="border: 2px solid #3b3b3b;">CANT.</th>
                            <th id="first" style="border: 2px solid #3b3b3b;">VALOR U. NTO</th>
                            <th id="first" style="border: 2px solid #3b3b3b;">VALOR TOTAL</th>
                        </tr>
                    </thead>
                        <tr>

                            <td>&nbsp;{{ $I1 }}</td>
                            <td>{{ $N1 }}</td>
                            <td>{{ $remisione->cant1 }}</td>
                            <?php
                            if(isset($N1))
                            {
                            ?>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->precio1, 2) }}</td>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio1, 2) }}</td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>&nbsp;{{ $I2 }}</td>
                            <td>{{ $N2 }}</td>
                            <td>{{ $remisione->cant2 }}</td>
                            <?php
                            if(isset($N2))
                            {
                            ?>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->precio2, 2) }}</td>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio2, 2) }}</td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>&nbsp;{{ $I3 }}</td>
                            <td>{{ $N3 }}</td>
                            <td>{{ $remisione->cant3 }}</td>
                            <?php
                            if(isset($N3))
                            {
                            ?>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->precio3, 2) }}</td>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio3, 2) }}</td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>&nbsp;{{ $I4 }}</td>
                            <td>{{ $N4 }}</td>
                            <td>{{ $remisione->cant4 }}</td>
                            <?php
                            if(isset($N4))
                            {
                            ?>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->precio4, 2) }}</td>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio4, 2) }}</td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>&nbsp;{{ $I5 }}</td>
                            <td>{{ $N5 }}</td>
                            <td>{{ $remisione->cant5 }}</td>
                            <?php
                            if(isset($N5))
                            {
                            ?>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->precio5, 2) }}</td>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio5, 2) }}</td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>&nbsp;{{ $I6 }}</td>
                            <td>{{ $N6 }}</td>
                            <td>{{ $remisione->cant6 }}</td>
                            <?php
                            if(isset($N6))
                            {
                            ?>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->precio6, 2) }}</td>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio6, 2) }}</td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>&nbsp;{{ $I7 }}</td>
                            <td>{{ $N7 }}</td>
                            <td>{{ $remisione->cant7 }}</td>
                            <?php
                            if(isset($N7))
                            {
                            ?>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->precio7, 2) }}</td>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio7, 2) }}</td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>&nbsp;{{ $I8 }}</td>
                            <td>{{ $N8 }}</td>
                            <td>{{ $remisione->cant8 }}</td>
                            <?php
                            if(isset($N8))
                            {
                            ?>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->precio8, 2) }}</td>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio8, 2) }}</td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>&nbsp;{{ $I9 }}</td>
                            <td>{{ $N9 }}</td>
                            <td>{{ $remisione->cant9 }}</td>
                            <?php
                            if(isset($N9))
                            {
                            ?>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->precio9, 2) }}</td>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio9, 2) }}</td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>&nbsp;{{ $I10 }}</td>
                            <td>{{ $N10 }}</td>
                            <td>{{ $remisione->cant10 }}</td>
                            <?php
                            if(isset($N10))
                            {
                            ?>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->precio10, 2) }}</td>
                            <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio10, 2) }}</td>
                            <?php
                            }
                            else
                            {
                            ?>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td colspan="3" style="border: 2px solid #3b3b3b;"> <b> Notas: </b> </td>
                            <td style="text-align: right !important; border: 2px solid #3b3b3b;" id="first" colspan="1" ><b> Total </b></td>
                            <td style="text-align: right !important; border: 2px solid #3b3b3b;"><b> ${{ number_format($Total, 2) }}</b></td>
                        </tr>
                        <tr>
                            <th colspan="3" style="height: 120px;">{{$remisione->notas}}</th>
                            <th colspan="2" style="height: 120px; border: 2px solid #3b3b3b;">Recibido cliente:</th>
                        </tr>
                        <tr>
                            <th style="text-align: center; border: 2px solid #3b3b3b;" colspan="10">GRACIAS POR CONFIAR EN NOSOTROS</th>
                        </tr>
                    </table>

                <!-- Derecha -->
                <table id="der" class="clase tables" with="30%" style="border-collapse: collapse;">
                    <thead>
                            <tr>
                                <th id="first" style="border: 2px solid #3b3b3b;">ITEM</th>
                                <th id="first" style="border: 2px solid #3b3b3b;">DESCRIPCIÓN</th>
                                <th id="first" style="border: 2px solid #3b3b3b;">CANT.</th>
                                <th id="first" style="border: 2px solid #3b3b3b;">VALOR U. NTO</th>
                                <th id="first" style="border: 2px solid #3b3b3b;">VALOR TOTAL</th>
                            </tr>
                        </thead>
                            <tr>

                                <td>&nbsp;{{ $I1 }}</td>
                                <td>{{ $N1 }}</td>
                                <td>{{ $remisione->cant1 }}</td>
                                <?php
                                if(isset($N1))
                                {
                                ?>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->precio1, 2) }}</td>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio1, 2) }}</td>
                                <?php
                                }
                                else
                                {
                                ?>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td>&nbsp;{{ $I2 }}</td>
                                <td>{{ $N2 }}</td>
                                <td>{{ $remisione->cant2 }}</td>
                                <?php
                                if(isset($N2))
                                {
                                ?>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->precio2, 2) }}</td>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio2, 2) }}</td>
                                <?php
                                }
                                else
                                {
                                ?>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td>&nbsp;{{ $I3 }}</td>
                                <td>{{ $N3 }}</td>
                                <td>{{ $remisione->cant3 }}</td>
                                <?php
                                if(isset($N3))
                                {
                                ?>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->precio3, 2) }}</td>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio3, 2) }}</td>
                                <?php
                                }
                                else
                                {
                                ?>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td>&nbsp;{{ $I4 }}</td>
                                <td>{{ $N4 }}</td>
                                <td>{{ $remisione->cant4 }}</td>
                                <?php
                                if(isset($N4))
                                {
                                ?>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->precio4, 2) }}</td>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio4, 2) }}</td>
                                <?php
                                }
                                else
                                {
                                ?>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td>&nbsp;{{ $I5 }}</td>
                                <td>{{ $N5 }}</td>
                                <td>{{ $remisione->cant5 }}</td>
                                <?php
                                if(isset($N5))
                                {
                                ?>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->precio5, 2) }}</td>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio5, 2) }}</td>
                                <?php
                                }
                                else
                                {
                                ?>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td>&nbsp;{{ $I6 }}</td>
                                <td>{{ $N6 }}</td>
                                <td>{{ $remisione->cant6 }}</td>
                                <?php
                                if(isset($N6))
                                {
                                ?>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->precio6, 2) }}</td>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio6, 2) }}</td>
                                <?php
                                }
                                else
                                {
                                ?>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td>&nbsp;{{ $I7 }}</td>
                                <td>{{ $N7 }}</td>
                                <td>{{ $remisione->cant7 }}</td>
                                <?php
                                if(isset($N7))
                                {
                                ?>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->precio7, 2) }}</td>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio7, 2) }}</td>
                                <?php
                                }
                                else
                                {
                                ?>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td>&nbsp;{{ $I8 }}</td>
                                <td>{{ $N8 }}</td>
                                <td>{{ $remisione->cant8 }}</td>
                                <?php
                                if(isset($N8))
                                {
                                ?>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->precio8, 2) }}</td>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio8, 2) }}</td>
                                <?php
                                }
                                else
                                {
                                ?>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td>&nbsp;{{ $I9 }}</td>
                                <td>{{ $N9 }}</td>
                                <td>{{ $remisione->cant9 }}</td>
                                <?php
                                if(isset($N9))
                                {
                                ?>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->precio9, 2) }}</td>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio9, 2) }}</td>
                                <?php
                                }
                                else
                                {
                                ?>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td>&nbsp;{{ $I10 }}</td>
                                <td>{{ $N10 }}</td>
                                <td>{{ $remisione->cant10 }}</td>
                                <?php
                                if(isset($N10))
                                {
                                ?>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->precio10, 2) }}</td>
                                <td style="text-align: right;"> $ {{ number_format( $remisione->tprecio10, 2) }}</td>
                                <?php
                                }
                                else
                                {
                                ?>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <tr>
                                <td colspan="3" style="border: 2px solid #3b3b3b;"> <b> Notas: </b> </td>
                                <td style="text-align: right !important; border: 2px solid #3b3b3b;" id="first" colspan="1" ><b> Total </b></td>
                                <td style="text-align: right !important; border: 2px solid #3b3b3b;"><b> ${{ number_format($Total, 2) }}</b></td>
                            </tr>
                            <tr>
                                <th colspan="3" style="height: 120px;">{{$remisione->notas}}</th>
                                <th colspan="2" style="height: 120px; border: 2px solid #3b3b3b;">Recibido cliente:</th>
                            </tr>
                            <tr>
                                <th style="text-align: center; border: 2px solid #3b3b3b;" colspan="10">GRACIAS POR CONFIAR EN NOSOTROS</th>
                            </tr>
                        </table>
            </div>
            </div>
            </div>


            </body>


    </section>


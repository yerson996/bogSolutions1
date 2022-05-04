@extends('adminlte::page')

@section('title', 'Crear Remision')

@section('content_header')
    <br>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Remision</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('remisiones.store') }}"  role="form"  enctype="multipart/form-data">
                            @csrf

                            @include('remisione.form')

                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
// Documento

document.getElementById('doc').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var direccion = document.getElementById('direccion');
  var ciudad = document.getElementById('ciudad');
  var cel = document.getElementById('cel');

  /* Asignamos cada dato a su input*/
  direccion.value = mData.direccion;
  ciudad.value = mData.ciudad;
  cel.value = mData.cel;
};

//Item1

document.getElementById('item1').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var Precio1 = document.getElementById('precio1');

  /* Asignamos cada dato a su input*/
  Precio1.value = mData.precio;

  var cant1 = document.getElementById('cant1');
  cant1.value = null;

  var tprecio1 = document.getElementById('tprecio1');
  tprecio1.value = null;
  //
};

//Item2

document.getElementById('item2').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var Precio2 = document.getElementById('precio2');

  /* Asignamos cada dato a su input*/
  Precio2.value = mData.precio2;

  var cant2 = document.getElementById('cant2');
  cant2.value = null;

  var tprecio2 = document.getElementById('tprecio2');
  tprecio2.value = null;

};


//Item3

document.getElementById('item3').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio3 = document.getElementById('precio3');

  /* Asignamos cada dato a su input*/
  precio3.value = mData.precio3;

  var cant3 = document.getElementById('cant3');
  cant3.value = null;

  var tprecio3 = document.getElementById('tprecio3');
  tprecio3.value = null;
  //
};

//Item4

document.getElementById('item4').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio4 = document.getElementById('precio4');

  /* Asignamos cada dato a su input*/
  precio4.value = mData.precio4;

  var cant4 = document.getElementById('cant4');
  cant4.value = null;

  var tprecio4 = document.getElementById('tprecio4');
  tprecio4.value = null;
  //
};

//Item5

document.getElementById('item5').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio5 = document.getElementById('precio5');

  /* Asignamos cada dato a su input*/
  precio5.value = mData.precio5;

  var cant5 = document.getElementById('cant5');
  cant5.value = null;

  var tprecio5 = document.getElementById('tprecio5');
  tprecio5.value = null;
  
//
};

//Item6

document.getElementById('item6').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio6 = document.getElementById('precio6');

  /* Asignamos cada dato a su input*/
  precio6.value = mData.precio6;

  var cant6 = document.getElementById('cant6');
  cant6.value = null;

  var tprecio6 = document.getElementById('tprecio6');
  tprecio6.value = null;
  //
};

//Item7

document.getElementById('item7').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio7 = document.getElementById('precio7');

  /* Asignamos cada dato a su input*/
  precio7.value = mData.precio7;

  var cant7 = document.getElementById('cant7');
  cant7.value = null;

  var tprecio7 = document.getElementById('tprecio7');
  tprecio7.value = null;
  //
};


//Item8

document.getElementById('item8').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio8 = document.getElementById('precio8');

  /* Asignamos cada dato a su input*/
  precio8.value = mData.precio8;

  var cant8 = document.getElementById('cant8');
  cant8.value = null;

  var tprecio8 = document.getElementById('tprecio8');
  tprecio8.value = null;
  //
};

//Item9

document.getElementById('item9').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio9 = document.getElementById('precio9');

  /* Asignamos cada dato a su input*/
  precio9.value = mData.precio9;

  var cant9 = document.getElementById('cant9');
  cant9.value = null;

  var tprecio9 = document.getElementById('tprecio9');
  tprecio9.value = null;
  //
};

//Item10

document.getElementById('item10').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio10 = document.getElementById('precio10');

  /* Asignamos cada dato a su input*/
  precio10.value = mData.precio10;

  var cant10 = document.getElementById('cant10');
  cant10.value = null;

  var tprecio10 = document.getElementById('tprecio10');
  tprecio10.value = null;
  //
};

//Item11

document.getElementById('item11').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio11 = document.getElementById('precio11');

  /* Asignamos cada dato a su input*/
  precio11.value = mData.precio11;

  var cant11 = document.getElementById('cant11');
  cant11.value = null;

  var tprecio11 = document.getElementById('tprecio11');
  tprecio11.value = null;
  //
};

//Item12

document.getElementById('item12').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio12 = document.getElementById('precio12');

  /* Asignamos cada dato a su input*/
  precio12.value = mData.precio12;

  var cant12 = document.getElementById('cant12');
  cant12.value = null;

  var tprecio12 = document.getElementById('tprecio12');
  tprecio12.value = null;
  //
};

//Item13

document.getElementById('item13').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio13 = document.getElementById('precio13');

  /* Asignamos cada dato a su input*/
  precio13.value = mData.precio13;

  var cant13 = document.getElementById('cant13');
  cant13.value = null;

  var tprecio13 = document.getElementById('tprecio13');
  tprecio13.value = null;
  //
};

//Item14

document.getElementById('item14').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio14 = document.getElementById('precio14');

  /* Asignamos cada dato a su input*/
  precio14.value = mData.precio14;

  var cant14 = document.getElementById('cant14');
  cant14.value = null;

  var tprecio14 = document.getElementById('tprecio14');
  tprecio14.value = null;
  //
};

//Item15

document.getElementById('item15').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */

  var precio15 = document.getElementById('precio15');

  /* Asignamos cada dato a su input*/
  precio15.value = mData.precio15;

  var cant15 = document.getElementById('cant15');
  cant15.value = null;

  var tprecio15 = document.getElementById('tprecio15');
  tprecio15.value = null;
  //
};


//Total precio 1

document.getElementById('precio1').onchange = function()  {

var cant1 = document.getElementById('cant1').value;
var precio1 = document.getElementById('precio1').value;

var tprecio1 = document.getElementById('tprecio1');

tprecio1.value = cant1*precio1;
};


document.getElementById('cant1').onchange = function()  {

var cant1 = document.getElementById('cant1').value;
var precio1 = document.getElementById('precio1').value;

var tprecio1 = document.getElementById('tprecio1');

tprecio1.value = cant1*precio1;

};

//Total precio 2 bien

document.getElementById('cant2').onchange = function()  {

var cant2 = document.getElementById('cant2').value;
var precio2 = document.getElementById('precio2').value;

var tprecio2 = document.getElementById('tprecio2');

tprecio2.value = cant2*precio2;

};

document.getElementById('precio2').onchange = function()  {

var cant2 = document.getElementById('cant2').value;
var precio2 = document.getElementById('precio2').value;

var tprecio2 = document.getElementById('tprecio2');

};

//Total precio 3

document.getElementById('cant3').onchange = function()  {

var cant3 = document.getElementById('cant3').value;
var precio3 = document.getElementById('precio3').value;

var tprecio3 = document.getElementById('tprecio3');

tprecio3.value = cant3*precio3;
//
};

document.getElementById('precio3').onchange = function()  {

var cant3 = document.getElementById('cant3').value;
var precio3 = document.getElementById('precio3').value;

var tprecio3 = document.getElementById('tprecio3');

tprecio3.value = cant3*precio3;
//
};

//Total precio 4

document.getElementById('cant4').onchange = function()  {

var cant4 = document.getElementById('cant4').value;
var precio4 = document.getElementById('precio4').value;

var tprecio4 = document.getElementById('tprecio4');

tprecio4.value = cant4*precio4;
//
};

document.getElementById('precio4').onchange = function()  {

var cant4 = document.getElementById('cant4').value;
var precio4 = document.getElementById('precio4').value;

var tprecio4 = document.getElementById('tprecio4');

tprecio4.value = cant4*precio4;
//
};

//Total precio 5

document.getElementById('cant5').onchange = function()  {

var cant5 = document.getElementById('cant5').value;
var precio5 = document.getElementById('precio5').value;

var tprecio5 = document.getElementById('tprecio5');

tprecio5.value = cant5*precio5;
//
};

document.getElementById('precio5').onchange = function()  {

var cant5 = document.getElementById('cant5').value;
var precio5 = document.getElementById('precio5').value;

var tprecio5 = document.getElementById('tprecio5');

tprecio5.value = cant5*precio5;
//
};

//Total precio 6

document.getElementById('cant6').onchange = function()  {

var cant6 = document.getElementById('cant6').value;
var precio6 = document.getElementById('precio6').value;

var tprecio6 = document.getElementById('tprecio6');

tprecio6.value = cant6*precio6;


//
};

document.getElementById('precio6').onchange = function()  {

var cant6 = document.getElementById('cant6').value;
var precio6 = document.getElementById('precio6').value;

var tprecio6 = document.getElementById('tprecio6');

tprecio6.value = cant6*precio6;
//
};


//Total precio 7

document.getElementById('cant7').onchange = function()  {

var cant7 = document.getElementById('cant7').value;
var precio7 = document.getElementById('precio7').value;

var tprecio7 = document.getElementById('tprecio7');

tprecio7.value = cant7*precio7;
//
};

document.getElementById('precio7').onchange = function()  {

var cant7 = document.getElementById('cant7').value;
var precio7 = document.getElementById('precio7').value;

var tprecio7 = document.getElementById('tprecio7');

tprecio7.value = cant7*precio7;
//
};

//Total precio 8

document.getElementById('cant8').onchange = function()  {

var cant8 = document.getElementById('cant8').value;
var precio8 = document.getElementById('precio8').value;

var tprecio8 = document.getElementById('tprecio8');

tprecio8.value = cant8*precio8;
//
};

document.getElementById('precio8').onchange = function()  {

var cant8 = document.getElementById('cant8').value;
var precio8 = document.getElementById('precio8').value;

var tprecio8 = document.getElementById('tprecio8');

tprecio8.value = cant8*precio8;
//
};


//Total precio 9

document.getElementById('cant9').onchange = function()  {

var cant9 = document.getElementById('cant9').value;
var precio9 = document.getElementById('precio9').value;

var tprecio9 = document.getElementById('tprecio9');

tprecio9.value = cant9*precio9;
//
};


document.getElementById('precio9').onchange = function()  {

var cant9 = document.getElementById('cant9').value;
var precio9 = document.getElementById('precio9').value;

var tprecio9 = document.getElementById('tprecio9');

tprecio9.value = cant9*precio9;
//
};

//Total precio 10

document.getElementById('cant10').onchange = function()  {

var cant10 = document.getElementById('cant10').value;
var precio10 = document.getElementById('precio10').value;

var tprecio10 = document.getElementById('tprecio10');

tprecio10.value = cant10*precio10;
//
};

document.getElementById('precio10').onchange = function()  {

var cant10 = document.getElementById('cant10').value;
var precio10 = document.getElementById('precio10').value;

var tprecio10 = document.getElementById('tprecio10');

tprecio10.value = cant10*precio10;
//
};


//Total precio 11

document.getElementById('cant11').onchange = function()  {

var cant11 = document.getElementById('cant11').value;
var precio11 = document.getElementById('precio11').value;

var tprecio11 = document.getElementById('tprecio11');

tprecio11.value = cant11*precio11;
//
};

document.getElementById('precio11').onchange = function()  {

var cant11 = document.getElementById('cant11').value;
var precio11 = document.getElementById('precio11').value;

var tprecio11 = document.getElementById('tprecio11');

tprecio11.value = cant11*precio11;
//
};

//Total precio 12

document.getElementById('cant12').onchange = function()  {

var cant12 = document.getElementById('cant12').value;
var precio12 = document.getElementById('precio12').value;

var tprecio12 = document.getElementById('tprecio12');

tprecio12.value = cant12*precio12;
//
};

document.getElementById('precio12').onchange = function()  {

var cant12 = document.getElementById('cant12').value;
var precio12 = document.getElementById('precio12').value;

var tprecio12 = document.getElementById('tprecio12');

tprecio12.value = cant12*precio12;
//
};

//Total precio 13

document.getElementById('cant13').onchange = function()  {

var cant13 = document.getElementById('cant13').value;
var precio13 = document.getElementById('precio13').value;

var tprecio13 = document.getElementById('tprecio13');

tprecio13.value = cant13*precio13;
//
};

document.getElementById('precio13').onchange = function()  {

var cant13 = document.getElementById('cant13').value;
var precio13 = document.getElementById('precio13').value;

var tprecio13 = document.getElementById('tprecio13');

tprecio13.value = cant13*precio13;
//
};

//Total precio 14

document.getElementById('cant14').onchange = function()  {

var cant14 = document.getElementById('cant14').value;
var precio14 = document.getElementById('precio14').value;

var tprecio14 = document.getElementById('tprecio14');

tprecio14.value = cant14*precio14;
//
};

document.getElementById('precio14').onchange = function()  {

var cant14 = document.getElementById('cant14').value;
var precio14 = document.getElementById('precio14').value;

var tprecio14 = document.getElementById('tprecio14');

tprecio14.value = cant14*precio14;
//
};


//Total precio 15

document.getElementById('cant15').onchange = function()  {

var cant15 = document.getElementById('cant15').value;
var precio15 = document.getElementById('precio15').value;

var tprecio15 = document.getElementById('tprecio15');

tprecio15.value = cant15*precio15;

};

document.getElementById('precio15').onchange = function()  {

var cant15 = document.getElementById('cant15').value;
var precio15 = document.getElementById('precio15').value;

var tprecio15 = document.getElementById('tprecio15');

tprecio15.value = cant15*precio15;

};


function total() {
var tprecio1 = 0;
var tprecio2 = 0;
var tprecio3 = 0; 
var tprecio4 = 0;
var tprecio5 = 0;
var tprecio6 = 0;
var tprecio7 = 0;
var tprecio8 = 0;
var tprecio9 = 0;
var tprecio10 = 0;
var tprecio11 = 0;
var tprecio12 = 0;
var tprecio13 = 0;
var tprecio14 = 0;
var tprecio15 = 0;

//1
if(document.getElementById('tprecio1').value > 0)
{
  tprecio1 = parseInt(document.getElementById('tprecio1').value);  
}
else
{
  tprecio1 = 0; 
}

//2
if((document.getElementById('tprecio2').value) > 0)
{
  tprecio2 = parseInt(document.getElementById('tprecio2').value);
}
else
{
  tprecio2 = 0;
}

//3
if((document.getElementById('tprecio3').value) > 0)
{
  tprecio3 = parseInt(document.getElementById('tprecio3').value);
}
else
{
  tprecio3 = 0;
}

//4
if((document.getElementById('tprecio4').value) > 0)
{
  tprecio4 = parseInt(document.getElementById('tprecio4').value);
}
else
{
  tprecio4 = 0;
}

//5
if((document.getElementById('tprecio5').value) > 0)
{
  tprecio5 = parseInt(document.getElementById('tprecio5').value);
}
else
{
  tprecio5 = 0;
}

//6
if((document.getElementById('tprecio6').value) > 0)
{
  tprecio6 = parseInt(document.getElementById('tprecio6').value);
}
else
{
  tprecio6 = 0;
}

//7
if((document.getElementById('tprecio7').value) > 0)
{
  tprecio7 = parseInt(document.getElementById('tprecio7').value);
}
else
{
  tprecio7 = 0;
}

//8
if((document.getElementById('tprecio8').value) > 0)
{
  tprecio8 = parseInt(document.getElementById('tprecio8').value);
}
else
{
  tprecio8 = 0;
}

//9
if((document.getElementById('tprecio9').value) > 0)
{
  tprecio9 = parseInt(document.getElementById('tprecio9').value);
}
else
{
  tprecio9 = 0;
}

//10
if((document.getElementById('tprecio10').value) > 0)
{
  tprecio10 = parseInt(document.getElementById('tprecio10').value);
}
else
{
  tprecio10 = 0;
}

//11
if((document.getElementById('tprecio11').value) > 0)
{
  tprecio11 = parseInt(document.getElementById('tprecio11').value);
}
else
{
  tprecio11 = 0;
}

//12
if((document.getElementById('tprecio12').value) > 0)
{
  tprecio12 = parseInt(document.getElementById('tprecio12').value);
}
else
{
  tprecio12 = 0;
}

//13
if((document.getElementById('tprecio13').value) > 0)
{
  tprecio13 = parseInt(document.getElementById('tprecio13').value);
}
else
{
  tprecio13 = 0;
}

//14
if((document.getElementById('tprecio14').value) > 0)
{
  tprecio14 = parseInt(document.getElementById('tprecio14').value);
}
else
{
  tprecio14 = 0;
}

//15
if((document.getElementById('tprecio15').value) > 0)
{
  tprecio15 = parseInt(document.getElementById('tprecio15').value);
}
else
{
  tprecio15 = 0;
}


Total = document.getElementById('Total');

Total.value = tprecio1+tprecio2+tprecio3+tprecio4+tprecio5+tprecio6+tprecio7+tprecio8+tprecio9+tprecio10+tprecio11+tprecio12+tprecio13+tprecio14+tprecio15;

// alert(preciot);

};

</script>
@stop

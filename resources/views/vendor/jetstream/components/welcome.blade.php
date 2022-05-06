<div class="padre">
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <img src="{{ asset('/logo1.png') }}" alt="" style="width:500px;">
    </div>

    <div class="mt-8 text-2xl">
        ¡Bienvenid@ a tu Perfil Administrativo!  
    </div>

    <br><br><br>
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Exportar</h3>

                <p>Productos Excel</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/prods/export" class="small-box-footer">Exportar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Exportar<sup style="font-size: 20px"> </sup></h3>

                <p>Clientes Excel</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/users/export" class="small-box-footer">Exportar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

</div>
</div>
<style>
.padre {
  justify-content: center;
  align-items: center;
}
</style>

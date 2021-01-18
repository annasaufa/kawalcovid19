<!-- ./col -->
<div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $sembuh['value']?></h3>
                <p>Total Sembuh</p>
              </div>
              <div class="icon">
                <i class="fa fa-smile"></i>
              </div>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $positif['value']?></h3>
                <p>Total Positif</p>
              </div>
              <div class="icon">
                <i class="fa fa-ambulance"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $meninggal['value']?></h3>
                <p>Total Meninggal</p>
              </div>
              <div class="icon">
                <i class="fa fa-hospital"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

        <div class="col-lg- col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Global Berdasarkan Negara</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Negara</th>
                    <th>Sembuh</th>
                    <th>Positif</th>
                    <th>Meninggal</th>
                  </tr>
                  </thead>
                    <tbody>
                        <?php $no=1; foreach ($global as $key => $value) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value['attributes']['Country_Region']; ?></td>
                        <td class="text-center"><span class="badge badge-success"><?= number_format($value['attributes']['Recovered'],0) ?></span></td>
                        <td class="text-center"><span class="badge badge-warning"><?= number_format($value['attributes']['Confirmed'],0) ?></span></td>
                        <td class="text-center"><span class="badge badge-danger"><?= number_format($value['attributes']['Deaths'],0) ?></span></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
</div>
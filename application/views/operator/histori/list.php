<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $judul;?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $subjudul;?></li>
            </ol>
          </div>
        </div>
       
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">SAMSAT SIONDEL</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="mt-3 mb-4">
            <button type="button" onclick="reload_ajax()" class="btn btn-info"><i class="fa fa-recycle"></i> Reload</button>
            
        </div>
              <?php echo $this->session->flashdata("k");?>
                <table id="data" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center" width="10%">No.</th>
                    <th class="text-center" width="20%">ID Transaksi</th>
                    <th class="text-center" width="20%">Nopol</th>
                    <th class="text-center" width="20%">Nama</th>
                    <th class="text-center" width="30%">Alamat</th>
                    



                </tr>
            </thead>
                  <tbody>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              
            </div>
            <!-- /.card -->
          </div>
        </div>

  </div>
  <script src="<?= base_url() ?>assets/dist/js/app/operator/histori/list.js"></script>
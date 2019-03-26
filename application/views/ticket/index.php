<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Open New Ticket
        <small>Preview</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Profile Terlapor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="nip">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" placeholder="Input no NIP terlapor, hanya angka">
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Input nama lengkap Terlapor beserta gelarnya">
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                
              </div>
            </form>
          </div>
          <!-- /.box -->    
        </div>
        <!--/.col (right) -->
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Wilayah Kerja Terlapor</h3>
                </div>
            <div class="box-body">
              <div class="form-group">
                <label>Nama Wilayah</label>
                <select class="form-control namaWilayah" id="namaWilayah" name="namaWilayah" style="width:100%">
                  <?php foreach ($wilayah as $key => $wil) :?>

                  <option value="<?= $wil['id'];?>" id="<?= $wil['id'];?>"><?= $wil['nama_wilayah'];?></option>

                  
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label>Nama Satker</label>
                <select class="form-control namaSatker" id="namaSatker" name="namaSatker" style="width:100%">
                    <option value="0">-PILIH-</option>
                </select>
              </div>
            </div>
            <div class="box-footer">
                
              </div>
          </div>
            <!-- /.col -->
          </div>

      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
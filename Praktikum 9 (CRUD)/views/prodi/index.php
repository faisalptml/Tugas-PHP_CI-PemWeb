<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Daftar Program Studi STT - NF</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Program Studi STT - NF</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <table class = 'table table-striped'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Prodi</th>
                    <th>Ketua Prodi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach($list_prodi as $row){
                ?>   
                        <tr>
                            <td><?=$nomor?></td>
                            <td><?=$row->kode?></td>
                            <td><?=$row->nama?></td>
                            <td><?=$row->kaprodi?></td>
                            <td>
                              <a href="prodi/view?id=<?=$row->kode?>">View</a> |
                              <a href="prodi/edit?id=<?=$row->kode?>">Edit</a> |
                              <a href="prodi/delete?id=<?=$row->kode?>"
                              onclick="if(!confirm('Anda Yakin Hapus Prodi dengan Kode <?=$row->kode?>?')) {return false}"
                              >Delete</a>
                            </td>
                        </tr>
                <?php
                    $nomor++ ;
                    }?>
            </tbody>
        </table>


        <a class = "btn btn-primary mt-3" href = "<?php echo base_url('index.php/prodi/create') ?>" role = "button">Create</a>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
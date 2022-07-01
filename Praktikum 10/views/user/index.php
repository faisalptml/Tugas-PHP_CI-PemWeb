<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data User</h1>
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
          <h3 class="card-title">Daftar User</h3>

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

        <table class="table table-hover">
            <thead class="table-success">
                <tr>
                    <th>No</th><th>Username</th>
                    <th>Password</th><th>Email</th>
                </tr>   
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach($list_user as $row){
                ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$row->username?></td>
                    <td><?=$row->password?></td>
                    <td><?=$row->email?></td>
                </tr>
                <?php
                $nomor++;
                }
                ?>
            </tbody>
        </table>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <a type="button" class="btn btn-primary" href="<?php echo base_url('index.php/registrasi')?>">Create User</a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

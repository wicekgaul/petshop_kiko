<?= $this->extend('Layout/index') ?>
<?= $this->section('content') ?>

<div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >

              <div>
                <h3 class="fw-bold mb-3">Petshop</h3>
                <h6 class="op-7 mb-2">Daftar Obat</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-primary btn-round">Tambah Obat</a>
              </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"><?= $judul; ?></h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="basic-datatables"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                          <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>Wicek</td>
                            <td>Doyo</td>
                            <td>081343415367</td>
                            <td>wicek@gmail.com</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <?= $this->endsection('content')?>
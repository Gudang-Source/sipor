<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>
        <div class="col-sm-12 mx-2">

            <table class="table table-hover display nowrap" id="myTable" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jenis Laporan</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($laporan as $l) :
                        if ($l['status'] == '1') {
                            $sts = "<td class='text-warning'>Dikirim</td>";
                        } elseif ($l['status'] == '2') {
                            $sts = "<td class='text-primary'>Diproses</td>";
                        } elseif ($l['status'] == '3') {
                            $sts = "<td class='text-success'>Success</td>";
                        } elseif ($l['status'] == '4') {
                            $sts = "<td class='text-danger'>Ditolak</td>";
                        };

                        if ($status = $l['status'] == '1') {
                            $st = 'Dikirim';
                        } elseif ($status = $l['status'] == '2') {
                            $st = 'Diproses';
                        } elseif ($status = $l['status'] == '3') {
                            $st = 'Success';
                        } elseif ($status = $l['status'] == '4') {
                            $st = 'Ditolak';
                        };
                    ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $l['alamat']; ?></td>
                            <td><?= $l['email']; ?></td>
                            <td><?= $l['jenis_laporan']; ?></td>
                            <td><?= $l['keterangan']; ?></td>
                            <!-- <td><?= $l['latt']; ?></td> -->
                            <!-- <td><?= $l['longi']; ?></td> -->
                            <td><?= $l['photo']; ?></td>
                            <td><?= $l['tanggal']; ?></td>
                            <!-- <td><?= $l['type_laporan']; ?></td> -->
                            <?= $sts; ?>
                            <td>
                                <a href="" data-toggle="modal" data-target="#prosesModal" id="updateStatus" data-id="<?= $l['id']; ?>" class="btn btn-sm btn-primary">Update Status</a>

                                <a href="" class="btn btn-sm btn-info mt-1" id="detailModel" data-toggle="modal" data-target="#detailsModal" data-target="#detailsModal" data-alamat="<?= $l['alamat']; ?>" data-email="<?= $l['email']; ?>" data-jenis="<?= $l['jenis_laporan']; ?>" data-ket="<?= $l['keterangan']; ?>" data-latt="<?= $l['latt']; ?>" data-longi="<?= $l['longi']; ?>" data-gambar="<?= $l['photo']; ?>" data-sts="<?= $st; ?>" data-tgl="<?= $l['tanggal']; ?>" data-type="<?= $l['type_laporan']; ?>"><i class="fa fa-eye pr-2"></i>Detail</a>

                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>

<!-- model details  -->
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectModalLabel">Detail Pengajuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 my-3 ">
                        <img src="" id="gbr" height="700px" class="img-fluid my-auto">
                    </div>
                    <div class="col-md-8 border-0">
                        <li class="list-group-item ">Status : <strong class="text-warning"><span id="sts"></span></strong></li>
                        <li class="list-group-item ">Email : <strong><span id="email"></span></strong></li>
                        <li class="list-group-item ">Jenis Laporan : <strong><span id="jenis"></span></strong></li>
                        <li class="list-group-item">Tanggal : <strong><span id="tgl"></span></strong></li>
                        <li class="list-group-item">Keterangan : <strong><span id="ket"></span></strong></li>
                        <li class="list-group-item">Alamat : <strong><span id="alamat"></span></strong></li>
                        <li class="list-group-item">Lattitude : <strong><span id="latt"></span></strong></li>
                        <li class="list-group-item">Longitude : <strong><span id="longi"></span></strong></li>
                        <li class="list-group-item ">Tipe Laporan : <strong><span id="type"></span></strong></li>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Close detail</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- model proses  -->
<div class="modal fade" id="prosesModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-6" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectModalLabel">Prosess Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/updateLaporan'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="">
                        <select class="form-control" id="status" name="status">
                            <option>Pilih Jabatan</option>
                            <option value="2">Proses</option>
                            <option value="3">Success</option>
                            <option value="4">Ditolak</option>
                        </select>
                        <?= form_error('status', '<small class="text-danger">', '</small>') ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
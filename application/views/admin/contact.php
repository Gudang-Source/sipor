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
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($contact as $c) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $c['nama']; ?></td>
                            <td><?= $c['email']; ?></td>
                            <td><?= $c['subjek']; ?></td>
                            <td><?= $c['pesan']; ?></td>
                            <td>
                                <a href="" class="btn btn-sm btn-info mt-1" id="detailPesanModel" data-toggle="modal" data-target="#detailsPesanModal" data-target="#detailsPesanModal" data-nama="<?= $c['nama']; ?>" data-email="<?= $c['email']; ?>" data-subjek="<?= $c['subjek']; ?>" data-pesan="<?= $c['pesan']; ?>"><i class="fa fa-eye pr-2"></i>Detail</a>

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
<div class="modal fade" id="detailsPesanModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectModalLabel">Detail Pesan Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container-fluid">
                <div class="row my-5">
                    <div class="col-md-12 border-0">
                        <li class="list-group-item ">Nama : <strong><span id="nama"></span></strong></li>
                        <li class="list-group-item ">Email : <strong><span id="email"></span></strong></li>
                        <li class="list-group-item">Subject : <strong><span id="subjek"></span></strong></li>
                        <li class="list-group-item">Pesan : <strong><span id="pesan"></span></strong></li>

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
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newUserModal">Add New User</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <!-- <th scope="col">Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $u) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $u['name']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><?= $u['image']; ?></td>
                            <td><?= $u['is_active']; ?></td>
                            <td>
                                <!-- <a href="<?= base_url('admin/roleaccess/') . $u['id']; ?>" class="badge badge-warning">access</a> -->
                                <!-- <a href="" class="badge badge-success">edit</a> -->
                                <!-- <a href="" class="badge badge-danger" >delete</a> -->
                                <!-- <?php echo anchor('admin/deleteUsers/' . $u['id'], 'Delete'); ?> -->
                                <!-- <form action="<?= base_url('admin/deleteUsers') ?>" method="POST">
                                    <input type="hidden" name="id" value="<?= $u['id'] ?>"> -->
                                <!-- <button onclick="return confirm ('Anda yakin ingin hapus data ini ?')" class="btn btn-sm btn-danger float-right"><i class="fa fa-trash mr-1"></i><?php echo anchor('admin/deleteUsers/' . $u['id'], 'Delete'); ?> -->
                                <!-- </button>
                                </form> -->
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="newUserModal" tabindex="-1" role="dialog" aria-labelledby="newUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newUserModalLabel">Add New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/addUsers'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="text" readonly class="form-control" id="image" name="image" value="default.jpg">
                    </div>
                    <div class="form-group">
                        <label for="password">Password Default</label>
                        <input type="text" readonly class="form-control" id="password" name="password" readonly value="123456">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
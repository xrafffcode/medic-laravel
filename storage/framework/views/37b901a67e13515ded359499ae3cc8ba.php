

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Data Perawat</h1>
                <a href="<?php echo e(route('perawat.create')); ?>" class="btn btn-primary my-3">Tambah Data Perawat</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Perawat</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $perawats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perawat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                <td><?php echo e($perawat->nama); ?></td>
                                <td><?php echo e($perawat->alamat); ?></td>
                                <td><?php echo e($perawat->email); ?></td>
                                <td><?php echo e($perawat->no_telp); ?></td>
                                <td>
                                    <a href="<?php echo e(route('perawat.edit', $perawat->id)); ?>" class="btn btn-success">Edit</a>
                                    <form action="<?php echo e(route('perawat.destroy', $perawat->id)); ?>" method="POST"
                                        class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/xrafff/Desktop/dilesin/Konsultasi Student/Projek1-main/resources/views/perawat/index.blade.php ENDPATH**/ ?>
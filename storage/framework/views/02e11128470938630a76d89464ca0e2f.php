



<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Data Dokter</h1>
                <a href="<?php echo e(route('dokter.create')); ?>" class="btn btn-primary my-3">Tambah Data Dokter</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Dokter</th>
                            <th scope="col">Spesialis</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $dokters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dokter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                <td><?php echo e($dokter->nama); ?></td>
                                <td><?php echo e($dokter->spesialis); ?></td>
                                <td><?php echo e($dokter->email); ?></td>
                                <td><?php echo e($dokter->no_telp); ?></td>
                                <td>
                                    <a href="<?php echo e(route('dokter.edit', $dokter->id)); ?>" class="btn btn-success">Edit</a>
                                    <form action="<?php echo e(route('dokter.destroy', $dokter->id)); ?>" method="POST"
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




<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/xrafff/Desktop/dilesin/Konsultasi Student/Projek1-main/resources/views/dokter/index.blade.php ENDPATH**/ ?>
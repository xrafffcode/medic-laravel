

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Data Ruangan</h1>
                <a href="<?php echo e(route('ruangan.create')); ?>" class="btn btn-primary my-3">Tambah Data Ruangan</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No Ruangan</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Lantai</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $ruangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ruangan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                <td><?php echo e($ruangan->no_ruangan); ?></td>
                                <td><?php echo e($ruangan->kelas); ?></td>
                                <td><?php echo e($ruangan->lantai); ?></td>
                                <td>
                                    <a href="<?php echo e(route('ruangan.edit', $ruangan->id)); ?>" class="btn btn-success">Edit</a>
                                    <form action="<?php echo e(route('ruangan.destroy', $ruangan->id)); ?>" method="POST"
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/xrafff/Desktop/dilesin/Konsultasi Student/Projek1-main/resources/views/ruangan/index.blade.php ENDPATH**/ ?>
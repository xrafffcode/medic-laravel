



<?php $__env->startSection('content'); ?>


<div class="p-3">

    <a href="/tambahdokter" class="btn btn-primary my-3">Tambah Data Profile dokter</a> 
    
  
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">No Hp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
        
            <?php $__empty_1 = true; $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($key + 1); ?></th>
                
                <td><?php echo e($value->nama_lengkap); ?></td>  
                <td><?php echo e($value->no_hp); ?></td>
                <td><?php echo e($value->alamat); ?></td>
                <td class="mr-3">
                    <a href="/dokter/<?php echo e($value->id); ?>" class="btn btn-info" >Show </a> 
                    <a href="/dokter/<?php echo e($value->id); ?>/edit" class="btn btn-success">Edit</a>
                    <a href="/dokter/ <?php echo e($value->id); ?>" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                </td>
</div>
</tr>

</tbody>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<tr colspan="6">
    <td>No data</td>
</tr>
<?php endif; ?>
</table>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Projek1-main\resources\views/dokter/index.blade.php ENDPATH**/ ?>
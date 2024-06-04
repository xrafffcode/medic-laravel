

<?php $__env->startSection('tambah', 'Tambah dokter'); ?>

<?php $__env->startSection('content'); ?>
<form action="/tambahdokter" method="index">
    <?php echo csrf_field(); ?>
<div class="form-group p-3">
    <label>Nama Lengkap </label>
    <input type="text" name='nama' class="form-control" placeholder="Masukan
                    Nama Lengkap">
                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group p-3">
        <label>No Handphone</label>
        <input type="number" name='nohp' class="form-control"
                placeholder="Masukan No Handphone">
                <?php $__errorArgs = ['nohp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group p-3">
        <label>Alamat</label>
        <input type="text" name='alamat' class="form-control" placeholder="Masukan
                    Alamat">
                <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>


<div class="p-3">
<button type="submit" class="btn btn-primary ">Submit</button>
</div>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Projek1-main\resources\views/dokter/tambah.blade.php ENDPATH**/ ?>
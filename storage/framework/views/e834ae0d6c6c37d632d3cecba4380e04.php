

<?php $__env->startSection('tambah', 'Tambah Ruangan'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2">Tambah Data Ruangan</h1>
                <form method="POST" action="<?php echo e(route('ruangan.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mt-3">
                        <label for="no_ruangan">No Ruangan</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['no_ruangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="no_ruangan"
                            name="no_ruangan" value="<?php echo e(old('no_ruangan')); ?>">
                        <?php $__errorArgs = ['no_ruangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group mt-3">
                        <label for="kelas">Kelas</label>
                        <select class="form-control <?php $__errorArgs = ['kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kelas" name="kelas">
                            <option value="VVIP" <?php echo e(old('kelas') == 'VVIP' ? 'selected' : ''); ?>>VVIP</option>
                            <option value="VIP" <?php echo e(old('kelas') == 'VIP' ? 'selected' : ''); ?>>VIP</option>
                            <option value="Kelas 1" <?php echo e(old('kelas') == 'Kelas 1' ? 'selected' : ''); ?>>Kelas 1</option>
                            <option value="Kelas 2" <?php echo e(old('kelas') == 'Kelas 2' ? 'selected' : ''); ?>>Kelas 2</option>
                            <option value="Kelas 3" <?php echo e(old('kelas') == 'Kelas 3' ? 'selected' : ''); ?>>Kelas 3</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="lantai">Lantai</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['lantai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="lantai"
                            name="lantai" value="<?php echo e(old('lantai')); ?>">
                        <?php $__errorArgs = ['lantai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/xrafff/Desktop/dilesin/Konsultasi Student/Projek1-main/resources/views/ruangan/create.blade.php ENDPATH**/ ?>
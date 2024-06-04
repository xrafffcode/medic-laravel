<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">
                Daftar Medic
            </h1>
        </div>
        <form class="user" method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="name" aria-describedby="name"
                    placeholder="Enter Full Name..." name="name" value="<?php echo e(old('name')); ?>" required
                    autocomplete="name" autofocus>
            </div>

            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"
                    value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                    placeholder="Password" name="password" required autocomplete="current-password">
            </div>
            
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Daftar
            </button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/xrafff/Desktop/dilesin/Konsultasi Student/Projek1-main/resources/views/auth/register.blade.php ENDPATH**/ ?>
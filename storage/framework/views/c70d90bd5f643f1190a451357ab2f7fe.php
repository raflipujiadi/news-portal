<form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <div class="mt-3">
        <a href="<?php echo e(route('password.request')); ?>">Forgot your password?</a>
    </div>
    <div class="mt-3">
        <a href="<?php echo e(route('register')); ?>">Don't have an account? Register</a>
    </div>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger mt-3">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div><?php /**PATH D:\Programming\php\Laravel\final project\news-portal\resources\views/auth/login.blade.php ENDPATH**/ ?>
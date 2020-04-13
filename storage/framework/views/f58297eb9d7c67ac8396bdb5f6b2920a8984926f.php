<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu Digital++</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                        <a style="text-decoration: none;" href="<?php echo e(route('canal.index')); ?>"><button style="margin-bottom: 7px;" type="button" class="btn btn-secondary btn-lg btn-block">Crear Canal</button></a>
                        <a style="text-decoration: none;" href="<?php echo e(route('programa.index')); ?>"><button style="margin-bottom: 7px;" type="button" class="btn btn-secondary btn-lg btn-block">Crear Programa</button></a>
                        <a style="text-decoration: none;" href="<?php echo e(route('graella.index')); ?>"><button style="margin-bottom: 7px;" type="button" class="btn btn-secondary btn-lg btn-block">Crear Graella</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Documents\DAW\DAW2 - 2nAny\M07 - Desenvolupament web en entorn servidor\UF3 - Laravel & MySQLBinefa\PROJECTE\M07UF3-Projecte\resources\views/home.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <u><h3>CREACIÓ NOU CANAL</h3></u><br>
  <form action="<?php echo e(route('canal.store')); ?>" method="POST" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="nomCanal">Nom canal:</label>
      <input type="text" class="form-control" name="nomCanal" required><br>
      <label for="logotipCanal">Logotip Canal:</label>
      <input type="file" class="form-control-file" name="logotipCanal" required>
    </div>
    <button type="submit" class="btn btn-success">Crear canal</button>
    <a  href="<?php echo e(route('canal.index')); ?>" class="btn btn-secondary">Volver</a>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\M07UF3-PROJECTE-master\resources\views/canals/createCanal.blade.php ENDPATH**/ ?>
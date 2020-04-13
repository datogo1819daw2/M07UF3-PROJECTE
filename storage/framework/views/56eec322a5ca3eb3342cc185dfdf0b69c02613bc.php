<?php $__env->startSection('content'); ?>
<div class="container">
  <u><h3>EDITAR CANAL</h3></u><br>
  <form method="POST" action="<?php echo e(route('canal.update', $canal->id)); ?>" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
    <div class="form-group">
      <label for="nomCanal">Nom canal:</label>
      <input type="text" class="form-control" name="nomCanal" value="<?php echo e($canal->nomCanal); ?>"><br>
      <label for="logotipCanal">Logotip Canal:</label>
      <input type="file" class="form-control-file" name="logotipCanal" value="<?php echo e($canal->logotipCanal); ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a  href="<?php echo e(route('canal.index')); ?>" class="btn btn-secondary">Volver</a>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\M07UF3-PROJECTE-master\resources\views/canals/editCanal.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <u><h3>CREACIÓ NOVA GRAELLA</h3></u><br>
  <form action="<?php echo e(route('graella.store')); ?>" method="POST">
  <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="nomCanal">Canal:</label>
      <select name="nomCanal" class="form-control" required>
        <?php $__currentLoopData = $createCanal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ccanal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value='<?php echo e($Ccanal->id); ?>'><?php echo e($Ccanal-> nomCanal); ?></option>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select><br>
      <label for="nomPrograma">Programa:</label>
      <select name="nomPrograma" class="form-control" required>
        <?php $__currentLoopData = $createPrograma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Pprograma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value='<?php echo e($Pprograma->id); ?>'><?php echo e($Pprograma-> nomPrograma); ?></option>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select><br>
      <label for="dia">Dia:</label>
      <input type="date" class="form-control" name="dia" required><br>
      <label for="hora">Hora:</label>
      <input type="time" class="form-control" name="hora" required><br>
    </div>
    <button type="submit" class="btn btn-success">Crear graella</button>
    <a  href="<?php echo e(route('graella.index')); ?>" class="btn btn-secondary">Volver</a>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\M07UF3-PROJECTE-master\resources\views/graellas/createGraella.blade.php ENDPATH**/ ?>
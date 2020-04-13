<?php $__env->startSection('content'); ?>
<div class="container">
  <u><h3>EDITAR CANAL</h3></u><br>
  <form action="<?php echo e(route('programa.update', $programa->id)); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
    <div class="form-group">
      <label for="nomPrograma">Nom programa:</label>
      <input type="text" class="form-control" name="nomPrograma" value="<?php echo e($programa->nomPrograma); ?>" required><br>
      <label for="descPrograma">Descripció programa:</label>
      <input type="text" class="form-control" name="descPrograma" value="<?php echo e($programa->descPrograma); ?>" required><br>
      <label for="tipoPrograma">Tipus programa:</label>
      <select name="tipoPrograma" class="form-control" required>
        <option value="Esports">Esports</option>
        <option value="Noticies">Noticies</option>
        <option value="Documental">Documetal</option>
        <option value="Dibuixos">Dibuixos animats</option>
        <option value="Reality Show">Reality Show</option>
      </select><br>
      <label for="clasPrograma">Classificació programa:</label>
      <select name="clasPrograma" class="form-control" required>
        <option value="Tots els públics">Tots els públic</option>
        <option value="+3">+3</option>
        <option value="+7">+7</option>
        <option value="+13">+13</option>
        <option value="+18">+18</option>
      </select><br>
      <label for="idCanal">Canal:</label>
      <select name="idCanal" class="form-control"  required>
        <?php $__currentLoopData = $canal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $canals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($canals->id); ?>"><?php echo e($canals->nomCanal); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select><br>
    </div>
    <button type="submit" class="btn btn-success">Crear canal</button>
    <a  href="<?php echo e(route('programa.index')); ?>" class="btn btn-secondary">Volver</a>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\M07UF3-PROJECTE-master\resources\views/programas/editPrograma.blade.php ENDPATH**/ ?>
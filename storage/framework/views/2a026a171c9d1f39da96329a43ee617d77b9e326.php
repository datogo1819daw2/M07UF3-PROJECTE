<?php $__env->startSection('content'); ?>
<div class="container">

	<?php if($message = Session::get('success')): ?>
      <div class="alert alert-success">
          <p style="margin-bottom:0px;"><?php echo e($message); ?></p>
      </div>
  	<?php endif; ?>

	<div class="col-md-12">
		<u><h3>INFORMACIÓ PROGRAMAS</h3></u><br>
		<div>
			<a href="<?php echo e(route('programa.create')); ?>" class="btn btn-success">Afegir programa</a>
			<a style="float:right;" href="<?php echo e(route('home')); ?>" class="btn btn-secondary">Volver</a>
			<br/><br/>
		</div>
		<table class="table">
			<thead class="thead-dark">
				<tr>
                    <th>ID</th>
                    <th>Nom </th>
                    <th>Descripció</th>
                    <th>Tipus</th>
                    <th>Classificació</th>
                    <th>Canal</th>
					<th width="220px"></th>
				</tr>
			</thead>

			<?php $__currentLoopData = $programas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $programa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tbody>
				<tr>
					<td><?php echo e($programa->id); ?></td>
					<td><?php echo e($programa->nomPrograma); ?></td>
                    <td><?php echo e($programa->descPrograma); ?></td>
					<td><?php echo e($programa->tipoPrograma); ?></td>
                    <td><?php echo e($programa->clasPrograma); ?></td>
					<td><?php echo e($programa->idCanal); ?></td>
					<td>
						<a class="btn btn-primary" href="<?php echo e(route('programa.edit', $programa->id)); ?>" >Editar</a>
												
						<form method="POST" action="<?php echo e(route('programa.destroy', $programa->id)); ?>" style="display:inline;">
						<?php echo csrf_field(); ?>
						<?php echo method_field('DELETE'); ?>
							<button type="submit" class="btn btn-danger">Borrar</button>		
						</form>							
						
					</td>
				</tr>
			</tbody>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div>	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\M07UF3-PROJECTE-master\resources\views/programas/indexPrograma.blade.php ENDPATH**/ ?>
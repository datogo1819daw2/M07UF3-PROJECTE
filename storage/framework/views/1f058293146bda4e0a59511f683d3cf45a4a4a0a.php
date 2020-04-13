

<?php $__env->startSection('content'); ?>
<div class="container">

	<?php if($message = Session::get('success')): ?>
      <div class="alert alert-success">
          <p style="margin-bottom:0px;"><?php echo e($message); ?></p>
      </div>
  	<?php endif; ?>

	<div class="col-md-12">
		<u><h3>INFORMACIÓ CANALS</h3></u><br>
		<div>
			<a href="<?php echo e(route('canal.create')); ?>" class="btn btn-success">Afegir canal</a>
			<a style="float:right;" href="<?php echo e(route('home')); ?>" class="btn btn-secondary">Volver</a>
			<br/><br/>
		</div>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>ID Canal</th>
					<th>Nom Canal</th>
					<th width="220px"></th>
				</tr>
			</thead>

			<?php $__currentLoopData = $canals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $canal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tbody>
				<tr>
					<td><?php echo e($canal->id); ?></td>
					<td><?php echo e($canal->nomCanal); ?></td>
					<td>
						<a class="btn btn-primary" href="<?php echo e(route('canal.edit', $canal->id)); ?>" >Editar</a>
												
						<form method="POST" action="<?php echo e(route('canal.destroy', $canal->id)); ?>" style="display:inline;">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Documents\DAW\DAW2 - 2nAny\M07 - Desenvolupament web en entorn servidor\UF3 - Laravel & MySQLBinefa\PROJECTE\M07UF3-Projecte\resources\views/canals/indexCanal.blade.php ENDPATH**/ ?>
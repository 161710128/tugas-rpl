<?php $__env->startSection('konten'); ?>
<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Nama Siswa
						</th>
						<th>
							Kelas
						</th>
						<th>
							Jurusan
						</th>
					</tr>
				</thead>
				<tbody>
					<?php  $no=1;  ?>
					<?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<?php echo e($no++); ?>

						</td>
						<td>
							<?php echo e($tab->nama); ?>

						</td>
						<td>
							<?php echo e($tab->kelas); ?>

						</td>
						<td>
							<?php echo e($tab->jurusan); ?>

						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</body>
			</table> 
			<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.custom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
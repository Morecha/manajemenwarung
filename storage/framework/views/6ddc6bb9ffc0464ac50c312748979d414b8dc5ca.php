<div class="form-group">
	<label for="<?php echo e($name); ?>"><?php echo e($text); ?></label>
	<textarea name="<?php echo e($name); ?>" id="<?php echo e(Str::slug($text)); ?>" rows="<?php echo e(($rows) ?? '6'); ?>" class="form-control"><?php echo e(($value) ?? ''); ?></textarea>
</div><?php /**PATH C:\laragon\www\manajemenwarung\resources\views/components/textarea.blade.php ENDPATH**/ ?>
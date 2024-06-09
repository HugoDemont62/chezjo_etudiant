<?php $__env->startSection('content'); ?>
    <div class="categories">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="index.php?action=categorie&idCategorie=<?php echo e($categorie['id']); ?>" class="categorie">
                <img src="<?php echo e($categorie['img_url']); ?>" alt="<?php echo e($categorie['nom']); ?>">
                <h2><?php echo e($categorie['nom']); ?></h2>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
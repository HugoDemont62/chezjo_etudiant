<?php $__env->startSection('content'); ?>
    <div class="produits">
        <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="produit">
                <h2><?php echo e($produit['nom']); ?></h2>
                <p><?php echo e($produit['description']); ?></p>
                <p>Prix : <?php echo e($produit['prix']); ?>€</p>
                <a href="index.php?action=add&refPdt=<?php echo e($produit['id']); ?>" class="btn">Ajouter au panier</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
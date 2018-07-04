<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peter Polle</title>
    <?php echo $__env->make('partials._sheets', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>

    <!-- Preloader -->

    <?php echo $__env->make('partials._preloader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  

    <!-- Home start -->
    <?php echo $__env->make('partials._home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Home end -->
    
    <?php echo $__env->yieldContent('content'); ?>

   
    <!-- Footer start -->

    <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

    <!-- Footer end -->

    <!-- Scroll-up -->

    <div class="scroll-up">
        <a href="#home"><i class="fa fa-angle-double-up"></i></a>
    </div>

    <!-- Javascript files -->
    <?php echo $__env->make('partials._scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

</body>
</html>
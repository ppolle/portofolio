<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peter Polle</title>
    @include('partials._sheets')
</head>
<body>

    <!-- Preloader -->

    @include('partials._preloader')  

    <!-- Home start -->
    @include('partials._home')

    <!-- Home end -->
    
    @yield('content')

   
    <!-- Footer start -->

    @include('partials._footer') 

    <!-- Footer end -->

    <!-- Scroll-up -->

    <div class="scroll-up">
        <a href="#home"><i class="fa fa-angle-double-up"></i></a>
    </div>

    <!-- Javascript files -->
    @include('partials._scripts') 

</body>
</html>
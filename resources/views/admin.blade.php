<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
@include('admin.head')

<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-fixed page-content-white page-md">
    @include('admin.header')
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        @include('admin.sidebar')
        @include('admin.content')
        {{-- @include('admin.quick-sidebar') --}}
    </div>
    <!-- END CONTAINER -->
    @include('admin.footer')
    @include('admin.end')
</body>

</html>
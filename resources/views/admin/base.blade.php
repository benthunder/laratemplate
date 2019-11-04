<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
@include('admin.layout.head')

<body class="page-header-fixed page-sidebar-fixed page-sidebar-closed-hide-logo page-content-white page-md">
    @include('admin.layout.header')
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        @include('admin.layout.sidebar')
        @include('admin.layout.content')
        {{-- @include('admin.layout.quick-sidebar') --}}
    </div>
    <!-- END CONTAINER -->
    @include('admin.layout.footer')
    @include('admin.layout.end')
</body>

</html>
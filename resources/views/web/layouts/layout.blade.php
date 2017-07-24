<!DOCTYPE html>
<html lang="en">
@include('web.partials.header')
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    @include('web.partials.top_nav')
   
   
            @yield('content')

    @include('web.partials.footer')
</div>
@include('blog.partials.scripts')
@yield('scripts')
</body>
</html>

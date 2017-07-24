<!DOCTYPE html>
<html lang="en">
@include('blog.partials.header')
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    @include('blog.partials.top_nav')
    @include('blog.partials.side_nav')

    <div class="content-wrapper">
        <section class="content-header">
            @yield('button')

            <h1>
                @yield('title')
                <small>@yield('sub_title')</small>
            </h1>
        </section>

        <section class="content">
            @include('blog.partials.message')

            @yield('content')
        </section>
    </div>
    @include('blog.partials.footer')
</div>
@include('blog.partials.scripts')
@yield('scripts')
</body>
</html>

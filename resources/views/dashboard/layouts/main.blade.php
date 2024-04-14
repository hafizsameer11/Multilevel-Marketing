@include('dashboard.layouts.head')

<div class="main-w" style="background-color: #F6F6F9;">
    <div class="container-fluid container-lg">
        <div class="row justify-content-center">
@include('dashboard.layouts.sidebar')
@yield('main-section')
        </div>
    </div>
</div>
@include('dashboard.layouts.off-canvas-menu')

@include('dashboard.layouts.script')

@yield('additonal-script')
@include('dashboard.layouts.footer')

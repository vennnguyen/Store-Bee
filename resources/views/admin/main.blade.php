<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.components.head')
</head>

<body>
    <section class="admin">
        <div class="row-grid">
            <div class="admin-sidebar">
                <div class="admin-sidebar-top">
                    <a href="/admin"> <img src="{{asset('backend/asset/img/logo-coolmate.png')}}" alt=""></a>
                </div>
                <div class="admin-sidebar-content">
                    @include('admin.components.sidebar')
                </div>
            </div>
            <div class="admin-content">
                <div class="admin-content-top">
                    @include('admin.components.header')
                </div>
                <div class="admin-content-main">
                    <div class="admin-content-main-title">
                        <h1>DashBoard</h1>
                    </div>
                    <div class="admin-content-main-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('backend/asset/js/admin.js')}}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', '勤怠管理')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.partials.header-default')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('layouts.partials.footer')
</body>
</html>

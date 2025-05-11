<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', '勤怠管理')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- これが超重要 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <style>
        body {
        font-family: 'Inter', sans-serif;
        margin-left: 1.5rem;
        margin-right: 1.5rem;
        }
        /* 追加でベースとなるPC用レイアウト */
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        @media (max-width: 992px) {
            .grid-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>

    {{-- 画面ごとの追加CSS用 --}}
    @stack('styles')

</head>
<body>
    @include('layouts.partials.header-default')

    <main class="container mt-4">
        @yield('content')
    </main>

    @include('layouts.partials.footer')
</body>
</html>

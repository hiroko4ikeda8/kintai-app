@extends('layouts.bootstrap')

@section('title', 'スタッフ勤怠管理画面')

@section('content')
<livewire:attendance-form />
    <div class="container mt-4">
    <h1 class="text-center">勤怠登録画面</h1>
    <button class="btn btn-primary w-100 mb-3">出勤</button>
    <button class="btn btn-secondary w-100 mb-3">休憩入</button>
    <button class="btn btn-secondary w-100 mb-3">休憩戻</button>
    <button class="btn btn-danger w-100 mb-3">退勤</button>
</div>

@endsection

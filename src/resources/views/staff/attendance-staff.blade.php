@extends('layouts.bootstrap')

@section('title', 'スタッフ勤怠管理画面')

@section('content')
<div class="mx-auto" style="max-width: 600px;">
    {{-- Livewire 勤怠フォーム --}}
    <livewire:attendance-form />

    <div class="mt-4 p-4 bg-white shadow rounded">
        <h1 class="text-center mb-4">勤怠登録画面</h1>

        <button class="btn btn-success w-100 mb-3">出勤</button>
        <button class="btn btn-warning w-100 mb-3">休憩入</button>
        <button class="btn btn-info w-100 mb-3 text-white">休憩戻</button>
        <button class="btn btn-danger w-100 mb-3">退勤</button>
    </div>
</div>
@endsection

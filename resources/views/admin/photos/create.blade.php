@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
@endsection
@section('content')
    @include('partial.admin.errors')
    <div class="container my-2">
        <div class="w-3/6 m-auto">
            <h1 class="text-2xl flex flex-row-reverse my-4">ایجاد فایل</h1>
            <form action="{{ route('photo.store') }}" method="POST" class="dropzone border-dotted rounded-lg"  enctype="multipart/form-data" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <div class="dz-message" data-dz-message><span class="flex items-center justify-center"><i class='bx bxs-cloud-download text-2xl mr-2'></i> فایل مورد نظر را در اینجا قرار دهید </span></div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"></script>
@endsection
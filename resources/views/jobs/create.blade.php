@extends('layouts.main_layout')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
@endsection

@section('cnt')
    <div class="page-wrapper" dir="rtl" style="margin-top: 150px">

        <!-- Page header -->
        <div class="page-header d-print-none mt-5 pt-5">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        
                        <h2 class="page-title">
                            <a class="text-info" href="{{ route('dashboard') }}">لوحة التحكم / </a>
                            آخــر الأعــمال
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">

                    @if (session('status'))
                        <h4 class="alert alert-success">{{ session('status') }}</h4>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{ route('job.add') }}" method="POST" enctype="multipart/form-data" class="col-12 mt-3">
                        
                        @csrf
                        
                        <div class="card">

                            <h3 class="card-title text-primary m-3 col-3">
                                إضــافة عمل جديد
                            </h3>

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">صورة العمل</label>
                                            <input type="file" class="form-control" name="img" value="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-start">
                            <button type="submit" class="btn btn-primary m-2">حــفــظ</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.main_layout')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
@endsection

@section('cnt')
    <div class="page-wrapper" dir="rtl" style="margin-top: 150px; margin-bottom: 150px">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            احدث المقالات
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

                    <div class="col-12 mt-3">
                        <div class="card">

                            <a href="{{ route('posts.create') }}" class="btn btn-primary m-3 col-sm-6 col-lg-1">
                                إضــــافة
                            </a>
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table">
                                    <thead>
                                        <tr>
                                            <th>صــورة</th>
                                            <th>التفاصيل</th>
                                            <th class="w-1"></th>
                                            <th>حــذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($posts as $post)
                                            <tr>
                                                <td class="col-2">
                                                    <div class="col-12">
                                                        @if ($post->img == 'non')
                                                            <img src="{{ asset('assets/images/portfolio-left-dec.png') }}"
                                                                alt="">
                                                        @else
                                                            <img src="{{ $post->img }}" alt="">
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex py-1 align-items-center">
                                                        <div class="flex-fill">
                                                            <div class="font-weight-medium">{{ $post->title }}</div>
                                                            <div class="text-muted">
                                                                {{ $post->subtitle }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-start">

                                                    <form action="{{ route('posts.del', $post->id) }}" method="POST"
                                                        onsubmit="return confirm('هل تريد حذف هذا المقال');">
                                                        @csrf

                                                        <input type="hidden"name="_method" value="delete">
                                                        <input type="hidden" name="del" value="">

                                                        <button type="submit" class="btn bg-white px-2 py-1">
                                                            <i class="ti ti-trash text-danger"
                                                                style="font-size: 1.5rem"></i>
                                                        </button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page header -->
        <div class="page-header d-print-none mt-5">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            آخــــر الاعمـــال
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">

                    <div class="col-12 mt-3">
                        <div class="card">

                            <a href="{{ route('job.create') }}" class="btn btn-primary m-3 col-sm-6 col-lg-1">
                                إضــــافة
                            </a>

                            <div class="row">

                                @foreach ($works as $wrk)

                                    <div class="col-sm-12 col-lg-4">
                                        <div class="mb-3">
                                            <div class="col-12">
                                                @if ($wrk->img == 'non')
                                                    <img src="{{ asset('assets/images/portfolio-left-dec.png') }}"
                                                        alt="">
                                                @else
                                                    <img src="{{ $wrk->img }}" alt="" height="250">
                                                @endif
                                            </div>

                                            <div class="text-muted">
                                                
                                                <form action="{{ route('job.del', $wrk->id) }}" method="POST"
                                                    onsubmit="return confirm('هل تريد حذف هذا العمل');">
                                                    @csrf

                                                    <input type="hidden"name="_method" value="delete">
                                                    <input type="hidden" name="del" value="">

                                                    <button type="submit" class="btn bg-white px-2 py-1">
                                                        <i class="ti ti-trash text-danger"
                                                            style="font-size: 1.5rem"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

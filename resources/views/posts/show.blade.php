@extends('layouts.main_layout')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    <style>
        .article {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .article-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .article-header h1 {
            font-size: 36px;
            color: #333;
        }

        .article-header h2 {
            font-size: 24px;
            color: #666;
        }

        .article-content {
            word-wrap: break-word;
            overflow: hidden;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .article-content p {
            font-size: 18px;
            color: #444;
            line-height: 1.6;
        }
    </style>
@endsection

@section('cnt')
    <div class="page-wrapper" dir="rtl" style="margin-top: 150px">

        <!-- Page header -->
        <div class="page-header d-print-none mt-5 pt-5">
            <div class="container-xl">

                <!-- مقال -->
                <div class="article">
                    <div class="article-header mt-5 mb-5">
                        <h1>{{ $data->title }}</h1>
                        <h2>{{ $data->subtitle }}</h2>
                    </div>
                    <div class="article-content mt-5 mb-5">
                        <img src="{{ $data->img }}" alt="" style="height:400px; padding:0; margin:0; " >
                        <p>{{ $data->details }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

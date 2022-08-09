@extends('layouts.app')

@section('content')

<style type="text/css">
    .content .t-tbl-hv td {
        padding: 10px 20px;
        border-bottom: 5px solid #fff;
        background: #f0f0f0;
        color: #000;
    }
    .content .bg-4 {
        background: #d6d5d5!important;
    }
    .content .t-tbl-nn th {
        background: #f0f2f3;
        border-bottom: 0!important;
    }
    .content .t-tbl-nn th:nth-child(1) {
        background: #d6d5d5;
    }
    .content .t-tbl-nn td {
        border-top: 0!important;
    }
    .content .t-tbl-nn td:nth-child(2) {
        border-bottom: 1px solid #ccc;
    }
</style>
    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" style="background-color: #eee;">
        <div class="container" >
            <div class="d-flex justify-content-center align-items-center p-3" style="color:#32C36C;font-size:16px;background:#fff;max-width:240px;font-weight:600">THÔNG TIN NHÀ THẦU</div>
            <div class="content">
                <h3 class="text-center mb-0 py-3 " style="background:#32C36C; color:#fff; font-size: 16px;">THÔNG TIN CHUNG</h3>
                <div class="p-3" style="background: #fff;">
                    {!! $company->info1 !!}
                </div>
                <h3 class="text-center mb-0 py-3 mt-4" style="background:#32C36C; color:#fff; font-size: 16px;">THÔNG TIN NGÀNH NGHỀ</h3>
                <div class="p-3" style="background: #fff;">
                    <table class="table t-tbl-nn">
                        <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th>Tên ngành nghề</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($company->categories as $key => $cate)
                            <tr>
                                <td class="text-center">{{$key + 1}}</td>
                                <td>
                                    <a href="/nganh-nghe/{{$cate->id}}">{{$cate->name}}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

@endsection

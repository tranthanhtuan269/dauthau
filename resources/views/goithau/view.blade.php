@extends('layouts.app')

@section('content')

<style type="text/css">
    .t-tbl-detail td{
        border-bottom: 1px solid #c4c4c4;
        padding: 3px 10px;
    }
    .t-tbl-detail td:nth-child(1) {
        background: #e5e7e8;
        font-weight: 600;
        width: 300px;
        color: #333;
    }
    .t-tbl-detail td:nth-child(2),
    .t-tbl-detail td:nth-child(4) {
        color: #999;
        background: #fff;
    }
    .d-box-head-3 {
        margin: 0;
        border-bottom: 1px #cf9d36 solid;
        background: #f0f2f3;
    }
    .t-tbl-detail td:nth-child(3) {
        background: #e5e7e8;
        font-weight: 600;
        width: 100px;
        color: #333;
    }
    .d-box-head-3-span {
        font-size: 20px;
        text-transform: uppercase;
        font-weight: bold;
        display: inline-block;
        text-align: center;
        padding: 12px 10px 10px;
        color: #0b3a72;
    }
    .m-b-20{
        margin-bottom: 20px;
    }
    .m-t-10{
        margin-top: 10px;
    }
    .d-box-head{
        font-size: 20px;
        background: #f0f2f3;
        margin: 0;
        border-bottom: 1px #cf9d36 solid;
    }
    .d-box-head span{
        font-size: 20px;
        text-transform: uppercase;
        font-weight: bold;
        display: inline-block;
        text-align: center;
        padding: 12px 10px 10px;
        color: #0b3a72;
    }
</style>
    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" style="background-color: #eee;">
        <div class="container">
            <div class="col-md-9 m-t-10 d-fix-right-5">
                <div class="d-box-wrap m-b-20">
                    <h2 class="d-box-head-3"> <span class="d-box-head-3-span">Thông tin chi tiết</span> <span class="d-box-head-3-share" style="display: none;"> <a href="#">Chia sẻ qua mail</a> <a href="#">In</a> </span> </h2>
                    <div class="d-box-new">
                        <div class="row">
                            <div class="col-md-12">
                                {!! $dauthau->info1 !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-box-wrap m-b-20">
                    <h2 class="d-box-head"><span>Tham dự thầu</span></h2>
                    <div class="d-box-new">
                        <div class="row">
                            <div class="col-md-12">
                                {!! $dauthau->info2 !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-box-wrap m-b-20">
                    <h2 class="d-box-head"><span>MỞ THẦU</span></h2>
                    <div class="d-box-new">
                        <div class="row">
                            <div class="col-md-12">
                                {!! $dauthau->info3 !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-box-wrap m-b-20">
                    <h2 class="d-box-head"><span>BẢO ĐẢM DỰ THẦU</span></h2>
                    <div class="d-box-new">
                        <div class="row">
                            <div class="col-md-12">
                                {!! $dauthau->info4 !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-back" onclick="javascript:history.back();"><a><i class="fas fa-angle-double-left"></i> Quay lại</a></div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
        
@endsection
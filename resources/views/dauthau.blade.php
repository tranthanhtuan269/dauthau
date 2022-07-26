@extends('layouts.app')

@section('content')

<style type="text/css">
    .h-tbl-time {
        border: 1px solid #32C36C;
    }
    .h-tbl-time-1 {
        background: #32C36C;
        text-align: center;
        padding: 2px 2px;
        color: #f0f2f3;
        font-size: 13px;
    }
    .h-tbl-time-2 {
        background: #fff;
        text-align: center;
        padding: 2px 2px 0;
        color: #000;
        font-size: 24px;
        font-weight: 600;
        line-height: 24px;
    }
    .h-tbl-time-3 {
        background: #fff;
        text-align: center;
        padding: 0 2px 0;
        color: #32C36C;
        font-size: 13px;
    }
    .h-tbl-border {
        background: url(/img/line-btn-2.png) no-repeat right 15px;
    }
    .h-home-table p{
        margin-bottom: 0;
        line-height: 26px;
    }
    .color-1 {
        color: #32C36C;
    }
</style>
    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" style="background-color: #eee;">
        <div class="container py-5">
            <h1 class="display-3 mb-3" style="color: #666;">Gói thầu</h1>
            <table class="table h-home-table h-home-table-3">
                <tbody>
                    <!--Item-->
                    @foreach($duans as $key=>$duan)
                        @component('layouts.project', ['project' => $duan, 'key' => $key])
                        @endcomponent
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex">
                {{ $duans->links() }}
            </div>
        </div>
    </div>
    <!-- Page Header End -->
        
@endsection
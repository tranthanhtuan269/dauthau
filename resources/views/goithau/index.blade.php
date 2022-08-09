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
    .h-top-s-tab>li.active>a,
    .h-top-s-tab>li.active>a:focus,
    .h-top-s-tab>li.active>a:hover,
    .h-top-s-tab li a:hover {
        background: rgba(1,1,1,0.5);
        color: #fff;
        font-weight: bold;
        padding: 10px 30px;
        border-radius: 4px 4px 0 0;
        border-bottom: 1px solid #fff
    }
    .h-top-s-content {
        background: rgba(1,1,1,0.5);
        border-radius: 0 3px 3px 3px;
        padding: 30px;
    }
    .tab-content>.active {
        display: block;
    }
    .active>div:first-child {
        display: block;
    }
    .form-group,
    .control-group {
        margin-bottom: 5px!important;
        width: 100%;
    }
    .form-group,
    .control-group {
        margin-bottom: 5px!important;
        width: 100%;
    }
    .form-group,
    .control-group {
        margin-bottom: 5px!important;
        width: 100%;
    }
    .h-top-s-input {
        background-color: rgba(254,254,255,0.4)!important;
        border: 1px solid #cdcdcd!important;
        border-radius: 4px;
        height: 34px;
        line-height: 34px;
        padding: 0 10px;
        color: #fff!important;
        outline: 0;
        vertical-align: middle;
        margin-right: 5px;
        width: 100%;
        font-size: 14px;
    }
    .h-top-s-input::placeholder {
        color: #fff
    }
    .h-top-s-input option {
        background: rgba(1,1,1,0.6);
    }
    select.h-top-s-input {
        appearance: none!important;
        background-image: url(../img/dropdown-arrow.png)!important;
        background-repeat: no-repeat!important;
        background-position: right center!important;
    }
    .h-top-s-btn {
        width: 34px;
        height: 34px;
        display: inline-block;
        background: url(/img/ico-search.png) no-repeat center center;
        vertical-align: middle;
    }
    .nav.nav-tabs {
        margin-bottom: 10px;
        border:none;
    }
    .date.input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }
    .date.input-group>div {
        display: table-cell;
    }
    .date.input-group>div input {
        border-radius:0!important;
    }
    .date.input-group .input-group-addon {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: normal;
        line-height: 1;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 4px;
        background: rgba(205,205,205,0.4)!important;
        color: #fefeff!important;
        display: table-cell;
        border-left:none!important;
    }
    .witdth-percent-23 { width: 23%; }
    .witdth-percent-20 { width: 20%; }
    .witdth-percent-30 { width: 30%; }
    .witdth-percent-27 { width: 27%; }
    .witdth-percent-15 { width: 15%; }
    .witdth-percent-13 { width: 13%; }
    .witdth-percent-10 { width: 10%; }
    .witdth-percent-3 { width: 3%; }
</style>
    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" style="background-color: #eee;">
        <div class="container py-5">
            <h1 class="display-3 mb-3" style="color: #666;">Gói thầu</h1>
            <div class="h-top-s-box" id="yui_patched_v3_11_0_1_1658905265251_166">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs h-top-s-tab" role="search">
                    <li role="s1" class="active"><a href="#s1" aria-controls="s1" role="s1" data-toggle="tab" >BỘ LỌC TÌM KIẾM <i class="fas fa-search m-l-10"></i> </a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content h-top-s-content" id="yui_patched_v3_11_0_1_1658905265251_165">
                    <div role="tabpanel" class="tab-pane active" id="s1">
                        <div class="container-fluid" id="yui_patched_v3_11_0_1_1658905265251_164">
                            <div class="row" id="yui_patched_v3_11_0_1_1658905265251_163">
                                <div class="col-sm-12" id="yui_patched_v3_11_0_1_1658905265251_162">
                                    <form action="" class="form " id="_luachonnhathau_WAR_bidportlet_searchForm" method="post" name="_luachonnhathau_WAR_bidportlet_searchForm" autocomplete="on">
                                        <input name="_luachonnhathau_WAR_bidportlet_formDate" type="hidden" value="1658904883080">
                                        <div class="form-group" id="yui_patched_v3_11_0_1_1658905265251_161">
                                            <div class="row">
                                                <div class="witdth-percent-23" id="li-loaithongtin">
                                                    <div class="form-group witdth-percent-100">
                                                        <div class="control-group">
                                                            <select class="aui-field-select h-top-s-input" id="_luachonnhathau_WAR_bidportlet_loaiThongTin" name="_luachonnhathau_WAR_bidportlet_loaiThongTin" onchange="changeForm()" title="Loại thông tin" placeholder="Loại thông tin">
                                                                <option class="" value="1"> Kế hoạch lựa chọn nhà thầu</option>
                                                                <option class="" value="2"> Thông báo mời sơ tuyển/quan tâm</option>
                                                                <option class="" selected="" value="3"> Thông báo mời thầu</option>
                                                                <option class="" value="4"> Thông báo gia hạn/đính chính</option>
                                                                <option class="" value="5"> Danh sách ngắn</option>
                                                                <option class="" value="8"> Kết quả lựa chọn nhà thầu</option>
                                                                <option class="" value="7"> Kết quả mở thầu điện tử</option>
                                                                <option class="" value="6"> Kết quả sơ tuyển</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="witdth-percent-20" id="li-searchtext">
                                                    <div class="form-group witdth-percent-100">
                                                        <div class="control-group input-text-wrapper">
                                                            <input class="field form-control h-top-s-input" id="_luachonnhathau_WAR_bidportlet_searchText" name="_luachonnhathau_WAR_bidportlet_searchText" placeholder="Số TBMT/Tên gói thầu" title="Thông tin tìm kiếm" type="text" value="" spellcheck="false" data-ms-editor="true"> </div>
                                                    </div>
                                                </div>
                                                <div class="witdth-percent-30" id="li-chudautu">
                                                    <div class="form-group witdth-percent-100" id="div-benmoithau" style="display: inline-block;">
                                                        <div class="control-group input-text-wrapper">
                                                            <input class="field h-top-s-input" id="_luachonnhathau_WAR_bidportlet_benMoiThau" name="_luachonnhathau_WAR_bidportlet_benMoiThau" placeholder="Bên mời thầu" title="Bên mời thầu" type="text" value="Công ty Cổ phần Lọc Hóa dầu Bình Sơn" spellcheck="false" data-ms-editor="true">
                                                            <editor-squiggler>
                                                                <style>
                                                                @media print {
                                                                    .ms-editor-squiggles-container {
                                                                        display: none !important;
                                                                    }
                                                                }

                                                                .ms-editor-squiggles-container {
                                                                    all: initial;
                                                                }
                                                                </style>
                                                                <div class="ms-editor-squiggles-container"></div>
                                                            </editor-squiggler>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="witdth-percent-27" id="li-nguonvon" style="display: inline-block;">
                                                    <div class="form-group witdth-percent-100" id="div-nguonvon">
                                                        <div class="control-group" id="yui_patched_v3_11_0_1_1658905265251_159">
                                                            <select class="aui-field-select h-top-s-input" id="_luachonnhathau_WAR_bidportlet_nguonVon" name="_luachonnhathau_WAR_bidportlet_nguonVon" onchange="changeNguonVon();" title="Nguồn vốn">
                                                                <option class="" selected="" value="1"> Trong phạm vi của Luật đấu thầu</option>
                                                                <option class="" value="2"> Ngoài phạm vi của Luật đấu thầu</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="witdth-percent-23" id="li-timkiemtheo">
                                                    <div class="form-group witdth-percent-100" id="div-timkiemtheo">
                                                        <div class="control-group">
                                                            <select class="aui-field-select h-top-s-input" id="_luachonnhathau_WAR_bidportlet_timKiemTheo" name="_luachonnhathau_WAR_bidportlet_timKiemTheo" title="Tìm kiếm theo">
                                                                <option class="" style="display: none;" value="0"> -- Chọn --</option>
                                                                <option class="" selected="" style="display: inline-block;" value="1"> Ngày đăng tải</option>
                                                                <option class="" style="display: none;" value="2"> Ngày mở sơ tuyển</option>
                                                                <option class="" style="display: inline-block;" value="3"> Ngày đóng thầu</option>
                                                                <option class="" style="display: inline-block;" value="4"> Ngày phát hành HSMT</option>
                                                                <option class="" style="display: none;" value="5"> Ngày gia hạn đính chính</option>
                                                                <option class="" style="display: none;" value="6"> Ngày mở thầu</option>
                                                                <option class="" style="display: none;" value="7"> Ngày mở/đóng thầu</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="witdth-percent-20">
                                                    <div class="form-group witdth-percent-100" id="div-time">
                                                        <div class="control-group">
                                                            <select class="aui-field-select h-top-s-input" id="_luachonnhathau_WAR_bidportlet_time" name="_luachonnhathau_WAR_bidportlet_time" onchange="changeTime();" data-toggle="dropdown" aria-expanded="true">
                                                                <option class="" selected="" value="-1"> -- Chọn --</option>
                                                                <option class="" value="0"> 1 tuần gần nhất</option>
                                                                <option class="" value="1"> 1 tháng gần nhất</option>
                                                                <option class="" value="3"> 6 tháng gần nhất</option>
                                                                <option class="" value="2"> 1 năm gần nhất</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="witdth-percent-15" id="li-tungay">
                                                    <div class="form-group" id="div-tungay">
                                                        <div id="datepicker3" class="input-group date witdth-percent-100" data-date-format="dd-mm-yyyy">
                                                            <div class="control-group input-text-wrapper">
                                                                <input class="field h-top-s-input" id="_luachonnhathau_WAR_bidportlet_tuNgay" name="_luachonnhathau_WAR_bidportlet_tuNgay" placeholder="Từ ngày" title="Ngày bắt đầu" type="text" value="" spellcheck="false" data-ms-editor="true"> </div> <span class="input-group-addon"><img src="/bid-portlet/images/icon/calendar-icon-2.png"></span> </div>
                                                    </div>
                                                </div>
                                                <div class="witdth-percent-15" id="li-denngay">
                                                    <div class="form-group" id="div-denngay">
                                                        <div id="datepicker2" class="input-group date witdth-percent-100" data-date-format="dd-mm-yyyy">
                                                            <div class="control-group input-text-wrapper">
                                                                <input class="field h-top-s-input" id="_luachonnhathau_WAR_bidportlet_denNgay" name="_luachonnhathau_WAR_bidportlet_denNgay" placeholder="Đến ngày" title="Ngày kết thúc" type="text" value="" spellcheck="false" data-ms-editor="true"> </div> <span class="input-group-addon"><img src="/bid-portlet/images/icon/calendar-icon-2.png"></span> </div>
                                                    </div>
                                                </div>
                                                <div class="witdth-percent-13" id="li-hinhthuc" style="display: inline-block;">
                                                    <div class="form-group witdth-percent-100" id="div-hinhthuc">
                                                        <div class="control-group" id="yui_patched_v3_11_0_1_1658905265251_186">
                                                            <select class="aui-field-select h-top-s-input" id="_luachonnhathau_WAR_bidportlet_hinhThuc" name="_luachonnhathau_WAR_bidportlet_hinhThuc" title="Hình thức">
                                                                <option class="" selected="" value="1"> Hình thức</option>
                                                                <option class="" value="2"> Qua mạng</option>
                                                                <option class="" value="3"> Không qua mạng</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="witdth-percent-10" id="li-linhvuc" style="display: block;">
                                                    <div class="form-group witdth-percent-100" id="div-linhvuc">
                                                        <div class="control-group open" id="yui_patched_v3_11_0_1_1658905265251_197">
                                                            <select class="aui-field-select h-top-s-input" id="_luachonnhathau_WAR_bidportlet_linhVuc" name="_luachonnhathau_WAR_bidportlet_linhVuc" data-toggle="dropdown" aria-expanded="true">
                                                                <option class="" selected="" value="-1"> Lĩnh vực</option>
                                                                <option class="" value="1"> Hàng hóa</option>
                                                                <option class="" value="2"> Xây lắp</option>
                                                                <option class="" value="3"> Tư vấn</option>
                                                                <option class="" value="4"> Hỗn hợp</option>
                                                                <option class="" value="5"> Phi tư vấn</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="witdth-percent-3">
                                                    <button class="btn-top-search" style="background: none; border: none; padding: 0; margin-left: -5px;"> <span class="h-top-s-btn"></span> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <input class="field" id="_luachonnhathau_WAR_bidportlet_dongMo" name="_luachonnhathau_WAR_bidportlet_dongMo" type="hidden" value="0">
                                        <input class="field" id="_luachonnhathau_WAR_bidportlet_sapXep" name="_luachonnhathau_WAR_bidportlet_sapXep" type="hidden" value="DESC"> </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

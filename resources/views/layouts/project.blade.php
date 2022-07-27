<tr @if($key % 2 == 0) class="h-tr-border table-secondary" @else class="h-tr-border table-light" @endif>
    <td><strong class="color-1">{{ $project->id }}</strong></td>
    <td> <strong>Số TBMT: <span class="color-3">{{ $project->so_tbmt }}</span></strong> </td>
    <td width="300" class="reponsive-dont-show">&nbsp;</td>
    <td width="150" class="reponsive-dont-show">&nbsp;</td>
</tr>
<tr @if($key % 2 == 0) class="table-secondary" @else class="table-light" @endif>
    <td style="width: 100px">
        <div class="h-tbl-time" data-toggle="tooltip" data-placement="bottom" title="Thời điểm đóng thầu">
            <div class="h-tbl-time-1">{{ isset($project->thoi_gian_nhan_e_hsdt_tu) ? \Carbon\Carbon::parse($project->thoi_gian_nhan_e_hsdt_tu)->format('m-Y') : "" }}</div>
            <div class="h-tbl-time-2">{{ isset($project->thoi_gian_nhan_e_hsdt_tu) ? \Carbon\Carbon::parse($project->thoi_gian_nhan_e_hsdt_tu)->format('d') : "" }}</div>
            <div class="h-tbl-time-3">{{ isset($project->thoi_gian_nhan_e_hsdt_tu) ? \Carbon\Carbon::parse($project->thoi_gian_nhan_e_hsdt_tu)->format('h:i') : "" }}</div>
        </div>
        <div class="h-time-line">&nbsp;</div>
    </td>
    <td class="h-tbl-border">
        <p class="color-1" title="{{ $project->ten_goi_thau }}"><strong class="text-up color-1 ellipsis-content-1row"> <a href="{{ url('/') }}/goi-thau/{{ $project->id }}" class="container-tittle">{{ $project->ten_goi_thau }}</a></strong></p>
        <p class="ellipsis-content-1row" title="{{ isset($project->creator) ? $project->creator->name : '' }}">Bên mời thầu: {{ isset($project->creator) ? $project->creator->name : "" }}</p>
        <p class="ellipsis-content-1row" title="{{ $project->dia_diem_thuc_hien_goi_thau }}">Địa điểm thực hiện gói thầu: {{ $project->dia_diem_thuc_hien_goi_thau }}</p>
    </td>
    <td width="300">
        <p>Số TBMT: <span class="color-1">{{ $project->so_tbmt }}</span></p>
        <p>Ngày đăng: <span class="color-1">{{ isset($project->thoi_gian_nhan_e_hsdt_tu) ? \Carbon\Carbon::parse($project->thoi_gian_nhan_e_hsdt_tu)->format('d/m/Y') : "" }}</span></p>
        <p>Lĩnh vực: <span class="color-1">{{ isset($project->linhvuc) ? $project->linhvuc->name : "" }}</span></p>
    </td>
    <td width="150" class="text-center"> <span @if($project->hinh_thuc_du_thau == 1) class="btn btn-primary" @else class="btn btn-success" @endif>@if($project->hinh_thuc_du_thau == 1) Qua mạng @else Trực tiếp @endif</span>
        <a href="#" class="h-tbl-icon-online h-tbl-icon" data-toggle="modal" data-target="#exampleModal" data-option="1" data-id="{{ $project->id }}" data-type="9" data-linhvuc="3"></a>
    </td>
</tr>

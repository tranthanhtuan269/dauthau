<tr class="h-tr-border">
    <td><strong class="color-1">{{ $project->id }}</strong></td>
    <td> <strong>Số TBMT: <span class="color-3">{{ $project->so_tbmt }}</span></strong> </td>
    <td width="300" class="reponsive-dont-show">&nbsp;</td>
    <td width="150" class="reponsive-dont-show">&nbsp;</td>
</tr>
<tr class="">
    <td style="width: 200px">
        <div class="h-tbl-time" data-toggle="tooltip" data-placement="bottom" title="Thời điểm đóng thầu">
            <div class="h-tbl-time-1">{{ isset($project->thoi_gian_nhan_e_hsdt_tu) ? \Carbon\Carbon::parse($project->thoi_gian_nhan_e_hsdt_tu)->format('m-Y') : "" }}</div>
            <div class="h-tbl-time-2">{{ isset($project->thoi_gian_nhan_e_hsdt_tu) ? \Carbon\Carbon::parse($project->thoi_gian_nhan_e_hsdt_tu)->format('d') : "" }}</div>
            <div class="h-tbl-time-3">{{ isset($project->thoi_gian_nhan_e_hsdt_tu) ? \Carbon\Carbon::parse($project->thoi_gian_nhan_e_hsdt_tu)->format('h:i') : "" }}</div>
        </div>
        <div class="h-time-line">&nbsp;</div>
    </td>
    <td class="h-tbl-border">
        <p title="{{ $project->tieu_de }}"><strong class="text-up color-1 ellipsis-content-1row"> <a href="{{ url('/') }}/projects/{{ $project->id }}" class="container-tittle">{{ $project->tieu_de }}</a></strong></p>
        <p class="ellipsis-content-1row" title="{{ isset($project->creator) ? $project->creator->name : '' }}">Bên mời thầu: {{ isset($project->creator) ? $project->creator->name : "" }}</p>
        <p class="ellipsis-content-1row" title="{{ $project->vi_tri }}">Địa điểm thực hiện gói thầu: {{ $project->vi_tri }}</p>
    </td>
    <td width="300">
        <p>Số TBMT: <span class="color-1">{{ $project->so_tbmt }}</span></p>
        <p>Thời điểm đăng tải: <span class="color-1">{{ isset($project->thoi_gian_nhan_e_hsdt_tu) ? \Carbon\Carbon::parse($project->thoi_gian_nhan_e_hsdt_tu)->format('d/M/Y') : "" }} | {{ isset($project->thoi_gian_nhan_e_hsdt_tu) ? \Carbon\Carbon::parse($project->thoi_gian_nhan_e_hsdt_tu)->format('h:i') : "" }}</span></p>
        <p>Lĩnh vực: <span class="color-1">{{ isset($project->linhvuc) ? $project->linhvuc->name : "" }}</span></p>
    </td>
    <td width="150" class="text-center"> <a class="h-btn-online">{{ isset($project->hinhthucduthau) ? $project->hinhthucduthau->name : "" }}</a>
        <a href="#" class="h-tbl-icon-online h-tbl-icon" data-toggle="modal" data-target="#exampleModal" data-option="1" data-id="{{ $project->id }}" data-type="9" data-linhvuc="3"></a>
    </td>
</tr>
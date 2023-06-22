@extends('dashboard.layout.master')



@section('title')
Multipurpose Bootstrap Dashboard Template
@endsection

@section('style')
<link rel="stylesheet" href={{asset("AdminAssets/src/plugins/src/table/datatable/datatables.css")}}>
<link rel="stylesheet" href={{asset("AdminAssets/src/plugins/css/light/table/datatable/dt-global_style.css")}}>
<link rel="stylesheet" href={{asset("AdminAssets/src/plugins/css/light/table/datatable/custom_dt_custom.css")}}>
@endsection


@section('Unread_msg_count')
9 Unread
@endsection

 
@section('msg_sender')
test test
@endsection
@section('msg_sender_pic')
{{asset('AdminAssets/src/assets/img/profile-16.jpeg')}}
@endsection

@section('msg_time')
1 hr ago
@endsection



@section('notification_count')
28 New
@endsection

@section('notification_title')
test Rebooted
@endsection

@section('notification_time')
45 min ago
@endsection
@section('notification_icon')
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
@endsection




@section('admin_pic')
{{asset('AdminAssets/src/assets/img/profile-30.png')}}
@endsection
@section('admin_name')
toto almotawa7esh
@endsection

@section('admin_possition')
manager
@endsection


@section('dashboard_sec')
    @lang('BlogCat_tr/index_tr.dashboard_sec')
@endsection

@section('main_content')
<div class="container ">
    <div class="card">
        <div class="card-header">Manage roles</div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@endsection



@section('script')


    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}



    <script src={{asset("AdminAssets/src/plugins/src/table/datatable/datatables.js")}}></script>
    <script src={{asset("AdminAssets/src/assets/js/custom.js")}}></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- {!! $dataTable->scripts() !!} --}}

@endsection

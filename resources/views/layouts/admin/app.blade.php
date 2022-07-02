<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Task </title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="{{asset('admin/inspina/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/inspina/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/inspina/Ionicons/css/ionicons.min.css')}}">
    <link href="{{asset('admin/inspina/css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/inspina/js/plugins/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/inspina/js/plugins/sweetalert/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('admin/inspina/js/plugins/bootstrap-fileinput/css/fileinput.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/inspina/js/plugins/lightbox2/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link href="{{asset('admin/inspina/css/style.css')}}" rel="stylesheet">
    @if(app()->getLocale() == 'ar')
        <link href="{{asset('admin/inspina/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/inspina/css/inspina-rtl.css')}}" rel="stylesheet">
    @else
        <link href="{{asset('admin/inspina/css/style.css')}}" rel="stylesheet">
    @endif
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    @stack('styles')
</head>
<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        {{--// profile image and display name of user--}}
                        <span>
                           <p>{{"مرحبا" . ' ' . auth()->user()->name}}</p>
                         </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
{{--                                <span class="block m-t-xs">--}}
                                {{--                                    <strong class="font-bold">{{Auth::user()->name}}</strong>--}}
                                {{--                                    @foreach(auth()->user()->roles as $role)--}}
                                {{--                                        <span class="label label-success">{{$role->display_name}}</span>--}}
                                {{--                                    @endforeach--}}
                                {{--                                </span>--}}
                            </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            {{--<li><a href="">حسابي</a></li>--}}
                            {{--<li class="divider"></li> -->--}}
                            <li>
                                <script type="">
                                    function submitSidebarSignout() {
                                        document.getElementById('signoutSidebar').submit();
                                    }
                                </script>
                                {!! Form::open(['method' => 'post', 'url' => url('logout'),'id'=>'signoutForm','id'=>'signoutSidebar']) !!}
                                {!! Form::close() !!}
                                <a href="{{route('logout')}}" onclick="submitSidebarSignout()">{{trans('admin.logout')}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">{{ config('app.name') }}</div>
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">
        <style>
            span.select2-container {
                z-index: 10050;
                width: 100% !important;
                padding: 0;
            }
            .select2-container .select2-search--inline {
                float: left;
                width: 100%;
            }
        </style>
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary pull-right" href="#"><i
                            class="fa fa-bars"></i> </a>
                    {{--<form role="search" class="navbar-form-custom" method="post" action="#">--}}
                    {{--<div class="form-group">--}}
                    {{--<input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">--}}
                    {{--</div>--}}
                    {{--</form>--}}
                </div>
            </nav>
        </div>
        <section class="content-header">
            <h1>
                {{$page_header ?? "Task"}}
                <small>{!! $page_description ?? '' !!}</small>
            </h1>
        </section>
        <div class="wrapper wrapper-content">
            <div class="row">
                {{--                @if(session()->has('key'))--}}
                {{--                    <div class="alert alert-success">{{session()->get('key')}}</div>--}}
                {{--                @endif--}}
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mainly scripts -->
<script src="{{asset('admin/inspina/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('admin/inspina/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/inspina/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('admin/inspina/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- Custom and plugin javascript -->
<script src="{{asset('admin/inspina/js/inspinia.js')}}"></script>
<script src="{{asset('admin/inspina/js/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('admin/inspina/js/plugins/jquery-confirm/jquery.confirm.min.js')}}"></script>
<script src="{{asset('admin/inspina/js/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('admin/inspina/js/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('admin/inspina/js/plugins/bootstrap-fileinput/js/fileinput.min.js')}}"></script>
<script src="{{asset('admin/inspina/js/plugins/bootstrap-fileinput/js/fileinput_locale_ar.js')}}"></script>
<script src="{{asset('admin/inspina/js/plugins/lightbox2/js/lightbox.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<style>
    .swal2-popup {
        font-size: 1.5rem !important;
    }
</style>
</body>
</html>

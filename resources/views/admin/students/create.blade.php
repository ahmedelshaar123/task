@extends('layouts.admin.app',[
            'page_header'       => "Task",
            'page_description'       => "اضافة طالب",
                                ])
@inject('student', 'App\Models\Student')
@section('content')
    <div class="ibox-content">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($student,[
                                'action'=>'App\Http\Controllers\Admin\StudentController@store',
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'POST',
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="first_name">الاسم الأول</label>
                {!! Form::text("first_name",null,[
                    'class'=>'form-control',
                ]) !!}
            </div>
            <div class="form-group">
                <label for="second_name">الاسم الثاني</label>
                {!! Form::text("second_name",null,[
                    'class'=>'form-control',
                ]) !!}
            </div>
            <div class="form-group">
                <label for="third_name">الاسم الثالث</label>
                {!! Form::text("third_name",null,[
                    'class'=>'form-control',
                ]) !!}
            </div>
            <div class="form-group">
                <label for="email">البريد الالكتروني</label>
                {!! Form::text("email",null,[
                    'class'=>'form-control',
                ]) !!}
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
        {!! Form::close()!!}
    </div>
@stop

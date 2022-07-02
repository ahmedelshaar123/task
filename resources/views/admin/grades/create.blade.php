@extends('layouts.admin.app',[
            'page_header'       => "Task",
            'page_description'       => "اضافة طالب",
                                ])
@inject('grade', 'App\Models\Grade')
@section('content')
    <div class="ibox-content">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($grade,[
                                'action'=>'App\Http\Controllers\Admin\ExcelReadController@store',
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'POST',
                                'files'=>true
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="excel_file">ملف الاكسل</label>
                <input name="excel_file" type="file">
            </div>

        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
        {!! Form::close()!!}
    </div>
@stop

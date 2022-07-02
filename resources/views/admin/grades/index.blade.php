@extends('layouts.admin.app',[
         'page_header'       => "Task",
         'page_description'       => "عرض الدرجات"
                                ])
@section('content')
    <div class="ibox-content">
        <div class="box-body">
            @if(count($grades))
                <div class="table-responsive">
                    <table class="data-table table table-bordered" id="table1">
                        <thead>
                        <th class="text-center">#</th>
                        <th class="text-center">اسم الطالب</th>
                        <th class="text-center">بريد الطالب</th>
                        <th class="text-center">درجة الطالب</th>
                        <th class="text-center">رقم الجلوس</th>
                        </thead>
                        <tbody id="ajax_search">
                        @foreach($grades as $grade)
                            <tr id="removable{{$grade->id}}">
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$grade->student->first_name . ' ' . $grade->student->second_name . ' ' . $grade->student->third_name}}</td>
                                <td class="text-center">{{$grade->student->email}}</td>
                                <td class="text-center">{{$grade->grade}}</td>
                                <td class="text-center">{{$grade->seating_number}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        @else
            <div class="col-md-4 col-md-offset-4">
                <div class="alert alert-info md-blue text-center">لا توجد بيانات</div>
            </div>
        @endif
    </div>
@stop

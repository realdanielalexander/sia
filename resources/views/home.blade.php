@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-4">
        <h2>@lang('menu.majors')</h2>
        <p>
            @lang('menu.major_list')
        </p>
        <p>
            <a class="btn btn-secondary" href="/majors">@lang('menu.more')</a>
        </p>
    </div>


    <div class="col-md-4">
        <h2>@lang('menu.students')</h2>
        <p>
            @lang('menu.student_list')
        </p>
        <p>
            <a class="btn btn-secondary" href="/students">@lang('menu.more')</a>
        </p>
    </div>
</div>
@endsection
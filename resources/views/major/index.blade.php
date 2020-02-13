@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12 py-2">
        <h2>
            @lang('pages.major_list')
        </h2>
    </div>
    <div class="col-sm-12 py-2">
        <a href="/majors/new" class="btn btn-primary">@lang('pages.new_major')</a>
    </div>
    <div class="col-sm-12 py-2">
        <table class="table table-striped book-table">
            <thead>
                <tr>
                    <th>@lang('pages.major_name')</th>
                    <th>@lang('pages.major_code')</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (count($majors) == 0)
                <tr>
                    <td colspan="5" style="text-align: center">@lang('pages.table_no_data')</td>
                </tr>
                @endif


                @foreach ($majors as $major)
                <tr>

                    <td>
                        {{ $major->name }}
                    </td>
                    <td>
                        {{ $major->code }}
                    </td>
                    <td>
                        <form action="/majors/{{ $major->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}


                            <button class="btn btn-danger">@lang('pages.delete_major')</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
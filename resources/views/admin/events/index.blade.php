@extends('layouts.admin.app')

@section('page_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.2/datatables.min.css"/>
@endsection

@section('content')
    <table class="table datatables table-hover-animation mb-0"></table>
@endsection

@section('page_js')
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.2/datatables.min.js"></script>    <script>
        $(document).ready(function () {
            new Crud({
                columns: [
                    {title: 'TITLE', data: 'title'},
                    {title: 'DESCRIPTION', data: 'description'},
                    {title: 'START DATE', data: 'start_date'},
                    {title: 'END DATE', data: 'end_date'},
                    {title: 'ACTIONS', data: 'actions'},
                ],
                routes: {
                    index: "{{ route('admin_.events.index') }}",
                },
            });
        });
    </script>
@endsection

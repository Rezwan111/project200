@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="mt-lg-5">
                <div class="card shadow-lg search-blood p-5 search-blood">
                    <table id="users_table" style="width: 100%" class="w-100 table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Group</td>
                            <td>Email</td>
                            <td>Address</td>
                            <td>Mobile</td>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script>
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });
        $("#users_table").DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "/searchBlood/{{$bloodGroup->id}}",
            },
            columns: [
                {
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: false,
                    searchable: false,
                },
                {
                    data: "name",
                    name: "name",
                },
                {
                    data: "blood_group",
                    name: "blood_group",
                },
                {
                    data: "email",
                    name: "email",
                },
                {
                    data: "address",
                    name: "address",
                },
                {
                    data: "mobile_number",
                    name: "mobile",
                    orderable: false
                },

            ],
        });

    </script>
@endsection

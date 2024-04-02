@extends('layouts.admin')

{{-- Customize layout sections --}}

@section('subtitle', 'Profile')
@section('content_header_title', 'Admin')
@section('content_header_subtitle', 'Role')

{{-- Content body: main page content --}}

@section('content_body')
    {{-- Setup data for datatables --}}
    @php
    @endphp

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-auto mr-auto">
                    <h5 class="card-title">Roles</h5>
                </div>
                <div class="col-auto ml-auto">
                    <div class="pb-3">
                        <a href='{{url('admin/role/create')}}' class="btn btn-primary">+ Tambah Data</a>
                    </div>
                </div>
            </div>

            {{--                <div class="my-3 p-3 bg-body rounded shadow-sm">--}}
            <!-- FORM PENCARIAN -->
            {{--                    <div class="pb-3">--}}
            {{--                        <form class="d-flex" action="" method="get">--}}
            {{--                            <input class="form-control me-1" type="search" name="katakunci"--}}
            {{--                                   value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci"--}}
            {{--                                   aria-label="Search">--}}
            {{--                            <button class="btn btn-secondary" type="submit">Cari</button>--}}
            {{--                        </form>--}}
            {{--                    </div>--}}

            <!-- TOMBOL TAMBAH DATA -->
            {{--                <x-adminlte-datatable id="table1" :heads="$heads">--}}
            {{--                    @foreach($roles as $index => $row )--}}
            {{--                        <tr>--}}
            {{--                            <td>{!! $index+1 !!}</td>--}}
            {{--                            <td>{!! $row->name !!}</td>--}}
            {{--                            <td>{!! $row->guard_name !!}</td>--}}
            {{--                            <td><nobr>{!! $btnEdit.$btnDelete.$btnDetails !!}</td>--}}
            {{--                        </tr>--}}
            {{--                    @endforeach--}}
            {{--                </x-adminlte-datatable>--}}
            {{--                </div>--}}
            <livewire:role-table>
        </div>
    </div>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush


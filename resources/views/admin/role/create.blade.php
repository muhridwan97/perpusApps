@extends('layouts.admin')

{{-- Customize layout sections --}}

@section('subtitle', 'Profile')
@section('content_header_title', 'Admin')
@section('content_header_subtitle', 'Role')

{{-- Content body: main page content --}}

@section('content_body')
    {{-- Setup data for datatables --}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    <div class="card card-primary">
        <div class="card-header">
            <div class="col-auto mr-auto">
                <h5 class="card-title">Create Roles</h5>
            </div>
        </div>
        <div class="card-body">
            <form action='{{url('admin/role')}}' method='post'>
                @csrf
                <div class="row">
                    <x-adminlte-input name="name" label="Nama Role" placeholder="Masukkan Nama Role"
                                      value="{{ Session::get('name') }}"
                                      class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                                      fgroup-class="col-md-6"/>
                </div>
                <x-adminlte-button label="Save" theme="outline-primary" type="submit" icon="fas fa-save"/>
            </form>
        </div>
    </div>
    {{--        </div>--}}
    {{--    </div>--}}
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


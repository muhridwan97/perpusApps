@extends('layouts.admin')

{{-- Customize layout sections --}}

@section('subtitle', 'Profile')
@section('content_header_title', 'Admin')
@section('content_header_subtitle', 'Role')

{{-- Content body: main page content --}}

@section('content_body')
    {{-- Setup data for datatables --}}

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

@push('js')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            Livewire.on('triggerDelete', id => {
                Swal.fire({
                    title: 'Are You Sure?',
                    html: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                }).then((result) => {
                    if (result.value) {
                        Livewire.dispatch('deleteRole', {id: id})
                    }
                });
            });
        })

        // $('#btn-delete').click(function () {
        //     let post_id = $(this).data('id');
        //     Swal.fire({
        //         title: 'Are You Sure?',
        //         html: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //     }).then((result) => {
        //         if (result.value) {
        //             Livewire.call('destroy', post_id)
        //         }
        //     });
        // })
    </script>
@endpush


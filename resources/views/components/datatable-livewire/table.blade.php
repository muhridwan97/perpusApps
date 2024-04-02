@props([
    'sortColumn',
    'items',
    'columns',
    'page',
    'perPage',
    'sortDirection',
    'isModalEdit',
    'routeEdit',
    'routeView',
])

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
    </div>
    <div class="card-body border-bottom py-3">
        <div class="d-flex">
            <div class="p-2 text-muted">
                Show
                <div class="mx-2 d-inline-flex">
                    <p class="badge badge-secondary" wire:model.live="perPage" id="perPage"> {{ $perPage }}</p>
                </div>
                entries
            </div>
            <div class="ml-auto p-2 text-muted">
                Search:
                <div class="ms-2 d-inline-block">
                    <input wire:model.live.debounce.300ms="search" type="text" class="form-control form-control-sm"
                           aria-label="Search invoice">
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <x-datatable-livewire.table-head :columns="$columns" :sortColumn="$sortColumn"
                                             :sortDirection="$sortDirection"/>
            <x-datatable-livewire.table-body :isModalEdit="$isModalEdit" :routeEdit="$routeEdit" :routeView="$routeView"
                                             :items="$items" :columns="$columns" :page="$page"
                                             :perPage="$perPage"/>
        </table>
    </div>
    <div class="card-footer d-flex align-items-center">
        <div class="p-2 d-flex flex-nowrap align-items-center">
            <label for="perPage" class="mr-2">Per Page</label>
            <select class="form-control" wire:model.live="perPage" id="perPage">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
        </div>
        <div class="ml-auto p-2">
            {{ $items->links() }}
        </div>
    </div>
    <div wire:loading.class="overlay">
        <i wire:loading.class="fas fa-2x fa-sync-alt fa-spin"></i>
    </div>
</div>

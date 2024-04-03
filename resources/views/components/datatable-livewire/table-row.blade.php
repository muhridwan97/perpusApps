@props(['item', 'key', 'page', 'perPage', 'columns', 'isModalEdit',  'routeEdit', 'routeView'])

<tr wire:key="{{ $item->id . $page }}">
    <td class="">{{ ++$key + $perPage * ($page - 1) }}</td>
    @foreach ($columns as $column)
        <td>

            @if ($column['isData'])
                {!! $this->customFormat($column['column'], $column['hasRelation'] ? $item->{$column['column']}->{$column['columnRelation']} : $item->{$column['column']}) !!}
            @elseif ($column['column'] === 'action')
                <div class="flex gap-1 items-center justify-center">
                    @if(($routeView))
                        <a href="{{ route($routeView, $item->id) }}"
                           class="flex btn px-1 py-1 rounded-md  text-bg-blue">
                            <i class="fa fa-lg fa-fw fa-eye"></i>
                        </a>
                    @endif
                    @if($isModalEdit)
                        <button wire:loading.attr="disabled" wire:click="edit({{ $item->id }})"
                                class="flex btn px-1 py-1 rounded-md  text-bg-yellow">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </button>
                    @else
                        <a href="{{ route($routeEdit, $item->id) }}"
                           class="flex btn px-1 py-1 rounded-md  text-bg-yellow">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </a>
                    @endif
                    <button wire:loading.attr="disabled"
{{--                            id="btn-delete" data-id="{{$item->id}}"--}}
                            wire:click="$dispatch('triggerDelete',{{ $item->id }})"
                            class="flex btn px-1 py-1 text-bg-red">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </button>
                </div>
            @endif
        </td>
    @endforeach
</tr>

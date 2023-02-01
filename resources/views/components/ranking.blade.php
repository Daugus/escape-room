<table class="table-auto">
    <thead>
        <tr>
            @if ($showState == 'true')
                <th class="border border-gray-700 bg-neutral-200 appearance-none text-gray-700 rounded py-3 px-4">
                    Estado
                </th>
            @endif

            <th class="border border-gray-700 bg-neutral-200 appearance-none text-gray-700 rounded py-3 px-4">
                Tiempo
            </th>
            <th class="border border-gray-700 bg-neutral-200 appearance-none text-gray-700 rounded py-3 px-4">
                Dificultad
            </th>
            <th class="border border-gray-700 bg-neutral-200 appearance-none text-gray-700 rounded py-3 px-4">
                Grupo
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($games as $game)
            <tr>
                @if ($showState == 'true')
                    <td class="border border-gray-700 px-3 py-1">{{ ucfirst($game->state) }}</td>
                @endif

                <td class="border border-gray-700 px-3 py-1">{{ isset($game->time) ? $game->time : '-' }}</td>
                <td class="border border-gray-700 px-3 py-1">{{ $game->diff_name }}</td>
                <td class="border border-gray-700 px-3 py-1">{{ $game->group_name }}</td>
                {{-- <td class="border border-gray-700 px-3 py-2">
                    <a class="text-white font-bold py-1 px-2 rounded focus:outline-none bg-amber-500"
                        href="{{ route('ranking.group', ['id' => $game->group_id]) }}">Ver grupo</a>
                </td> --}}
            </tr>
        @endforeach
    </tbody>
</table>

{{ $games->links('components.pagination') }}

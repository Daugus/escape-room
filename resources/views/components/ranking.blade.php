<table class="table-auto">
    <thead>
        <tr>
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
                <td class="border border-gray-700 px-3 py-1">{{ $game->time }}</td>
                <td class="border border-gray-700 px-3 py-1">{{ $game->diff_name }}</td>
                <td class="border border-gray-700 px-3 py-1">{{ $game->group_name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $games->links('components.pagination') }}

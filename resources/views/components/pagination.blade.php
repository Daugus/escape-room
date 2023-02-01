@if ($paginator->hasPages())
    <nav>
        <ul class="flex gap-3">
            <li>
                @if ($paginator->onFirstPage())
                    <a class="text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500"
                        tabindex="-1">Anterior</a>
                @else
                    <a class="text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500"
                        href="{{ $paginator->previousPageUrl() }}">Anterior</a>
                @endif
            </li>

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li>
                            @if ($page === $paginator->currentPage())
                                <a class="underline">{{ $page }}</a>
                            @else
                                <a href="{{ $url }}">{{ $page }}</a>
                            @endif
                        </li>
                    @endforeach
                @endif
            @endforeach

            <li>
                @if ($paginator->hasMorePages())
                    <a class="text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500"
                        href="{{ $paginator->nextPageUrl() }}" rel="next">Siguiente</a>
                @else
                    <a class="text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500">Siguiente</a>
                @endif
            </li>
        </ul>
@endif

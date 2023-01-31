@if ($paginator->hasPages())
    <nav>
        <ul class="flex gap-3">
            @if ($paginator->onFirstPage())
                <li class="">
                    <a class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" tabindex="-1">Anterior</a>
                </li>
            @else
                <li class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500"><a class="" href="{{ $paginator->previousPageUrl() }}">Anterior</a></li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page === $paginator->currentPage())
                            <li class="">
                                <a class="underline">{{ $page }}</a>
                            </li>
                        @else
                            <li class="">
                                <a class="" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="">
                    <a class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" href="{{ $paginator->nextPageUrl() }}" rel="next">Siguiente</a>
                </li>
            @else
                <li class="">
                    <a class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500">Siguiente</a>
                </li>
            @endif
        </ul>
@endif

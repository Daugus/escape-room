<form action="{{ route($ruta) }}" method="POST">
    @csrf

    <label for="difficulty">Dificultad:</label>
    <select name="difficulty" id="difficulty">
        <option value="" @selected($options['difficulty'] === '')>Cualquiera</option>
        <option value="1" @selected($options['difficulty'] === '1')>Fácil</option>
        <option value="2" @selected($options['difficulty'] === '2')>Normal</option>
        <option value="3" @selected($options['difficulty'] === '3')>Difícil</option>
    </select>

    <label for="userCount">Jugadores:</label>
    <select name="userCount" id="userCount">
        <option value="" @selected($options['userCount'] === '')>Cualquiera</option>
        <option value="1" @selected($options['userCount'] === '1')>1</option>
        <option value="2" @selected($options['userCount'] === '2')>2</option>
        <option value="3" @selected($options['userCount'] === '3')>3</option>
        <option value="4" @selected($options['userCount'] === '4')>4</option>
    </select>

    @if ($showState)
        {{ $options['state'] }}
        <label for="state">Estado:</label>
        <select name="state" id="state">
            <option value="" @selected($options['state'] === '')>Cualquiera</option>
            <option value="cancelada" @selected($options['state'] === 'cancelada')>Cancelada</option>
            <option value="perdida" @selected($options['state'] === 'perdida')>Perdida</option>
            <option value="ganada" @selected($options['state'] === 'ganada')>Ganada</option>
        </select>
    @endif

    <button type="submit">Filtrar</button>
</form>

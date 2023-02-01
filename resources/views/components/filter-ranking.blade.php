<form action="{{ route('ranking.filter') }}" method="POST">
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
        <option value="">Cualquiera</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>

    <button type="submit">Filtrar</button>
</form>

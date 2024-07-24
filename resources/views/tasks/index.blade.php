<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des tâches</title>
    @vite('resources/sass/index.scss')



</head>

<body>
    <h1 class="main-ttl">Liste des tâches</h1>

    @if(count($tasks) > 0)
    <div class="create-container">
        <ul >
            @foreach($tasks as $task)
            <li>
                {{ $task->title }} - {{ $task->description }}

                <form  action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="delete-btn btn" type="submit">Supprimer</button>
                </form>
            </li>
            <a href="{{ route('tasks.edit', $task->id) }}"> <button class="modify-btn btn">Modifier</button> </a>
            @endforeach

        </ul>
        @else
        <p>Aucune tâche trouvée.</p>
        @endif

        <a href="{{ route('tasks.create') }}"><button class="create-btn btn">Créer une nouvelle tâche</button></a>
    </div>
</body>

</html>
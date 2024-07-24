<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la tâche</title>
</head>
<body>
    <h1>Détails de la tâche</h1>

    <h2>Titre:</h2>
    <p>{{ $task->title }}</p>

    <h2>Description:</h2>
    <p>{{ $task->description }}</p>

    <a href="{{ route('tasks.index') }}">Retour à la liste des tâches</a>
</body>
</html>
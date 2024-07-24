<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la tâche</title>
</head>
<body>
    <h1>Modifier la tâche</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $task->id }}">
        <label for="title">Titre:</label>
        <input type="text" id="title" name="title" value="{{ $task->title }}" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $task->description }}</textarea><br><br>

        <button type="submit">Enregistrer les modifications</button>
    </form>
</body>
</html>

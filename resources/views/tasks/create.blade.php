<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une nouvelle tâche</title>
    
</head>
<body>
    <h1>Créer une nouvelle tâche</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Titre:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea><br><br>

        <button type="submit">Créer</button>
    </form>

    <a href="{{ route('tasks.index') }}">
        <button>Afficher les tâches</button>
    </a>
</body>
</html>


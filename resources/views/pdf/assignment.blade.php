<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Assignment PDF</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; padding: 20px; }
        h2 { color: #1e90ff; }
        .label { font-weight: bold; margin-top: 10px; }
    </style>
</head>
<body>
    <h2>Assignment Detail</h2>
    <p><span class="label">Teacher:</span> {{ $assignment->teacher }}</p>
    <p><span class="label">Course:</span> {{ $assignment->course }}</p>
    <p><span class="label">Title:</span> {{ $assignment->title }}</p>
    <p><span class="label">Description:</span> {{ $assignment->description }}</p>
    <p><span class="label">Deadline:</span> {{ $assignment->due_date }}</p>
</body>
</html>

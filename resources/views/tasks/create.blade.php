<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Schedule New Task</h2>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">Back to Dashboard</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Task Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Details</label>
            <textarea name="details" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Scheduled At</label>
            <input type="datetime-local" name="scheduled_at" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Schedule Task</button>
    </form>
</div>
</body>
</html>

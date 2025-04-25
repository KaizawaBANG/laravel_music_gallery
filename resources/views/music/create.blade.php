<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        .container {
            max-width: 800px;
            padding-top: 20px;
        }
        h1 {
            font-size: 2rem;
            font-weight: normal;
            margin-bottom: 30px;
        }
        h2 {
            font-size: 1.75rem;
            font-weight: normal;
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: normal;
            font-size: 16px;
            margin-bottom: 6px;
        }
        .form-control {
            border-radius: 2px;
            padding: 8px 12px;
            font-size: 16px;
            border: 1px solid #dee2e6;
            margin-bottom: 20px;
        }
        .btn {
            padding: 6px 16px;
            border-radius: 4px;
            font-size: 16px;
            margin-right: 10px;
        }
        .btn-primary {
            background-color: #f8f9fa;
            color: #212529;
            border: 1px solid #dee2e6;
        }
        .btn-secondary {
            background-color: white;
            color: #dc3545;
            border: 1px solid #dee2e6;
        }
        .header-bg {
            background-color: #f8f9fa;
            padding: 10px 0;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="header-bg">
        <div class="container">
            <h1>Music Gallery</h1>
        </div>
    </div>

    <div class="container">
        <h2>Create music</h2>
        
        <form action="{{ route('music.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            <div class="mb-3">
                <label for="artist" class="form-label">Artist</label>
                <input type="text" class="form-control" id="artist" name="artist" required>
            </div>
            
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Add Music</button>
            <a href="{{ route('music.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
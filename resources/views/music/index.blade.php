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
            background-color: #fff;
        }
        .container {
            max-width: 800px;
            padding-top: 20px;
        }
        h1 {
            font-size: 2rem;
            font-weight: normal;
            margin-bottom: 50px;
        }
        h2 {
            font-size: 1.75rem;
            font-weight: normal;
            margin-bottom: 15px;
        }
        .create-btn {
            border: 1px solid #dee2e6;
            background-color: white;
            border-radius: 4px;
            padding: 6px 12px;
            text-decoration: none;
            color: #212529;
            font-size: 0.9rem;
        }
        .create-btn:hover {
            background-color: #f8f9fa;
        }
        .music-item {
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .music-title {
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 5px;
        }
        .music-artist, .music-genre {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 0;
        }
        .action-btn {
            border: 1px solid #dee2e6;
            background-color: white;
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
        }
        .action-btn:after {
            display: none;
        }
        .dropdown-menu {
            min-width: 120px;
            padding: 5px 0;
        }
        .dropdown-item {
            padding: 5px 15px;
            font-size: 0.9rem;
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
            <h1 class="mb-0">Music Gallery</h1>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Music</h2>
            <a href="{{ route('music.create') }}" class="create-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16" style="margin-right: 4px; vertical-align: -2px;">
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                Create music
            </a>
        </div>
        
        @if($musicList->count() > 0)
            @foreach($musicList as $music)
            <div class="music-item">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="music-title">{{ $music->name }}</div>
                        <div class="music-artist">{{ $music->artist }}</div>
                        <div class="music-genre">{{ $music->genre }}</div>
                    </div>
                    <div class="dropdown">
                        <button class="action-btn dropdown-toggle" type="button" id="actionDropdown{{ $music->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="actionDropdown{{ $music->id }}">
                            <li><a class="dropdown-item" href="{{ route('music.edit', $music->id) }}">Edit</a></li>
                            <li>
                                <form action="{{ route('music.destroy', $music->id) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger">Delete</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="text-center py-5">
                <p class="text-muted mb-3">No music found</p>
                <a href="{{ route('music.create') }}" class="create-btn">Create Music</a>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Confirm before delete
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                if (!confirm('Are you sure you want to delete this item?')) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
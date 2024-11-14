<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obituary List</title>

    <meta name="description" content="Explore a comprehensive list of obituaries, remembering those who have passed. Find detailed information including names, dates of birth and death, and authors of submissions.">
    <meta name="keywords" content="obituary, remembrance, memorial, death notices, life celebration">
    <meta name="author" content="Your Website Name">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Obituary List">
    <meta property="og:description" content="Explore a comprehensive list of obituaries, remembering those who have passed.">
    <meta property="og:image" content="URL_to_image.jpg">
    <meta property="og:url" content="https://yourwebsite.com/obituaries">
    <meta property="og:site_name" content="Your Website Name">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Obituary List">
    <meta name="twitter:description" content="Explore a comprehensive list of obituaries, remembering those who have passed.">
    <meta name="twitter:image" content="URL_to_image.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #007bff;
            color: #ffffff;
            width: 100%;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: orange;
        }

        td {
            color: #333;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            color: #007bff;
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
            border: 1px solid #007bff;
            transition: background-color 0.3s, color 0.3s;
        }

        .pagination a:hover {
            background-color: #007bff;
            color: #ffffff;
        }

        .pagination .active a {
            background-color: #007bff;
            color: #ffffff;
            pointer-events: none;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Obituary List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('view_obituaries') }}">View List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('obituary_form') }}">Add Obituary</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <!-- Table -->
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Date of Death</th>
                    <th>Content</th>
                    <th>Author</th>
                    <th>Submission Date</th>
                    <th>Edit</th> 
                    <th>Delete</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($obituaries as $obituary)
                    <tr>
                        <td>{{ $obituary->name }}</td>
                        <td>{{ $obituary->date_of_birth }}</td>
                        <td>{{ $obituary->date_of_death }}</td>
                        <td>{{ $obituary->content }}</td>
                        <td>{{ $obituary->author }}</td>
                        <td>{{ $obituary->created_at }}</td>
                        <td>
                            <a href="{{ route('obituaries.edit', $obituary->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <!-- Delete Button Form -->
                            <form action="{{ route('obituaries.destroy', $obituary->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this obituary?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        {{ $obituaries->links() }}
    </div>

    <!-- Bootstrap JS and Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

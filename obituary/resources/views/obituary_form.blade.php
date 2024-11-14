<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obituary Form</title>
    <meta name="description" content="Submit an obituary to be listed on the website.">
    <meta name="keywords" content="obituary, memorial, remembrance, obituary submission">
    <meta name="author" content="Obituary">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Obituary Form">
    <meta property="og:description" content="Submit an obituary to be listed on the website.">
    <meta property="og:image" content="URL_to_image.jpg">
    <meta property="og:url" content="https://obituary.com/submit-obituary">
    <meta property="og:site_name" content="Obituary">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Obituary Form">
    <meta name="twitter:description" content="Submit an obituary to be listed on the website.">
    <meta name="twitter:image" content="URL_to_image.jpg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            padding-top: 10px;
        }

        .navbar {
            margin-bottom: 10px;
            width: 63%;
            margin: auto;
            padding: 10px,10px;
            border-radius: 8px;
            
        }

        .container {
            max-width: 800px;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: #333;
        }

        form label {
            font-weight: bold;
            color: #555;
        }

        input[type="text"], input[type="date"], textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .form-group {
            margin-bottom: 25px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Obituary List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('view_obituaries') }}">View List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('obituary_form') }}">Add Obituary</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container">
    <h2>Submit an Obituary</h2>
    <form method="POST" action="{{ route('submit_obituary') }}">
        @csrf

        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name" required placeholder="Enter the deceased's full name">
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="dob" required>
        </div>

        <div class="form-group">
            <label for="dod">Date of Death:</label>
            <input type="date" name="date_of_death" id="dod" required>
        </div>

        <div class="form-group">
            <label for="content">Obituary Content:</label>
            <textarea name="content" id="content" required placeholder="Write a detailed obituary"></textarea>
        </div>

        <div class="form-group">
            <label for="author">Author's Name:</label>
            <input type="text" name="author" id="author" required placeholder="Enter your name as the author">
        </div>

        <button type="submit" class="btn-submit">Submit Obituary</button>
    </form>
</div>

<!-- Bootstrap JS and Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>

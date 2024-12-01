<?php include('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Library Management System</h1>

    <!-- Add Book Form -->
    <form id="addBookForm">
        <input type="text" id="title" placeholder="Book Title" required>
        <input type="text" id="author" placeholder="Author" required>
        <input type="number" id="year" placeholder="Published Year" required>
        <input type="text" id="genre" placeholder="Genre" required>
        <button type="submit">Add Book</button>
    </form>

    <!-- Search Bar -->
    <input type="text" id="search" placeholder="Search by Title">

    <!-- Book List -->
    <div id="bookList">
        <?php
        $result = $conn->query("SELECT * FROM books ORDER BY id DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<div class='book'>
                    <h3>" . $row['title'] . "</h3>
                    <p>Author: " . $row['author'] . "</p>
                    <p>Year: " . $row['published_year'] . "</p>
                    <p>Genre: " . $row['genre'] . "</p>
                  </div>";
        }
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>

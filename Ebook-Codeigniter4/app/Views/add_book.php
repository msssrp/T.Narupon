<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?= view('templates/header') ?>

<div class="container mt-5">
    <h2>Add a New Book</h2>
    <form action="<?= site_url('books/add') ?>" method="post" enctype="multipart/form-data" class="mt-4">
        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" required class="form-control">
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select name="category" required class="form-control">
                <option value="Hardware">Hardware</option>
                <option value="Software">Software</option>
                <!-- Add more options here -->
            </select>
        </div>
        <div class="form-group">
            <label>ISBN:</label>
            <input type="text" name="isbn" required class="form-control">
        </div>
        <div class="form-group">
            <label>Author:</label>
            <input type="text" name="author" required class="form-control">
        </div>
        <div class="form-group">
            <label>Cover Image:</label>
            <input type="file" name="cover_image" required class="form-control">
        </div>
        <div class="form-group">
            <label>Cover Image:</label>
            <input type="file" name="book_file" required class="form-control">
        </div>    
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</div>
<?= view('templates/footer') ?>

</body>
</html>

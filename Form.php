<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Bootstrap CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2>Contact Form</h2>
    <form action="display.php" method="POST">
        <!-- Name input -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <!-- Email input -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Issue dropdown -->
        <div class="mb-3">
            <label for="issue" class="form-label">Issue</label>
            <select class="form-select" id="issue" name="issue" required>
                <option value="Query">Query</option>
                <option value="Feedback">Feedback</option>
                <option value="Complaint">Complaint</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <!-- WYSIWYG Text Area -->
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="5" required></textarea>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    // Initialize CKEditor on the text area
    CKEDITOR.replace('comment');
</script>

</body>
</html>

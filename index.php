<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

.description {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    text-align: left;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Description</h1>
        <div class="description">
            <?php include 'generate_description.php'; ?>
        </div>
    </div>
</body>
</html>
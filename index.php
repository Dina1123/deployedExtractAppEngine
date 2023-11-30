?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP App</title>
</head>
<body>

    <h1>Hello, this is a simple PHP app!</h1>

    <?php if (isset($rows) && count($rows) > 0): ?>
        <ul>
            <?php foreach ($rows as $row): ?>
                <li><?= htmlspecialchars($row['column_name']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No data found.</p>
    <?php endif; ?>

</body>
</html>
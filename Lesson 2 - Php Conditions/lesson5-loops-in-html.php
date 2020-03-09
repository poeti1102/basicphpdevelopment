<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops In HTML</title>
</head>
<body>
    <ul>
        <?php for($i = 1 ; $i <= 20 ; $i++): ?>
            <li><?php echo $i; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>
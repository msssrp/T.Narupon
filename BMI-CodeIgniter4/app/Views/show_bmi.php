<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show BMI</title>
</head>
<body>
    <h1>Your BMI</h1>
    <p>Your BMI is <?= esc($bmi) ?> which is considered as "<?= esc($interpretation) ?>"</p>
</body>
</html>
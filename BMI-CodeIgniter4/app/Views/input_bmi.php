<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate BMI</title>
</head>
<body>
    <h1>Calculate Your BMI</h1>
    <form action="<?= site_url('calbmi') ?>" method="post">
        <div>
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" required step="any">
        </div>
        <div>
            <label for="height">Height (cm):</label>
            <input type="number" id="height" name="height" required step="any">
        </div>
        <button type="submit">Calculate BMI</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
</head>
<body>
    <h2>Upload a File</h2>
    <?php if(session()->get('message')): ?>
        <p style="color: green;"><?= session()->getFlashdata('message') ?></p>
    <?php endif; ?>
    <form action="<?= site_url('upload/uploadFile') ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="theFile" required>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
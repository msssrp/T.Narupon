<h2>List of Uploaded Files</h2>

<?php if (!empty($files) && is_array($files)): ?>
    <ul>
        <?php foreach ($files as $file): ?>
            <li>
                <!-- ปรับ URL เพื่ออ้างอิงไฟล์ใน public/assets -->
                <a href="<?= base_url('/assets/' . esc($file['file_name'])); ?>" target="_blank"><?= esc($file['file_name']); ?></a>
                (<?= esc($file['file_type']); ?>)
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No files have been uploaded.</p>
<?php endif; ?>
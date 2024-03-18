<?php namespace App\Models;

use CodeIgniter\Model;

class UploadModel extends Model
{
    protected $table = 'uploads';
    protected $allowedFields = ['file_name', 'file_type', 'file_path'];
}
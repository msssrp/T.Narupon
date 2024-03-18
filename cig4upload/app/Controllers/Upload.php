<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UploadModel;

class Upload extends BaseController
{
    public function index()
    {
        return view('upload_form');
    }

    public function uploadFile()
    {
        $file = $this->request->getFile('theFile');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            // ปรับเส้นทางการเคลื่อนย้ายไฟล์ไปยังโฟลเดอร์ `assets`
            $file->move(ROOTPATH . 'public/assets', $newName);
    
            // บันทึกข้อมูลไฟล์ลงในฐานข้อมูล
            $model = new UploadModel();
            $model->save([
                'file_name' => $newName,
                'file_type' => $file->getClientMimeType(),
                'file_path' => ROOTPATH . 'public/assets/' . $newName,
            ]);
    
            return redirect()->to('/upload')->with('message', 'File has been uploaded and saved to database');
        }
        
    }
    public function listFiles()
    {
        $model = new UploadModel();
        $data['files'] = $model->findAll();

        return view('list_files', $data);
    }
}
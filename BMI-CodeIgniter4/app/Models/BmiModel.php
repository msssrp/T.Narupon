<?php

namespace App\Models;

use CodeIgniter\Model;

class BmiModel extends Model
{

    // ฟังก์ชันคำนวณ BMI
    public function calculateBmi($weight, $height)
    {
        // แปลงสูงจากเซนติเมตรเป็นเมตร
        $heightInMeters = $height / 100;

        // คำนวณ BMI
        $bmi = $weight / ($heightInMeters * $heightInMeters);

        return round($bmi, 2); // ปัดเศษไปที่สองตำแหน่ง
    }

    public function interpretBmi($bmi)
    {
        if ($bmi < 18.5) {
            return 'น้ำหนักน้อย/ผอม';
        } elseif ($bmi >= 18.5 && $bmi <= 22.9) {
            return 'ปกติ (สุขภาพดี)';
        } elseif ($bmi >= 23 && $bmi <= 24.9) {
            return 'ท้วม/โรคอ้วนระดับ 1';
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return 'อ้วน/โรคอ้วนระดับ 2';
        } else {
            return 'อ้วนมาก/โรคอ้วนระดับ 3';
        }
    }
    
 
}

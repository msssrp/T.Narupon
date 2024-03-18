<?php

namespace App\Controllers;
use App\Models\BmiModel; // นำเข้า BmiModel

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function showbmi() 
    {
        $model = new BmiModel(); // สร้างอินสแตนซ์ของ BmiModel
        // ตัวอย่าง: กำหนดน้ำหนักและสูงเป็น static เพื่อทดสอบ
        $weight = 70; // น้ำหนัก 70 กิโลกรัม
        $height = 170; // สูง 170 เซนติเมตร
        
        $bmiValue = $model->calculateBmi($weight, $height);
        $bmiInterpretation = $model->interpretBmi($bmiValue);
        echo "ค่า BMI ของคุณคือ: $bmiValue - $bmiInterpretation";

        // $bmi = $model->calculateBmi($weight, $height); // คำนวณ BMI
        // $interpretation = $model->interpretBmi($bmi); // แปลความหมายของค่า BMI

        //ส่งข้อมูลไปยัง view
        // return view('show_bmi', [
        //         'bmi' => $bmi,
        //         'interpretation' => $interpretation
        // ]);
    }

}
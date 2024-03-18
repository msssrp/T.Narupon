<?php

namespace App\Controllers;
use App\Models\BmiModel; // นำเข้า BmiModel

class BmiController extends BaseController
{
    public function calculateBmi()
    {
        $model = new BmiModel();

        $weight = $this->request->getVar('weight');
        $height = $this->request->getVar('height');

        $bmi = $model->calculateBmi($weight, $height);
        $interpretation = $model->interpretBmi($bmi);

        echo "BMI: $bmi, Interpretation: $interpretation";
    }

    public function showInputForm()
    {
        return view('input_bmi');
    }
}
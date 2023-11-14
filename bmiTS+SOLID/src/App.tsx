import React, { useState } from 'react';

class BMICalculatorService {
  static calculateBMI(height: number, weight: number): number {
    const heightInMeters: number = height / 100;
    return +(weight / (heightInMeters * heightInMeters)).toFixed(2);
  }
}

class BMICalculatorPresenter {
  static getBMIResult(bmi: number): string {
    if (bmi < 18.5) {
      return 'Underweight';
    } else if (bmi <= 24.9) {
      return 'Normal weight';
    } else {
      return 'Overweight';
    }
  }
}

const App: React.FC = () => {
  const [height, setHeight] = useState<number | string>('');
  const [weight, setWeight] = useState<number | string>('');
  const [bmi, setBMI] = useState<number | null>(null);
  const [bmiResult, setBmiResult] = useState<string>('');

  const calculateBMI = (): void => {
    if (typeof height === 'number' && typeof weight === 'number') {
      const bmiValue: number = BMICalculatorService.calculateBMI(height, weight);
      setBMI(bmiValue);
      const result = BMICalculatorPresenter.getBMIResult(bmiValue);
      setBmiResult(result);
    } else {
      alert('Please enter valid height and weight.');
    }
  };

  return (
    <div className='h-full w-full flex flex-col justify-center items-center'>
      <h1 className='text-[30px] mt-[250px]'>BMI Calculator</h1>
      <div className='flex w-[1500xp] mt-[30px]'>
        <label className='w-[50%]'>Height (cm): </label>
        <input
          className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-[50%] p-1.5'
          type="number"
          value={typeof height === 'number' ? height : ''}
          onChange={(e) => setHeight(Number(e.target.value))}
        />
      </div>
      <div className='flex w-[315px] mt-[30px]'>
        <label className='w-[50%]'>Weight (kg): </label>
        <input
          className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-[50%] p-1.5'
          type="number"
          value={typeof weight === 'number' ? weight : ''}
          onChange={(e) => setWeight(Number(e.target.value))}
        />
      </div>
      <button onClick={calculateBMI} className='mt-[30px] bg-gray-300 rounded-lg p-3 border'>Calculate BMI</button>
      {bmi !== null && (
        <div className='flex mt-[30px]'>
          <h2 className={`text-black`}>Your BMI: {bmi}</h2>
          <h2 className={`ml-8 ${bmi < 18.5 ? "text-red-400" : bmi <= 24.9 ? "text-black" : "text-orange-300"}`}>{bmiResult}</h2>
        </div>
      )}
    </div>
  );
};

export default App;


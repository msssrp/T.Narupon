import React, { useState } from 'react';
function App() {

  const [height, setHeight] = useState('');
  const [weight, setWeight] = useState('');
  const [bmi, setBMI] = useState(null);
  const [bmiResult, setBmiResult] = useState('')
  // Function to calculate BMI
  const calculateBMI = () => {
    if (height && weight) {
      const heightInMeters = height / 100; // Convert height to meters
      const bmiValue = (weight / (heightInMeters * heightInMeters)).toFixed(2);
      setBMI(bmiValue);
      if (bmiValue < 18.5) {
        setBmiResult("Underweight")
      } else if (bmiValue <= 24.9) {
        setBmiResult("Normal weight")
      } else {
        setBmiResult("Overweight")
      }
    } else {
      // Handle invalid input
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
          value={height}
          onChange={(e) => setHeight(e.target.value)}
        />
      </div>
      <div className='flex w-[315px] mt-[30px]'>
        <label className='w-[50%]'>Weight (kg): </label>
        <input
          className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-[50%] p-1.5'
          type="number"
          value={weight}
          onChange={(e) => setWeight(e.target.value)}
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
  )
}

export default App

class Person {
    private gender: string;
    private age: number;
    private height: number;
    private weight: number;
  
    constructor(gender: string, age: number, height: number, weight: number) {
      this.gender = gender;
      this.age = age;
      this.height = height;
      this.weight = weight;
    }
  
    public calculateBMI(): number {
      const heightInMeters = this.height / 100; 
      return this.weight / (heightInMeters * heightInMeters);
    }

    public getBMICategory(): string {
      const bmi = this.calculateBMI();
  
      if (bmi < 18.5) {
        return "Underweight";
      } else if (bmi >= 18.5 && bmi < 25) {
        return "Normal weight";
      } else if (bmi >= 25 && bmi < 30) {
        return "Overweight";
      } else {
        return "Obese";
      }
    }
  }
  
  function calculateBMI() {
    const genderInput = document.getElementById("gender") as HTMLInputElement;
    const ageInput = document.getElementById("age") as HTMLInputElement;
    const heightInput = document.getElementById("height") as HTMLInputElement;
    const weightInput = document.getElementById("weight") as HTMLInputElement;
    const resultDiv = document.getElementById("result");
  
    const gender = genderInput.value;
    const age = parseInt(ageInput.value, 10);
    const height = parseInt(heightInput.value, 10);
    const weight = parseInt(weightInput.value, 10);
  
    const person = new Person(gender, age, height, weight);
    const bmi = person.calculateBMI();
    const bmiCategory = person.getBMICategory();
  
    resultDiv.innerHTML = `<ul>
    <li>
    <p>age: ${age}</p>
    </li>
    <li>
    <p>gender: ${gender}</p>
    </li>
    <li>
    <p>BMI: ${bmi.toFixed(2)} (${bmiCategory})</p>
    </li>
    </ul>`;
  }
  
  const calculateBtn = document.getElementById("calculateBtn");
  calculateBtn.addEventListener("click", calculateBMI);
  
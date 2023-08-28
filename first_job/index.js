var Person = /** @class */ (function () {
    function Person(gender, age, height, weight) {
        this.gender = gender;
        this.age = age;
        this.height = height;
        this.weight = weight;
    }
    Person.prototype.calculateBMI = function () {
        var heightInMeters = this.height / 100;
        return this.weight / (heightInMeters * heightInMeters);
    };
    Person.prototype.getBMICategory = function () {
        var bmi = this.calculateBMI();
        if (bmi < 18.5) {
            return "Underweight";
        }
        else if (bmi >= 18.5 && bmi < 25) {
            return "Normal weight";
        }
        else if (bmi >= 25 && bmi < 30) {
            return "Overweight";
        }
        else {
            return "Obese";
        }
    };
    return Person;
}());
function calculateBMI() {
    var genderInput = document.getElementById("gender");
    var ageInput = document.getElementById("age");
    var heightInput = document.getElementById("height");
    var weightInput = document.getElementById("weight");
    var resultDiv = document.getElementById("result");
    var gender = genderInput.value;
    var age = parseInt(ageInput.value, 10);
    var height = parseInt(heightInput.value, 10);
    var weight = parseInt(weightInput.value, 10);
    var person = new Person(gender, age, height, weight);
    var bmi = person.calculateBMI();
    var bmiCategory = person.getBMICategory();
    resultDiv.innerHTML = "<ul>\n    <li>\n    <p>age: ".concat(age, "</p>\n    </li>\n    <li>\n    <p>gender: ").concat(gender, "</p>\n    </li>\n    <li>\n    <p>BMI: ").concat(bmi.toFixed(2), " (").concat(bmiCategory, ")</p>\n    </li>\n    </ul>");
}
var calculateBtn = document.getElementById("calculateBtn");
calculateBtn.addEventListener("click", calculateBMI);

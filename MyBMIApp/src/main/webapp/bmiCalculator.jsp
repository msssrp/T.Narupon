<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BMI Calculator</title>
</head>
<body>

    <h2>BMI Calculator</h2>

    <form action="bmiCalculator.jsp" method="post">
        Enter your weight (kg): <input type="text" name="weight" required><br>
        Enter your height (m): <input type="text" name="height" required><br>
        <input type="submit" value="Calculate BMI">
    </form>

    <%
        // Process form data and calculate BMI
        if (request.getMethod().equalsIgnoreCase("POST")) {
            double weight = Double.parseDouble(request.getParameter("weight"));
            double height = Double.parseDouble(request.getParameter("height"));

            double bmi = weight / (height * height);

            out.println("<br><br>");
            out.println("<strong>Your BMI:</strong> " + bmi);

            // Provide BMI categories for reference
            out.println("<br><strong>BMI Categories:</strong>");
            out.println("<br>Underweight: Less than 18.5");
            out.println("<br>Normal weight: 18.5 - 24.9");
            out.println("<br>Overweight: 25 - 29.9");
            out.println("<br>Obesity: 30 or greater");
        }
    %>

</body>
</html>


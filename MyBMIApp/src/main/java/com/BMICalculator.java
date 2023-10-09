package com;

public class BMICalculator {
    private double weight;
    private double height;

    public BMICalculator(double weight, double height) {
        this.weight = weight;
        this.height = height;
    }

    public double calculateBMI() {
        return weight / (height * height);
    }
}


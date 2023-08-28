
public class FactoryMethodDemo {
	
	public static void main(String[] args) {
		ShapeFactory shapeFactory = new ConcreteShapeFactoty();
		
		Shape shape1 = shapeFactory.getShape("Rectangle");
		//shape shape = new Circle();
		
		shape1.draw();
	}
}

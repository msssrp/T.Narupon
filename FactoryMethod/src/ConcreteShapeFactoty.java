
public class ConcreteShapeFactoty extends ShapeFactory{
	
	public Shape getShape(String shapeType) {
		if("CIRCLE".equalsIgnoreCase(shapeType)) {
			return new Circle();
			} else if ("RECTANGLE".equalsIgnoreCase(shapeType)) {
				return new Rectangle();
			} else if ("TRIANGLE".equalsIgnoreCase(shapeType)) {
				return new Triangle();
			}
		return null;
		}
		
}

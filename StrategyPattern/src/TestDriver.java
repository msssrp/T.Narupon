
public class TestDriver {
	public static void main(String[] args) {
		ShoppingCart cart1 = new ShoppingCart();
		cart1.checkout(1500);
		cart1.setPaymentStrategy(new CreditCardPayment());
		cart1.checkout(2000);
	}
}

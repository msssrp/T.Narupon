
public class CreditCardPayment implements PaymentStrategy {

	@Override
	public void pay(int amount) {
        System.out.println("Paid by credit card: " + amount);
    }

}


public class ScanPayment implements PaymentStrategy {

    @Override
    public void pay(int amount) {
       System.out.println("Pay by scan QR code: " + amount);
    }
}
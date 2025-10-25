<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Payments</title>
    @vite('resources/js/app.js')
</head>
<body style="font-family: sans-serif; padding: 20px;">

    <h2> Live Payments</h2>
    <ul id="paymentsList">
        @forelse ($payments as $payment)
            <li>
                💸 Invoice {{ $payment->invoice_id }} —
                {{ $payment->amount }} {{ $payment->currency }}
                ({{ $payment->status }})
            </li>
        @empty
            <li>No payments yet. Waiting for new ones...</li>
        @endforelse
    </ul>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        if (window.Echo) {
            console.log(" Echo is ready and connected...");

            // Listen for new payments on the "payments" channel
            window.Echo.channel('payments')
                .listen('.payment.received', (e) => {
                    console.log(" Payment received event:", e);

                    const list = document.getElementById('paymentsList');
                    const li = document.createElement('li');
                    li.textContent = `💸 Invoice ${e.payment.invoice_id} — ${e.payment.amount} ${e.payment.currency} (${e.payment.status})`;

                    list.insertBefore(li, list.firstChild); // add new one on top
                });
        } else {
            console.error(" Echo not found!");
        }
    });
    </script>

</body>
</html>

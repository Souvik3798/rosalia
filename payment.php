<?php include 'include/header.php'; ?>

<!-- Payment Page Styles -->
<style>
    .payment-container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        padding: 10rem 2rem 2rem 2rem;
        /* Increased top padding to account for navbar */
    }

    .payment-card {
        background: white;
        padding: 3rem;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 600px;
        width: 100%;
        animation: slideUp 0.5s ease-out;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .payment-icon {
        font-size: 5rem;
        color: #59c45a;
        margin-bottom: 1.5rem;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .payment-title {
        color: #2c3e50;
        font-size: 3rem;
        margin-bottom: 1rem;
        font-weight: 700;
    }

    .payment-description {
        color: #7f8c8d;
        font-size: 1.3rem;
        line-height: 1.6;
        margin-bottom: 2rem;
    }

    .qr-container {
        background: #f8f9fa;
        padding: 2rem;
        border-radius: 15px;
        margin: 2rem auto;
        border: 2px dashed #59c45a;
        width: 100%;
        max-width: 400px;
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .qr-code {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .payment-steps {
        text-align: left;
        margin-top: 2rem;
    }

    .step {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .step:hover {
        transform: translateX(10px);
    }

    .step-number {
        background: #59c45a;
        color: white;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .step-text {
        color: #2c3e50;
        font-size: 1.2rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .payment-container {
            padding: 8rem 1rem 1rem 1rem;
        }

        .payment-card {
            padding: 2rem 1rem;
        }

        .payment-title {
            font-size: 2.2rem;
        }

        .payment-description {
            font-size: 1.1rem;
        }

        .qr-container {
            width: 100%;
            max-width: none;
            padding: 1rem;
            margin: 1rem 0;
        }

        .qr-code {
            width: 100%;
            max-height: 70vh;
            object-fit: contain;
        }

        .step {
            padding: 0.8rem;
        }

        .step-text {
            font-size: 1rem;
        }
    }
</style>

<!-- Payment Page Content -->
<div class="payment-container">
    <div class="payment-card">
        <i class="fas fa-qrcode payment-icon"></i>
        <h1 class="payment-title">Complete Your Payment</h1>
        <p class="payment-description">
            You're just one step away from confirming your booking! Scan the QR code below using your preferred payment app to proceed with the payment securely.
        </p>

        <div class="qr-container">
            <img src="images/qr.png" alt="Payment QR Code" class="qr-code">
        </div>

        <div class="payment-steps">
            <div class="step">
                <span class="step-number">1</span>
                <span class="step-text">Open your UPI-enabled payment app</span>
            </div>
            <div class="step">
                <span class="step-number">2</span>
                <span class="step-text">Scan the QR code shown above</span>
            </div>
            <div class="step">
                <span class="step-number">3</span>
                <span class="step-text">Enter the amount and complete the payment</span>
            </div>
            <div class="step">
                <span class="step-number">4</span>
                <span class="step-text">Wait for payment confirmation</span>
            </div>
        </div>

        <p class="payment-description" style="margin-top: 2rem;">
            <i class="fas fa-shield-alt" style="color: #59c45a;"></i>
            Your payment is secured with end-to-end encryption
        </p>
    </div>
</div>

<?php include 'include/footer.php'; ?>
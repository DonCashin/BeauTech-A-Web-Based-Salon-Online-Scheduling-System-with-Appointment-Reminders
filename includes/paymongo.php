<?php
/**
 * PayMongo Configuration File
 * 
 * IMPORTANT: Replace the keys below with your actual PayMongo API keys
 * Get your keys from: https://dashboard.paymongo.com/developers
 */

// PayMongo API Keys
// TEST KEYS - Use these for testing (they start with sk_test_ and pk_test_)
define('PAYMONGO_SECRET_KEY', 'sk_test_EEzQb72uwow28BeTq7qRVuLC'); // Replace this!
define('PAYMONGO_PUBLIC_KEY', 'pk_test_m1H6Xk6hU9evwkRb1DbB6HKi'); // Replace this!

// LIVE KEYS - Use these for production (they start with sk_live_ and pk_live_)
// define('PAYMONGO_SECRET_KEY', 'sk_live_YOUR_LIVE_SECRET_KEY_HERE');
// define('PAYMONGO_PUBLIC_KEY', 'pk_live_YOUR_LIVE_PUBLIC_KEY_HERE');

// PayMongo API Base URL
define('PAYMONGO_API_URL', 'https://api.paymongo.com/v1');

// Your Website URL (NO TRAILING SLASH)
define('SITE_URL', 'https://aurorasbymimie.online'); // Your actual domain

/**
 * SETUP INSTRUCTIONS:
 * 
 * 1. Sign up for PayMongo account at https://dashboard.paymongo.com
 * 2. Go to Developers section
 * 3. Copy your Secret Key (starts with sk_test_)
 * 4. Copy your Public Key (starts with pk_test_)
 * 5. Replace the keys above
 * 6. Update SITE_URL with your actual domain
 * 7. For production, switch to live keys (sk_live_ and pk_live_)
 */

// Verify configuration
if (PAYMONGO_SECRET_KEY === 'sk_test_EEzQb72uwow28BeTq7qRVuLC') {
    error_log('WARNING: PayMongo secret key not configured! Please update includes/paymongo.php');
}
?>
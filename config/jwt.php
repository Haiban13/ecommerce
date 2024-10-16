<?php

return [
    'driver' => 'jwt', // Choose the driver (jwt in this case)
    'secret' => env('JWT_SECRET'), // Replace with a secure secret key
    'expire' => env('JWT_EXPIRE', 21600), // Token expiration in seconds (6 hours)
    'refresh' => true, // Allow refresh tokens
    'refresh_ttl' => 28800, // Refresh token TTL (8 hours)
    // ... other configuration options
];

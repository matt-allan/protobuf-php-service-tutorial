```bash
# Install dependencies
composer install

# Generate the protobuf classes
composer gen-proto

# Start the server
php -S localhost:8000 -t ./public

# (in a different terminal) make a request
php make_requests.php
```

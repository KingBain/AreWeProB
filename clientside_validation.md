Insert this code into your site to add service cert 

```
<!DOCTYPE html>
<html>
<head>
    <title>Your Website Title</title>
</head>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Construct the URL dynamically to be website agnostic
            const tokenUrl = window.location.protocol + '//' + window.location.hostname + '/certification.jwt';

            fetch(tokenUrl)
                .then(response => response.text())
                .then(token => {
                    // Decode the JWT payload
                    const payload = JSON.parse(atob(token.split('.')[1]));
                    const today = new Date();
                    const expirationDate = new Date(payload.expirationDate);

                    // Check if the domain in the JWT matches the current website's domain
                    if (payload.domain !== window.location.hostname) {
                        document.body.innerHTML = '<h1>Unauthorized Access</h1><p>This certification token is not valid for the domain you are attempting to access. Please verify the URL or contact support for assistance.</p>';
                        throw new Error('Domain mismatch: The certification token domain does not match the current domain.');
                    }

                    // Check if the token is expired
                    if (today > expirationDate) {
                        // Token is expired, display a warning and stop loading the website
                        document.body.innerHTML = '<h1>Certification Expired</h1><p>The certification for this site has expired. Please renew your certification or contact support for further assistance.</p>';
                        throw new Error('Certification expired: The access token for this site has expired.');
                    }

                    // Token is not expired and domain matches, website content loads as usual
                    // Additional website initialization code can go here
                })
                .catch(error => console.error('Error fetching or processing the token:', error));
        });
    </script>

<body>
    <noscript>
        <div style="background-color: #ffcc00; text-align: center; padding: 20px;">
            <h1>JavaScript Required</h1>
            <p>We're sorry, but our website requires JavaScript to be enabled to function correctly. Please enable JavaScript and reload the page.</p>
        </div>
    </noscript>

    <!-- Your website content goes here -->

</body>
</html>
```

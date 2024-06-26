# Are We Protected B?
## Presentation 
[![Alt text](https://github.com/KingBain/AreWeProB/assets/367922/50a2ebf2-8b8f-4d42-9aa1-642dd96def07)](https://youtu.be/5QdXj6rkY5w)



## Overview
"Are We Protected B?" is a web-based tool designed to provide a quick and fun response to the commonly asked question "Are we Protected B?". The tool offers a humorous yet straightforward answer depending on the security status of a given domain. In no way does this tool validate actual Protected B status.

This project consists of two main parts:

1. **The Landing Page (`index.html`)**: A static HTML page that uses JavaScript to change its appearance based on URL parameters. It serves as a fun way to check if a particular domain is "Protected B" compliant.

2. **The API (`/api/index.php`)**: A simple PHP script that returns a JSON object indicating the security status of a domain as per the "Protected B" standard.

## How It Works
- **Landing Page**: Users are prompted with the message "Are we prob? Navigate with parameters to find out!" They can pass parameters in the URL to get a customized response. For example, appending `?domain=yourdomain.com&prob=true` to the URL will cause the page to show a green background with the text "Yes", indicating that the domain is "Protected B" compliant.

- **API**: By navigating to `/api/index.php?domain=yourdomain.com&prob=true`, the API returns a JSON response with the domain name and a boolean indicating the "Protected B" status.

## Setup
To set up this project, simply clone the repository and deploy the files to your web server. Ensure that PHP is installed if you wish to utilize the API functionality.

## Usage
### Landing Page
Access the landing page at [https://areweprob.com/](https://areweprob.com/) and add URL parameters as needed:

- `https://areweprob.com/?domain=yourdomain.com&prob=true` - for domains that are "Protected B" compliant.
- `https://areweprob.com/?domain=yourdomain.com&prob=false` - for domains that are not yet "Protected B" compliant.

### API
Send a GET request to the API at [https://api.areweprob.com/?domain=yourdomain.com&prob=true](https://api.areweprob.com/?domain=yourdomain.com&prob=true) with the required parameters:

- `https://api.areweprob.com/?domain=yourdomain.com&prob=true` - to indicate a compliant domain.
- `https://api.areweprob.com/?domain=yourdomain.com&prob=false` - to indicate a non-compliant domain.

The API will return a JSON object containing the domain and its "Protected B" status.

## Contributing
Contributions are welcome! Feel free to fork the repository and submit a pull request with your improvements.

## License
This project is open-sourced under the [MIT License](LICENSE).

## Acknowledgments
Special thanks to everyone who asks, "Are we Protected B?", thus inspiring the creation of this tool.

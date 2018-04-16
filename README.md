# Codeigniter-reCAPTCHA
Recaptcha of Codeigniter

# What is reCAPTCHA?
reCAPTCHA is a free service that protects your site from spam and abuse. It uses advanced risk analysis engine to tell humans and bots apart. With the new API, a significant number of your valid human users will pass the reCAPTCHA challenge without having to solve a CAPTCHA (See blog for more details). reCAPTCHA comes in the form of a widget that you can easily add to your blog, forum, registration form, etc.

# Sign up for an API key pair
[Link](https://www.google.com/recaptcha/)

# Usage
Set your site key and secret on `config/recaptcha.php` file  
`$config['recaptcha_site_key'] = 'your site key';`  
`$config['recaptcha_secret_key'] = 'your secret key';`

### controllers  
`$this->load->library('recaptcha');`

### views
`<script src='https://www.google.com/recaptcha/api.js'></script>` in `</head>`  
`<div class="g-recaptcha" data-sitekey="your site key"></div>`

### Verify Response
`$resp = $this->recaptcha->verifyResponse($this->input->post('g-recaptcha-response'));`

# CCMS Product Sale Landing page

This is a simple landing page that allows you to sell a downloadable digital product

## Features

- Customizable settings
- Google analytics
- Stripe integration
- Pricing table
- No database required

## How it works

- User purchases your product using credit/debit via Stripe
- After payment is complete, user is issued a license key
- User is directed to product download page
- License keys are stored in `upload/.keys` file

## Installation

- Run `composer install`
- Copy `config.sample.php` to `config.php`.
- Open `config.php` and fill in the variables as necessary

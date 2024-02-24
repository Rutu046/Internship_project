<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BotScan - Article Processing Charges</title>
  <link rel="stylesheet" href="{{Asset("css/apc.css")}}"> <!-- Link to the external CSS file -->
</head>

<body>

@extends('layout.header')
@section('webcontent')

  <header>
    <h1>BotScan - Article Processing Charges (APC)</h1>
  </header>

  <section>
    <div class="container">
      <div class="apc-info">
        <p>BotScan provides all articles in full open access immediately upon publication. For manuscripts submitted from
          1 October 2023, authors will be required to pay a one-time article processing charge (APC) upon formal
          manuscript acceptance.</p>
        <p>The APC is paid for the costs of peer review administration and management, professional production of
          articles in PDF and other formats, website maintenance, dissemination of published papers in various
          platforms, including the provision of online tools for editors and authors, liaison with abstracting and
          indexing services, and other customer services.</p>
      </div>

      <!-- ... (previous HTML) ... -->

<p class="message-to-authors"><strong>Message to our authors:</strong></p>
<p class="message-to-authors"><em>“Research Article” and “Review Article”: A charge of 16,500 INR* (USD 700* is required).</em></p>
<p class="message-to-authors">*Excluded fees and VAT.</p>
<p class="message-to-authors">"The article processing charge must not be refunded if authors have made the payment before the reviewing process."</p>

<!-- ... (remaining HTML) ... -->

      <p><strong>Payment Instructions for BotScan Article Processing Charges (APC) after an accepted manuscript:</strong></p>
      <div class="payment-steps">
        <ol>
          <li>Please select list >BotScan Article Processing Charges (APC)</li>
          <li>Fill out the information completely & confirm</li>
          <li>Please fill in the debit or credit card information</li>
        </ol>
      </div>

      <a href="{{ config('app.url', '') }}" class="payment-button">BotScan - Payment Gateway</a>
      <p>BotScan Article Processing Charges (APC)</p>
    </div>
  </section>

  <footer>
    <p>&copy; 2024 BotScan - All Rights Reserved</p>
  </footer>


  @endsection
</body>

</html>

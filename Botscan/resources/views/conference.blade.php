<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BotScan - Publications</title>
  <link rel="stylesheet" href="{{Asset("css/conference.css")}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

@extends('layout.header')
@section('webcontent')


  <header>
    <h1>BotScan - Publications</h1>
  </header>

  <section>
    <div class="container">
      <h2 style="text-align: center; margin-bottom: 20px;">Explore Our Offerings</h2>

      <div class="container-card" id="containerCard">
        <!-- Conference Proceedings Card -->
        <div class="card animate__animated animate__fadeInUp">
          <div class="card-body">
            <h5 style="margin-bottom: 10px;">Conference Proceedings</h5>
            <p>BotScan offers conference proceedings in various fields. Explore our collection of
              valuable research papers presented at conferences.</p>
          </div>
        </div>

        <!-- ISSN and Copyright Card -->
        <div class="card animate__animated animate__fadeInUp">
          <div class="card-body">
            <h5 style="margin-bottom: 10px;">ISSN and Copyright</h5>
            <p>International Standard Serial Number (ISSN) is assigned to text-based monographic
              publications. Ensure copyright protection for your articles.</p>
          </div>
        </div>

        <!-- Buy Journals Online Card -->
        <div class="card animate__animated animate__fadeInUp">
          <div class="card-body">
            <h5 style="margin-bottom: 10px;">Buy Journals Online</h5>
            <p>Explore our online store for journal subscriptions. Choose from academic
              subscriptions, individual subscriptions, or library subscriptions.</p>
          </div>
        </div>

        <!-- Journal Subscription Card -->
        <div class="card animate__animated animate__fadeInUp" id="journalSubscriptionCard">
          <div class="card-body">
            <h5 style="margin-bottom: 10px;">Journal Subscription</h5>
            <p>Academic Subscription, Library Subscriptions, and more. Subscribe to BotScan and
              stay updated with the latest research.</p>
            <div class="btn-group">
              <button class="btn-primary" onclick="showSubscriptionButtons()">Journal Subscription</button>
              <button class="btn-primary" onclick="showSubscriptionButtons()">Academic Subscription</button>
              <button class="btn-primary" onclick="showSubscriptionButtons()">Journal Subscriptions for the Library</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2024 BotScan - All Rights Reserved</p>
  </footer>

  <script src="{{Asset("js/conference.js")}}"></script>

  @endsection
</body>

</html>

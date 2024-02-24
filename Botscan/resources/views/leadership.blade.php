<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{Asset("css/leadership.css")}}">
</head>

<body>
    @extends('layout.header')
    @section('webcontent')

    <div class="h1">                                     
        <h1><b>Leadership</b></h1>
    </div>
    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-in">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Call For Paper</h3>
                    <p> Scholarly open access journals, Peer-reviewed, and Refereed Journals, Impact factor 8.57
                        (Calculate by google scholar and Semantic Scholar | AI-Powered Research Tool),
                        Multidisciplinary, Monthly, Online, Print Journal, Indexing in all major database & Metadata,
                        Citation Generator, Digital Object Identifier(DOI)</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="">Submit Paper Online</a>
                </div>
            </div>
        </div>
    </section>

    <section id="cards">
        <div class="row row-cols-2 row-cols-md-2 g-4">
            <div class="col">
                <div class="card fadeInUp">
                    <img src="{{Asset("image/profile.png")}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h4><b>Editor in chief</b></h4>
                        <h5 class="card-title">Dr. Pawankumar Sheshrao Kharate, <br>M.Sc. Ph.D. (Agriculture Science)</h5>
                        <p class="card-text">Principal, College of Agriculture Biotechnology, GeoraiTanda, Paithan Road, Aurangabad-431102, Maharashtra, India  Contact +91 798791198</p>
                        <a class="Email-www">Email-www,coabat.org</a><br>
                        <a class="URL-http">http://pskharate@coabgt.org</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card fadeInUp">
                    <img src="{{Asset("image/profile.png")}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                    <h4><b>Publisher</b></h4>
                        <h5 class="card-title">Dr. Dinesh Sheshrao Kharate, <br>M.Sc. Ph.D. (KulDev Publication)</h5>
                        <p class="card-text">PLNO-1, GNO-16,Harisingh Nagar, C.OP.H.S.Sudhakar NG, Aurangabad- 431001, Maharashtra, India. ; Contact- +91 9021563292; +91 9325750894</p>
                        <a class="Website-">www.{{ config('app.publisher','')}}.com</a>
                        <a class="Website-">info@{{ config('app.publisher','')}}.com</a>
                        <a class="Website-">support@{{ config('app.publisher','')}}.com</a>
                        <a class="Email-www">kuldevgroup@gmail.com</a>
                        <a class="Website-">{{ config('app.publisher','')}}@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        $(document).ready(function(){
            $('.card').addClass('fadeInUp');
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    @endsection
    </body>
    </html>


   
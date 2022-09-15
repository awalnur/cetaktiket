<!DOCTYPE html>
<html>
<head>
    <title>Tiket {{$qrcode}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body @class('body bg-light')>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div @class('container d-flex justify-content-between')>

        <a class="navbar-brand" href="#">BAKOEL TIKET</a>
        <button @class('btn btn-primary btn-md') id="downloadtiket">Download Tiket</button>
    </div>
</nav>
<div @class('content-wrapper')>

    <div id="s">
        s
    </div>
    <div class="container mt-5 pt-4" id="print">
        <div class="card ticket-container m-auto mt-4" style="background-color: #1a202c" id="tikets">
            <div class="card-body pt-2 ps-4 pe-4" >
                <div @class('row')>
                    <div @class('col-12 bg-white p-2 ps-3 ')>
                        <h4 @class('m-0 fs-6')>Tipe Tiket : <strong @class('text-danger')> {{$eventname}} </strong>(Rp {{$harga}}) Get your seat for our amazing web3master bootcamp</h4>
                    </div>
                    <div @class('col-8 ps-0 pe-2 pt-2 d-flex align-items-stretch')>
                        <div @class('col-12 bg-white d-flex align-items-center justify-content-center p-4')>
                            <img src="{{url('assets/1316.jpg')}}" @class('w-100') alt="">
                        </div>
                    </div>

                    <div @class('col-4 mt-2 ps-0 pe-0')>
                        <div @class('col-12 bg-white d-flex justify-content-center p-1')>
                            <img src="{{ url('assets/gi.jpg') }}" @class('w-75')/>

                        </div>
                        <div @class('col-12 bg-white mt-2 p-4 pb-2')>
                            <div @class('p-0 d-flex justify-content-center')>
                                {!! QrCode::size(120)->generate($qrcode); !!}
                            </div>
                            <h4 @class('text-center mt-2')>{{$qrcode}}</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div @class('col-8 ps-0 pe-2  d-flex align-items-stretch')>
                        <div @class('col-12  bg-white mt-2 p-3 text-center')>
                            <h5 @class('fs-12 mb-0')>
                                {{$eventname}} By {{$penyelenggara}}
                            </h5>
                            <h5 @class('fs-12 mb-0')>
                                10 Sep 2022 09:30 – 18:30
                            </h5>
                            <h5 @class('fs-12 mb-0')>
                                Sahid Raya Hotel & Convention Yogyakarta, Jl. Babarsari No 2 Tambak Bayan, Depok, Sleman
                            </h5>
                            <h5 @class('fs-12 mb-0')>
                                Loket Headquarter
                            </h5>
                            </h5>
                        </div>
                    </div>
                    <div @class('col-4 bg-white mt-2 pt-3')>
                        <h5 @class('fs-12 mb-0 text-center text-uppercase')>
                            {{$trxid}}
                        </h5>
                        <h5 @class('fs-12 mb-1 text-center text-uppercase')>
                            <strong>{{$trxname}}</strong>
                        </h5>
                        <p @class('fs-12 text-center mb-0')>Ordered on 02 September 2022</p>
                        <p @class('fs-12 text-center')>ref: Online</p>
                    </div>
                </div>
                <div @class('row')>
                    <div @class('col-12 mt-2 bg-white pt-3')>
                        <h5 @class('text-danger text-center text-uppercase')>Terms & Condition</h5>
                        <ul>
                            <li>lorem ipsum</li>
                        </ul>
                    </div>
                </div>
                <div @class('row')>
                    <div @class('col-4 mt-2 bg-white pt-3')>
                        <h5 @class('text-danger text-center text-uppercase')>Terms & Condition</h5>
                        <ul>
                            <li>lorem ipsum</li>
                        </ul>
                    </div>
                    <div @class('col-4 mt-2 bg-white pt-3')>
                        <h5 @class('text-danger text-center text-uppercase')>Terms & Condition</h5>
                        <ul>
                            <li>lorem ipsum</li>
                        </ul>
                    </div>
                    <div @class('col-4 mt-2 bg-white pt-3')>
                        <h5 @class('text-danger text-center text-uppercase')>Terms & Condition</h5>
                        <ul>
                            <li>lorem ipsum</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="s"></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<script>

</script>
</body>
</html>

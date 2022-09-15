<!DOCTYPE html>
<html>
<head>
    <title>Tiket {{$qrcode}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body @class('body bg-light')>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div @class('container d-flex justify-content-between')>
        <a class="navbar-brand" href="#">BAKOEL KARCIS</a>
        <button @class('btn btn-primary btn-md') id="downloadtiket">Download Tiket</button>
    </div>
</nav>
<div @class('content-wrapper')>

    <div class="container mt-5 pt-2" id="print">
        <div class="card ticket-container m-auto mt-4" id="tikets">
            <div class="card-body pt-2 ps-4 pe-4" >
                <div @class('row')>
                    <div @class('col-12 ps-0 pe-1 pt-2 d-flex align-items-stretch')>
                        <div @class('col-12 bg-white d-flex align-items-center justify-content-center')>
                            <img src="{{url('assets/image5.png')}}" @class('w-100') alt="">
                        </div>
                    </div>
                    <div @class('col-6 pt-3 ps-0 pe-1  d-flex align-items-stretch')>
                        <div @class('card border-1 ss w-100')>
                             <div @class('card-header bg-headcard text-dark')>
                                <h6 @class('fs-6 text-center mb-0 p-0')>NAMA EVENT</h6>
                             </div>
                            <div @class('card-body')>

                                <h6 @class('fs-6 text-center mb-0 p-0')>{{$eventname}}</h6>
                            </div>
                        </div>
                    </div>
                    <div @class('col-6 pt-3 ps-1 pe-0')>
                        <div @class('card border-1 border-secondary ss')>
                             <div @class('card-header bg-headcard text-dark')>
                                <h6 @class('fs-6 text-center mb-0 p-0')>PENYELENGGARA</h6>
                             </div>
                            <div @class('card-body')>

                                <h6 @class('fs-6 text-center mb-0 p-0')>{{$penyelenggara}}</h6>
                            </div>
                        </div>
                    </div>
                    <div @class('col-4 mt-2 ps-0 pe-1')>
                            <div @class('card border-1 ss')>
                                <div @class('card-header bg-headcard text-dark')>
                                    <h6 @class('fs-6 text-center mb-0 p-0')>NAMA</h6>
                                </div>
                                <div @class('card-body')>

                                    <h6 @class('fs-6 text-center mb-0 p-0')>{{$trxname}}</h6>
                                </div>
                            </div>
                    </div>

                    <div @class('col-4 mt-2 ps-1 pe-1')>
                        <div @class('card border-1 ss')>
                            <div @class('card-header bg-headcard text-dark')>
                                <h6 @class('fs-6 text-center mb-0 p-0')>EMAIL</h6>
                            </div>
                            <div @class('card-body')>

                                <h6 @class('fs-6 text-center mb-0 p-0')>{{$trxmail}}</h6>
                            </div>
                        </div>
                    </div>
                    <div @class('col-4 mt-2 pe-0 ps-1')>
                        <div @class('card border-1 ss')>
                            <div @class('card-header bg-headcard text-dark')>
                                <h6 @class('fs-6 text-center mb-0 p-0')>TELEPON</h6>
                            </div>
                            <div @class('card-body')>

                                <h6 @class('fs-6 text-center mb-0 p-0')>{{$trxphone}}</h6>
                            </div>
                        </div>
                    </div>
                    <div @class('col-12 d-flex justify-content-center p-3')>
                        <div @class('col-6 border border-3 border-dark pt-2 pb-2')>
                            <h1 @class('fs-2 text-center mb-0')>
                                {{$tipe}}
                            </h1>
                            <h6 @class('fs-12 text-center mb-1')>
                                {{$tglpelaksanaan}}
                            </h6>

                        </div>
                    </div>
                    <div>
                        <div @class('col-12 bg-white d-flex align-items-center justify-content-center p-5 pb-2 pt-2')>
                            <div @class('ps-5 pe-5 text-center')>
                                <h5 @class('fs-6 mb-0 text-center')>
                                    {{$venue}}
                                </h5>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="row pt-1  d-flex align-items-stretch">
                    <div @class('col-4 bg-white mt-2 pb-2')>
                        <div @class('p-0 d-flex justify-content-center')>
                            {!! QrCode::size(100)->generate($qrcode); !!}
                        </div>
                        <h4 @class('text-center mt-2')>{{$qrcode}}</h4>
                    </div>
                    <div @class('col-8 d-flex align-items-center')>
                        <div @class('row w-100 pb-3')>
                            <div @class('col-5 ps-0 pe-0')>
                                <h5 @class('fs-6 mb-0')>
                                    ID TRANSAKSI
                                </h5>
                            </div>
                            <div @class('col-7 ps-0 pe-0')>
                                <h5 @class('fs-6 mb-0')>
                                    : <strong>{{$trxid}}</strong>
                                </h5>
                            </div>
                            <div @class('col-5 ps-0 pe-0 mt-3')>
                                <h5 @class('fs-6 mb-0')>
                                    TANGGAL TRANSAKSI
                                </h5>
                            </div>
                            <div @class('col-7 ps-0 pe-0 mt-3')>
                                <h5 @class('fs-6 mb-0')>
                                    : <strong>{{$trxdate}}</strong>
                                </h5>
                            </div>
                        </div>


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

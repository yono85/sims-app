@extends('dashboard.index')

@section('content')

<div class="container-new">
    <div class="inner-container-new w1024">
        <div class="div home-dash">

            <div class="div msg-prov" id="area-banner-pengajuan">
                <div class="div in-prov">
                    <div class="bdy-prov">
                        <span class="icn sli_icon-volume-2"></span>
                        <div class="div">
                            <b>Hibah Tahap I</b>
                            <div class="div lbl">
                                <span>Periode: 2022/2023</span><br/>
                                <span>Tersisa waktu: 20/04/2023 11:20:10</span>
                            </div>
                        </div>
                        <div class="div">
                            <button class="btn green is-loading br-rds18">
                                <span class="ic fa flaticon2-plus-1"></span>
                                <span>Pengajuan Hibah</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="div">
                <div class="ar-carousel">
                    <div class="inar-carousel h100p">
                        <div id="carouselExampleCaptions" class="carousel slide h100p" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner br-rds8 h100p">
                                <div class="carousel-item active br-rds8 h100p">
                                    <img src="" data-src="/assets/images/background/carousel/banner_1.jpeg" class="d-block w-100 hide" alt="...">
                                    <!-- <img src="#" class="d-block w-100" alt="..."> -->
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-white"></h5>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="carousel-item br-rds8 h100p">
                                <img src="" data-src="/assets/images/background/carousel/banner_1.jpeg" class="d-block w-100 hide" alt="...">
                                    <!-- <img src="#" class="d-block w-100" alt="..."> -->
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-white"></h5>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="carousel-item br-rds8 h100p">
                                <img src="" data-src="/assets/images/background/carousel/banner_1.jpeg" class="d-block w-100 hide" alt="...">
                                    <!-- <img src="#" class="d-block w-100" alt="..."> -->
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-white"></h5>
                                        <p></p>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="div ar-detail">
                <ul>
                    <li>
                        <p><h2>Selamat Datang di <span class="up-txt">{{$apps['name']}}</span></h2></p>
                        <div class="div w100p">
                            <p><b class="up-txt">{{$apps['name']}}</b> adalah sistem yang diperuntukan sebagai managemen Pemberian Hibah dan Bansos dibawah Biro Pendidikan dan Mental Sepiritual Setda Provinsi DKI Jakarta</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="div ar-link">
                <div class="div"></div>
                <div class="div">
                    <ul>
                        <li>
                            <a href="https://ehibahbansosdki.jakarta.go.id/" target="_blank" class="purple">
                                <div class="div">
                                    <div class="ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="icx sli_icon-globe"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tx">
                                    <span>E-HIBAH</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" class="pink">
                            <div class="div">
                                    <div class="ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="icx sli_icon-globe"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tx">
                                    <span>E-TPHD</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://siri-birodikmental.jakarta.go.id" target="_blank" class="blue">
                            <div class="div">
                                    <div class="ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="icx sli_icon-globe"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tx">
                                    <span>SIRI</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://lptq.jakarta.go.id" target="_blank" class="green">
                            <div class="div">
                                    <div class="ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="icx sli_icon-globe"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tx">
                                    <span>E-MTQ</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="red">
                            <div class="div">
                                    <div class="ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="icx sli_icon-globe"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tx">
                                    <span>E-PKU</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="cocored">
                            <div class="div">
                                    <div class="ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="icx sli_icon-globe"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tx">
                                    <span>E-PKM</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" class="pink">
                            <div class="div">
                                    <div class="ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="icx sli_icon-globe"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tx">
                                    <span>E-LBIQ</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="orange">
                            <div class="div">
                                    <div class="ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="icx sli_icon-globe"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tx">
                                    <span>BAZNAS</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
<script>
$(document).ready(function()
{
    lazyloadimage();
    return false;
})
</script>
@endsection
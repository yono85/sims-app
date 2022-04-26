@extends('home.index')

@section('content')
<div class="ar-content">
    <div class="boxid">
        <div class="ar-ctn">
            <div class="div ttl">
                <div class="div txt-center"><h1>Selamat {{strtolower($say)}}, <span id="say-nick"></span></h1></div>
            </div>

            <div class="div clr-float">
                <ul>
                    <li>
                        <a href="#" class="loading">
                            <div class="iabox">
                                <div class="inarbox">
                                    <div class="upbox">
                                        <div class="chld">
                                            <div class="inarx">
                                                <div class="splash-tbl"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btmbox">
                                        <div class="splash-tbl"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="loading">
                            <div class="iabox">
                                <div class="inarbox">
                                    <div class="upbox">
                                        <div class="chld">
                                            <div class="inarx">
                                                <div class="splash-tbl"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btmbox">
                                        <div class="splash-tbl"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="loading">
                            <div class="iabox">
                                <div class="inarbox">
                                    <div class="upbox">
                                        <div class="chld">
                                            <div class="inarx">
                                                <div class="splash-tbl"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btmbox">
                                        <div class="splash-tbl"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="loading">
                            <div class="iabox">
                                <div class="inarbox">
                                    <div class="upbox">
                                        <div class="chld">
                                            <div class="inarx">
                                                <div class="splash-tbl"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btmbox">
                                        <div class="splash-tbl"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="loading">
                            <div class="iabox">
                                <div class="inarbox">
                                    <div class="upbox">
                                        <div class="chld">
                                            <div class="inarx">
                                                <div class="splash-tbl"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btmbox">
                                        <div class="splash-tbl"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="loading">
                            <div class="iabox">
                                <div class="inarbox">
                                    <div class="upbox">
                                        <div class="chld">
                                            <div class="inarx">
                                                <div class="splash-tbl"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btmbox">
                                        <div class="splash-tbl"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="loading">
                            <div class="iabox">
                                <div class="inarbox">
                                    <div class="upbox">
                                        <div class="chld">
                                            <div class="inarx">
                                                <div class="splash-tbl"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btmbox">
                                        <div class="splash-tbl"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="loading">
                            <div class="iabox">
                                <div class="inarbox">
                                    <div class="upbox">
                                        <div class="chld">
                                            <div class="inarx">
                                                <div class="splash-tbl"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btmbox">
                                        <div class="splash-tbl"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="loading">
                            <div class="iabox">
                                <div class="inarbox">
                                    <div class="upbox">
                                        <div class="chld">
                                            <div class="inarx">
                                                <div class="splash-tbl"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btmbox">
                                        <div class="splash-tbl"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>

$(document).ready(function()
{
    $('#say-nick').html(getaccount().employe.nick);
    hideSplash();

return false;
});
</script>
@endsection
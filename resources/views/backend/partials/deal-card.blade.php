<style media="screen">
    .card-body {
        padding:12px;
        background: white;
        margin-bottom: 15px;
    }

    .class{
        font-size: 20px;
        font-weight: 400;
    }
    .indicators{
        color: #bfbfbf;
        /* margin-left: 100px; */
        font-size: 30px;
    }
    .deduc
    {
        /* margin-left:100px; */
        font-size: 20px;
        font-weight: 400;
    }
    .sumIns {
        font-size: 20px;
        font-weight: 400;
    }
    .indicators span{
        margin-left: 10px;
    }
    .card-middle {
        display: flex;
        justify-content:space-between;
        border-bottom: 1px solid #bfbfbf;
        padding-bottom: 10px;
    }
    .premium {
        font-size: 20px;
        font-weight: 700;
    }
    .applyBtn{
        padding: 10px 45px;
        font-size: 15px;
    }
    .card-left{
        display: flex;
        justify-content: center;
    }
    .call-us{
        font-size: 14px;
        font-weight: 15px;
        color: #0f3d3d;
    }
    .phone-no {
        color: #248f8f;
        font-size: 20px;
    }
</style>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 card-left">
                <div class="col-md-4">
                    <img src="https://media.compargo.com/th/products/car-insurance/logo-bkk.png" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-title">
                        <strong>{{ $deal->provider->name }}</strong><br>
                        <span class="text-mute">{{ $deal['productName']}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-7 card-middle">

                <span class="class">
                    {{-- <span style="font-size:13px;">
                        Class
                    </span><br> --}}
                    {{ $deal->getClass() }}
                </span>
                <span class="indicators">
                    <span class="fire-icon">
                        <i class="fa fa-fire {{ $deal['fireTheft'] == 1 ? "text-success" : ""}}" aria-hidden="true"></i>
                    </span>
                    <span class="flood-icon">
                        <i class="fa fa-tint {{ $deal['flood'] == 1 ? "text-success" : ""}}" aria-hidden="true"></i>
                    </span>
                    <span class="garage-icon">
                        <i class="fa fa-wrench {{ $deal['dealerGarage'] == 1 ? "text-success" : ""}}" aria-hidden="true"></i>
                    </span>
                </span>
                <span class="deduc" style="">
                    <span>&#3647;</span>
                    {{ number_format( $deal['deductible']  , 0 , '.' , ',' ) }}
                </span>
                <span class="sumIns">
                    <span>&#3647;</span>
                    {{ number_format( $deal['minSumInsured']  , 0 , '.' , ',' ) }}
                </span>
                <span class="premium">
                    <span>&#3647;</span>
                    {{ number_format( $deal['premium'] , 0 , '.' , ',' ) }}
                </span>
            </div>
            <div class="col-md-2 card-left">
                <div class="">
                    <a href="" class="btn btn-warning applyBtn">Apply</a>
                    <br>
                    <div class="">
                        <span class="call-us">Or call us at</span>

                        <br>
                        <span class="phone-no">02-653-0200</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

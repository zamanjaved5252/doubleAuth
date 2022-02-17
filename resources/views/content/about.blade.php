@extends('layout.layout')

@section('content')



    <!--slide-->
    <br><br>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");



        .circle {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            overflow: hidden;
            position: relative;
            border: 8px solid #423c3c;
            transform: scale(1);
            transition: transform 0.3s;
            margin: 20px;
            /***Flip card section***/
        }
        .circle__row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
        }
        .circle--text {
            display: flex;
            opacity: 0;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            text-align: center;
            justify-content: center;
            align-items: center;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            padding: 10px;
            transition: opacity 0.5s;
        }
        .circle--btn {
            display: block;
        }
        .circle:hover {
            transform: scale(1.1);
            transition: transform 0.2s;
            border-top-color:#f60257;
            border-left-color: #f60257;
            border-bottom-color:#f60257;
            border-right-color:#f60257;
            transition: transform 0.2s, border-top-color 0.18s linear, border-left-color 0.18s linear 0.1s, border-bottom-color 0.18s linear 0.2s, border-right-color 0.18s linear 0.15s;
        }
        .circle:hover .circle--text {
            opacity: 1;
        }
    </style>
    <div class="wrapper pt-6 pb-6">
        <div style="text-align: center;font-size: 40px;color:#f60257">
            Our Team
            <center> <hr style="width: 7%;text-align: center;color:#f60257"></center>
        </div>
        <br>
        <div class="circle__row">
            <div class="circle">
                <img class="circle--image" src="{{asset('logo/noname1.png')}}" />
                <div class="circle--text">
                    Comming Soon....</div>
            </div>
            <div class="circle">
                <img class="circle--image" src="{{asset('logo/noname.png')}}" />
                <div class="circle--text">
                    Comming Soon....</div>
            </div>
            <div class="circle">
                <img class="circle--image" src="{{asset('logo/noname1.png')}}" />
                <div class="circle--text">
                    Comming Soon....</div>
            </div>
        </div>
    </div>
    <!-- endslide   -->




    <!--round-->
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        span, a, a:hover {
            display: inline-block;
            text-decoration: none;
            color: inherit;
        }
        .section-head {
            margin-bottom: 60px;
        }
        .section-head h4 {
            position: relative;
            padding:0;
            color:#f60257;
            line-height: 1;
            letter-spacing:0.3px;
            font-size: 34px;
            font-weight: 700;
            text-align:center;
            text-transform:none;
            margin-bottom:30px;
        }
        .section-head h4:before {
            content: '';
            width: 60px;
            height: 3px;
            background: #f60257;
            position: absolute;
            left: 0px;
            bottom: -10px;
            right:0;
            margin:0 auto;
        }
        .section-head h4 span {
            font-weight: 700;
            padding-bottom: 5px;
            color:#2f2f2f
        }
        p.service_text{
            color:#cccccc !important;
            font-size:16px;
            line-height:28px;
            text-align:center;
        }
        .section-head p, p.awesome_line{
            color:#818181;
            font-size:16px;
            line-height:28px;
            text-align:center;
        }

        .extra-text {
            font-size:34px;
            font-weight: 700;
            color:#2f2f2f;
            margin-bottom: 25px;
            position:relative;
            text-transform: none;
        }
        .extra-text::before {
            content: '';
            width: 60px;
            height: 3px;
            background: #f60257;
            position: absolute;
            left: 0px;
            bottom: -10px;
            right: 0;
            margin: 0 auto;
        }
        .extra-text span {
            font-weight: 700;
            color:#f60257;
        }
        .item {
            background: #fff;
            text-align: center;
            padding: 30px 25px;
            -webkit-box-shadow:0 0px 25px rgba(0, 0, 0, 0.07);
            box-shadow:0 0px 25px rgba(0, 0, 0, 0.07);
            border-radius: 20px;
            border:5px solid rgba(0, 0, 0, 0.07);
            margin-bottom: 30px;
            /*-webkit-transition: all .5s ease 0;*/
            /*transition: all .5s ease 0;*/
            transition: all 0.5s ease 0s;
        }
        .item:hover{
            background: #e30b56;
            box-shadow:0 8px 20px 0px rgba(0, 0, 0, 0.2);
            /*-webkit-transition: all .5s ease 0;*/
            /*transition: all .5s ease 0;*/
            transition: all 0.5s ease 0s;
        }
        .item:hover .item, .item:hover span.icon{
            background:#fff;
            border-radius:10px;
            /*-webkit-transition: all .5s ease 0;*/
            /*transition: all .5s ease 0;*/
            transition: all 0.5s ease 0s;
        }
        .item:hover h6, .item:hover p{
            color:#fff;
            /*-webkit-transition: all .5s ease 0;*/
            /*transition: all .5s ease 0;*/
            transition: all 0.5s ease 0s;
        }
        .item .icon {
            font-size: 40px;
            margin-bottom:25px;
            color: #f60257;
            width: 90px;
            height: 90px;
            line-height: 96px;
            border-radius: 50px;
        }
        .item .feature_box_col_one{
            background:rgba(247, 198, 5, 0.20);
            color:#f60257
        }
        .item .feature_box_col_two{
            background:rgba(255, 77, 28, 0.15);
            color:#f60257
        }
        .item .feature_box_col_three{
            background:rgba(0, 147, 38, 0.15);
            color:#f60257
        }
        .item .feature_box_col_four{
            background:rgba(0, 108, 255, 0.15);
            color:#f60257
        }
        .item .feature_box_col_five{
            background:rgba(146, 39, 255, 0.15);
            color:#f60257
        }
        .item .feature_box_col_six{
            background:rgba(23, 39, 246, 0.15);
            color:#f60257
        }
        .item p{
            font-size:15px;
            line-height:26px;
        }
        .item h6 {
            margin-bottom:20px;
            color:#2f2f2f;
        }
        .mission p {
            margin-bottom: 10px;
            font-size: 15px;
            line-height: 28px;
            font-weight: 500;
        }
        .mission i {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            background: #f60257;
            border-radius: 50%;
            color: #fff;
            font-size: 25px;
        }
        .mission .small-text {
            margin-left: 10px;
            font-size: 13px;
            color: #666;
        }
        .skills {
            padding-top:0px;
        }
        .skills .prog-item {
            margin-bottom: 25px;
        }
        .skills .prog-item:last-child {
            margin-bottom: 0;
        }
        .skills .prog-item p {
            font-weight: 500;
            font-size: 15px;
            margin-bottom: 10px;
        }
        .skills .prog-item .skills-progress {
            width: 100%;
            height: 10px;
            background: #e0e0e0;
            border-radius:20px;
            position: relative;
        }
        .skills .prog-item .skills-progress span {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            background: #bd486f;
            width: 10%;
            border-radius: 10px;
            -webkit-transition: all 1s;
            transition: all 1s;
        }
        .skills .prog-item .skills-progress span:after {
            content: attr(data-value);
            position: absolute;
            top: -5px;
            right: 0;
            font-size: 10px;
            font-weight:600;
            color: #fff;
            background:rgba(0, 0, 0, 0.9);
            padding: 3px 7px;
            border-radius: 30px;
        }
    </style>
    <div class="feat bg-gray pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span>Why Choose</span> Us?</h4>
                    <p>When you choose us, you'll feel the benefit of 10 years' experience of Web Development. Because we know the digital world and we know that how to handle it. With working knowledge of online, SEO and social media.</p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
                        <h6>Modern Design</h6>
                        <p>We use latest technology for the latest world because we know the demand of peoples.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
                        <h6>Creative Design</h6>
                        <p>We are always creative and and always lisen our costomers and we mix these two things and make beast design.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
                        <h6>24 x 7 User Support</h6>
                        <p>If our customer has any problem and any query we are always happy to help then.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
                        <h6>Business Growth</h6>
                        <p>Everyone wants to live on top of the mountain, but all the happiness and growth occurs while you're climbing it</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-upload"></i></span>
                        <h6>Market Strategy</h6>
                        <p>Holding back technology to preserve broken business models is like allowing blacksmiths to veto the internal combustion engine in order to protect their horseshoes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
                        <h6>Affordable cost</h6>
                        <p>Love is a special word, and I use it only when I mean it. You say the word too much and it becomes cheap.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--round-->



    <!--  box  -->

    <!-- endbox  -->
@endsection

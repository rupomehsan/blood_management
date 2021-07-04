@extends('layouts.index')
@section('content')

   <!------------------------------------------ banner part start----------------------------------------------->

      <section class="home banner-bg" id="home">
         <div class="one" data-parallax='{"x": -180, "y": -50}'></div>
         <div class="two" data-parallax='{"x": -180, "y": -50}'></div>
         <div class="three" data-parallax='{"y": 0, "x":-150}'></div>
         <div class="four" data-parallax='{"y": 80, "x":-140}'></div>
         <div class="five" data-parallax='{"y": 120, "x": -150}'></div>
         <div class="six" data-parallax='{"y": 120, "x": -150}'></div>
         <div class="seven" data-parallax='{"x": 100, "y": -100}'></div>
         <div class="eight" data-parallax='{"x": 80, "y": -150}'></div>
         <div class="nine" data-parallax='{"x": 100, "y": 0}'></div>
         <div class="ten" data-parallax='{"y": 80, "x": 150}'></div>
         <div class="elaven" data-parallax='{"y": 80, "x": 100}'></div>
         <div class="twelve" data-parallax='{"y": 80, "x": 150}'></div>
         <div class="rotate totatebg"></div>
         <div class="row">
            <div class="col-md-4 home-left" style="margin-top: 150px; margin-left: 0px; padding: 50px 20px;" >
               <div class="left-one" style="padding-left: 20%;margin-top: 50px;">

                  <p>Welcome to  <a href="#"> <div class="text-effect">
                        <span>r</span><span>u</span><span>p</span><span>o</span>
                        <span>m</span><span>e</span><span>h</span><span>s</span><span>a</span><span>n</span>
                     </div> </a></p>
               </div>
            </div>
            <div class="col-md-4 middle">
               <div class="banner-image">
                  <div class="banner-image-bg2"></div>
                  <div class="banner-image-bg3"></div>
                  <div class="banner-image-bg4"></div>
                  <div class="banner-image-bg">
                  </div>
               </div>
            </div>
            <div class="col-md-4 ">
               <div class="home-right right-one" style="padding-top: 150px;">
                    <div class="right-one">
                     
                          <p class="title">RE Blood Bank</p>
                          <div class="overlay"></div>
                          <div class="row" >
                             <div class="col-md-6 rg-bttn " style="width: 30%">  <div class="button btn-one"><a href="{{route('website.alldoner')}}">All Doner </a></div></div>
                             <div class="col-md-6 rg-bttn "  style="width: 40%"><div class="button" ><a href="{{route('website.registration')}}"> Register  </a></div></div>
                          </div>


                        </div>
               </div>
            </div>
         </div>
       <!--  <p class="wlcome-title">well come</p> -->
      </section>

 <!------------------------------------------ banner part start----------------------------------------------->


      <!--===========================================-ABOUT part start=============================================-->
      <section class=" banner-bg about-part" id="about">
         <div class="row">
            <div class="section-title">
               <div class="btn btn-lg" href="#">
                  <span>about me</span>
               </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 col-sm-6 left-site">
               <div class="row">
                  <div class="col-md-12 about-left" style="margin-top: 250px;">
                     <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                           <li role="presentation" class="active"><a href="#abSection1" aria-controls="home" role="tab" data-toggle="tab">1</a></li>
                           <li role="presentation"><a href="#abSection2" aria-controls="profile" role="tab" data-toggle="tab"> Education</a></li>
                           <li role="presentation"><a href="#abSection3" aria-controls="messages" role="tab" data-toggle="tab"> Hobbies</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                           <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                           <div role="tabpanel" class="tab-pane fade in active" id="abSection1">
                              <div class="ih-item square effect9 bottom_to_top">
                                 <a>
                                    <div class="img"> <img src="{{asset('client')}}/images/profile.jpg" width="200" height="200" ></div>
                                    <div class="info">
                                       <div class="info-back">
                                          <h1>hellow i'am rupom ehsan web design & web developer</h1>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="center">
                                 <div id="social-test">
                                    <ul class="social">
                                       <li><a href="https://www.facebook.com/rupom.ehsan.5/" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <li><a href="https://twitter.com/EhsanRupom" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                       <li><a href="https://www.youtube.com/channel/UChAz_f_ngfpsBTSC2OgrRug?view_as=subscriber" title=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                       <li><a href="https://github.com/rupomehsan" title=""><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                     
                                    </ul>
                                 </div>
                              </div>
                            <div class="cv">
                              <div class="col-md-6 col-sm-6 col-xs-6 cv-part">
                                 <p>Download my cv</p>
                                   <div class="downArrow bounce">
                                      <img width="40" height="40" alt="" src="{{asset('client')}}/images/download-arrow.png"/>
                                    </div>
                              </div>
                                 <div class="col-md-6 col-xs-6 download">
                                    <a href="cv.docx" download>
                                       <button class="btn"><i class="fa fa-download"></i></button>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div role="tabpanel" class="tab-pane fade" id="abSection2">
                              <h3>Education</h3>
                              <p> <span>BSc -->></span>in Computer Science and Engineering(CSE) at Bangladesh Institute of science and technology <br/>Session :2014-15</p>
                              <p> <span>Hsc -->></span>Tamirulmillat kamil madrasah <br/>Session :2011-12</p>
                              </p>
                              <p> <span>web design course-->></span>Dreamland it &software </p>
                              <p> <span>web development course-->></span>creative shaper and agamisoft.lmt(dynamic) </p>
                           </div>
                           <div role="tabpanel" class="tab-pane fade" id="abSection3">
                              <h3>hobbies</h3>
                              <p><span>travelling:>></span>"I love to travel because not only is it the ultimate adventure but it also exposes you to new types of people, different ways of living, and opens up your mind. I just like to walk around in beautiful places that resemble the shire from Lord of the Rings while exploring new culinary terrains."</p>
                              <p><span>---->></span>i like to Playing  pubg games When I'm retired </p>
                              <p><span>---->></span>Playing individual sports (criket,football,badminton, etc.)</p>
                              <p><span>---->></span>Keeping up with the latest developments in technology</p>
                              <p><span>---->></span>Watching movies and TV programmes</p>
                           </div>
                           <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-6 col-sm-6 right-site">
               <div class="row">
                  <div class="col-md-12 about-right" style="margin-top: 250px;">
                     <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                           <li role="presentation" class="active"><a href="#abrSection1" aria-controls="home" role="tab" data-toggle="tab">1</a></li>
                           <li role="presentation"><a href="#abrSection2" aria-controls="profile" role="tab" data-toggle="tab"> profession</a></li>
                           <li role="presentation"><a href="#abrSection3" aria-controls="messages" role="tab" data-toggle="tab"> service</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                           <div role="tabpanel" class="tab-pane fade in active" id="abrSection1">
                              <h4 style="padding-bottom: 30px;margin-top: 10px;">SOME WORDS ABOUT ME</h4>
                              <p>
                                 HELLO. I'M RUPOM EHSAN FROM BNAGLADESH. I AM A FULLSTACK WEB DEVELOPER WORKING WITH LOCAL AND INTERNATIONAL CLIENTS SINCE 2018. I CAN DESIGN OR REDESIGN YOUR EXISITING WEBSITES OR WEB APPLICATION.BUILD SOCIAL PROFILES AND GAIN REVENUE AND PROFITS.ITS NOT ONLY MY PROFESSION ITS MY PASSION.<br>
                                 <span>MISSION--&gt;</span>WE DELIVER UNIQUE QUALITY AND RESPONSIVE DESIGN FOR WEBSITE.<br>
                                 <span>MISSION--&gt;</span>WE ARE PROVIDE USER FRIENDLY ENTERFACE, PIXEL IDEALIZE FORMATE,W3C LEGITIMATE CODE TO THE USER. <br>
                                 <span>MISSION--&gt;</span> WE FOLLOW ALL THE STANDARDS OF GOOGLE SEARCH ENGINE OPTIMIZATION.<br>

                              </p>
                           </div>
                           <div role="tabpanel" class="tab-pane fade" id="abrSection2">
                              <h4>Profession </h4>
                              <p>I am a Fullstack web developer at <a href="https://www.agamisoft.com/"><span>Agamisoft.LMT</span></a> </p>
                              <p>formal frontend developer  at <a href="https://mazetechbd.com/"><span>Mazetech bd.com</span></a> </p>
                              <p> AS A WEB fullstack web DEVELOPER WORKING WITH LOCAL AND INTERNATIONAL CLIENTS like FREELANCER,FIVER,AND UPWORK marketplace SINCE 2018.</p>
                              <h3>you can hire me on </h3>
                              <div class="social2" style="">
                                 <ul>
                                    <li>
                                       <a href="https://www.freelancer.com/u/rupomehsan">
                                       <img src="{{asset('client')}}/images/freelancer.jpg" >
                                       </a>
                                       <span>FREELANCER</span>
                                    </li>
                                    <li>
                                       <a href="https://www.fiverr.com/rupom_ehsan?up_rollout=true">
                                       <img src="{{asset('client')}}/images/fiver.jpg" >
                                       </a>
                                       <span>FIVER</span>
                                    </li>
                                    <li>
                                       <a href="https://www.upwork.com/freelancers/~010e8a7dea092d1282">
                                       <img src="{{asset('client')}}/images/upwork.jpg" >
                                       </a>
                                       <span>UPWORK</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div role="tabpanel" class="tab-pane fade" id="abrSection3">
                              <h4>service</h4>
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                       <div class="service-icon"><i class="fa fa-globe"></i></div>
                                       <h3 class="title">Web Design</h3>

                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                       <div class="service-icon"><i class="fa fa-database" aria-hidden="true"></i></div>
                                       <h3 class="title">Web Development</h3>

                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                       <div class="service-icon"><i class="fa fa-tablet" aria-hidden="true"></i></div>
                                       <h3 class="title">RESPONSIVE DESIGN</h3>

                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                       <div class="service-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                                       <h3 class="title">E-com and Web application</h3>

                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                       <div class="service-icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                                       <h3 class="title">mobile application</h3>

                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="serviceBox">
                                       <div class="service-icon"><i class="fa fa-wordpress" aria-hidden="true"></i></div>
                                       <h3 class="title">wordpress customization</h3>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
  <!--===========================================-ABOUT part end=============================================-->



      <section  class="skills line-bg" id="skills">
         <div class="section-title">
            <div class="btn btn-lg">
               <span>skills</span>
            </div>
         </div>
         <div class="container">
            <div class="row skills-section">
               <div class="col-md-12">
                  <div class="tab tab-wrapper" role="tabpanel">
                     <!-- Nav tabs -->
                     <ul class="nav nav-tabs skill-nav" role="tablist">
                        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"> 1</a></li>
                        <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"> 2</a></li>
                        <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab"> 3</a></li>
                        <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab"> 4</a></li>
                        <li role="presentation"><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab"> 5</a></li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="tab-content tabs">
                        <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                           <div class="pricing-wrap pt-120">
                              <div class="theme-container">
                                 <div class="row">
                                    <div class="col-md-12  main-row">
                                       <div class="pricing-box clrbg-before clrbg-after transition">
                                          <h4>programing skills</h4>
                                          <div class="row mt-55">
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">HTML5</h3>
                                                   <div class="progress-bar" style="width:85%; background:#21da9a;">
                                                      <div class="progress-value">85%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">CSS3</h3>
                                                   <div class="progress-bar" style="width:70%; background:#ff1170;">
                                                      <div class="progress-value">70%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">javasript</h3>
                                                   <div class="progress-bar" style="width:50%; background:#21da9a;">
                                                      <div class="progress-value">50%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">php</h3>
                                                   <div class="progress-bar" style="width:55%; background:#ff1170;">
                                                      <div class="progress-value">55%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">sql</h3>
                                                   <div class="progress-bar" style="width:45%; background:#21da9a;">
                                                      <div class="progress-value">65%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">worpdpress</h3>
                                                   <div class="progress-bar" style="width:87%; background:#ff1170;">
                                                      <div class="progress-value">60%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">c</h3>
                                                   <div class="progress-bar" style="width:40%; background:#21da9a;">
                                                      <div class="progress-value">40%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">c++</h3>
                                                   <div class="progress-bar" style="width:40%; background:#ff1170;">
                                                      <div class="progress-value">40%</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section2">
                           <div class="pricing-wrap pt-120">
                              <div class="theme-container">
                                 <div class="row">
                                    <div class="col-md-12 main-row">
                                       <div class="pricing-box clrbg-before clrbg-after transition">
                                          <h4>graphics </h4>
                                          <div class="row mt-55">
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">photoshop</h3>
                                                   <div class="progress-bar" style="width:70%; background:#21da9a;">
                                                      <div class="progress-value">70%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">illustrator</h3>
                                                   <div class="progress-bar" style="width:30%; background:#ff1170;">
                                                      <div class="progress-value">30%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">vidio editing</h3>
                                                   <div class="progress-bar" style="width:50%; background:#21da9a;">
                                                      <div class="progress-value">50%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">logo desgin</h3>
                                                   <div class="progress-bar" style="width:55%; background:#ff1170;">
                                                      <div class="progress-value">55%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">---</h3>
                                                   <div class="progress-bar" style="width:0%; background:#21da9a;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">------</h3>
                                                   <div class="progress-bar" style="width:0%; background:#ff1170;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">------</h3>
                                                   <div class="progress-bar" style="width:0%; background:#21da9a;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">-----</h3>
                                                   <div class="progress-bar" style="width:0%; background:#ff1170;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section3">
                           <div class="pricing-wrap pt-120">
                              <div class="theme-container">
                                 <div class="row">
                                    <div class="col-md-12 main-row">
                                       <div class="pricing-box clrbg-before clrbg-after transition">
                                          <h4>language</h4>
                                          <div class="row mt-55">
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">bangla</h3>
                                                   <div class="progress-bar" style="width:95%; background:#21da9a;">
                                                      <div class="progress-value">95%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">english</h3>
                                                   <div class="progress-bar" style="width:60%; background:#ff1170;">
                                                      <div class="progress-value">60%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">hindi</h3>
                                                   <div class="progress-bar" style="width:40%; background:#21da9a;">
                                                      <div class="progress-value">40%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">arabic</h3>
                                                   <div class="progress-bar" style="width:55%; background:#ff1170;">
                                                      <div class="progress-value">55%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">---</h3>
                                                   <div class="progress-bar" style="width:0%; background:#21da9a;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">-----</h3>
                                                   <div class="progress-bar" style="width:0%; background:#ff1170;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">------</h3>
                                                   <div class="progress-bar" style="width:0%; background:#21da9a;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">------++</h3>
                                                   <div class="progress-bar" style="width:0%; background:#ff1170;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section4">
                           <div class="pricing-wrap pt-120">
                              <div class="theme-container">
                                 <div class="row">
                                    <div class="col-md-12 main-row">
                                       <div class="pricing-box clrbg-before clrbg-after transition">
                                          <h4>other skills</h4>
                                          <div class="row mt-55">
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">ms word</h3>
                                                   <div class="progress-bar" style="width:85%; background:#21da9a;">
                                                      <div class="progress-value">85%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">ms excel</h3>
                                                   <div class="progress-bar" style="width:70%; background:#ff1170;">
                                                      <div class="progress-value">70%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">ms power point</h3>
                                                   <div class="progress-bar" style="width:50%; background:#21da9a;">
                                                      <div class="progress-value">50%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">-----</h3>
                                                   <div class="progress-bar" style="width:0%; background:#ff1170;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">---</h3>
                                                   <div class="progress-bar" style="width:0%; background:#21da9a;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">-----</h3>
                                                   <div class="progress-bar" style="width:0%; background:#ff1170;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="progress green">
                                                   <h3 class="progress-title">------</h3>
                                                   <div class="progress-bar" style="width:0%; background:#21da9a;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                                <div class="progress pink">
                                                   <h3 class="progress-title">------</h3>
                                                   <div class="progress-bar" style="width:0%; background:#ff1170;">
                                                      <div class="progress-value">0%</div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--ABOUT part end-->
      <!--============================================================================================-->
      <!-----------------------------------------PORTFOLIO START---------------------------------------------------------------------->
      <section class="gallery gallery-line-bg" id="portfolio">
         <div class="section-title">
            <div class="btn btn-lg">
               <span>porfolio</span>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="vertical-tab" role="tabpanel">
                     <!-- Nav tabs -->
                     <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#gl-Section1" aria-controls="home" role="tab" data-toggle="tab">html template</a></li>
                        <li role="presentation"><a href="#gl-Section2" aria-controls="profile" role="tab" data-toggle="tab">wev development</a></li>
                        <li role="presentation"><a href="#gl-Section3" aria-controls="messages" role="tab" data-toggle="tab">word press</a></li>
                        <li role="presentation"><a href="#gl-Section4" aria-controls="messages" role="tab" data-toggle="tab">landing page</a></li>
                        <li role="presentation"><a href="#gl-Section5" aria-controls="messages" role="tab" data-toggle="tab">other works</a></li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="tab-content tabs">
                        <div role="tabpanel" class="tab-pane fade in active" id="gl-Section1">
                           <div class="row">
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/wordpress/wp2.png"><img src="{{asset('client')}}/images/portfolio/wordpress/wp2.1.png" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                   <a href="http://gracefulhealingus.org/" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                     <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/wordpress/wp1.jpg">    <img src="{{asset('client')}}/images/portfolio/wordpress/wp1.1.jpg" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                      <a href="https://more-patients.com/" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                   <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/landing1.png">    <img src="{{asset('client')}}/images/portfolio/landing1.1.png" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                      <a href="http://duniyabharkinews.com/ars/client/" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/design/tem4.png">    <img src="{{asset('client')}}/images/portfolio/design/tem4.1.png" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                      <a href="#" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/design/tem5.png">    <img src="{{asset('client')}}/images/portfolio/design/tem5.1.png" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                     <a href="http://moonlightedelivery.com/" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/design/tem6.png">    <img src="{{asset('client')}}/images/portfolio/design/tem6.1.png" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                     <a href="ratulgroup.com" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="gl-Section2">
                           <div class="row">
                              <div class="col-md-4 col-sm-4  col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/webdev/dev1.png">    <img src="{{asset('client')}}/images/portfolio/webdev/dev1.1.png" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                     <a href="#" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/webdev/dev2.png">    <img src="{{asset('client')}}/images/portfolio/webdev/dev2.1.png" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                       <a href="#" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images//portfolio/webdev/dev3.png">    <img src="{{asset('client')}}/images/portfolio/webdev/dev3.1.png" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                      <a href="#" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="gl-Section3">
                           <div class="row">
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/wordpress/wp1.jpg">    <img src="{{asset('client')}}/images/portfolio/wordpress/wp1.1.jpg" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                      <a href="#" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/wordpress/wp2.png">    <img src="{{asset('client')}}/images/portfolio/wordpress/wp2.1.png" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                      <a href="#" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>

                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="gl-Section4">
                           <div class="row">
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/landing1.png">    <img src="{{asset('client')}}/images/portfolio/landing1.1.png" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                      <a href="#" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>

                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="gl-Section5">
                           <div class="row">
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/wordpress/wp1.jpg">    <img src="{{asset('client')}}/images/portfolio/wordpress/wp1.1.jpg" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                       <a href="#" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 gellery-bg">
                                 <div class="pricing-box clrbg-before clrbg-after transition" style="padding:10px 0px;">
                                    <div class="item">
                                       <a class="venobox" data-gall="myGallery" href="images/portfolio/wordpress/wp2.png">    <img src="{{asset('client')}}/images/portfolio/wordpress/wp2.1.png" height="300" style="width: 100%" alt=""/>
                                       </a>
                                    </div>
                                    <a href="#" class="link">
                                       <span data-hover="click here">project link</span>
                                    </a>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--PROTFOLIO  part  end-->
      <!---------------------------------------------------------PROTFOLIO  part  end-------------------------------------------------------------------------->

      <!------------------------------------------------- 7 BLOG part start ----------------------------------------------------------------------------------->
      <!-- 7 BLOG part start -->
      <section class="client-blog dotted-bg" id="client-blogs">
         <div class="section-title">
            <div class="btn btn-lg">
               <span>client says</span>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div id="testimonial-slider" class="owl-carousel">
                     <div class="testimonial">
                        <div class="pic">
                           <img src="{{asset('client')}}/images/client-1.jpg" alt="">
                        </div>
                        <h3 class="title">Ravi M.</h3>
                        <p class="description"> "I was most impressed by the quality of work and communication."Good Job!!... Will hire him again</p>
                        <div class="testimonial-content">
                           <div class="testimonial-profile">
                              <h3 class="name">from : US,TEXAS.</h3>
                              <span class="post">Web Developer</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star-half-empty"></li>
                           </ul>
                        </div>
                     </div>
                     <div class="testimonial">
                        <div class="pic">
                           <img src="{{asset('client')}}/images/client-2.jpg" alt="">
                        </div>
                        <h3 class="title">ankit mozumder</h3>
                        <p class="description">“I think the main thing that distinguishes Website Design by rupom ehsan is how seriously they take their work.”</p>
                        <div class="testimonial-content">
                           <div class="testimonial-profile">
                              <h3 class="name">from : india,jaipur</h3>
                              <span class="post">management builder</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star-half-empty"></li>
                           </ul>
                        </div>
                     </div>
                     <div class="testimonial">
                        <div class="pic">
                           <img src="{{asset('client')}}/images/client3.JPG" alt="">
                        </div>
                        <h3 class="title">rasel sowdagor</h3>
                        <p class="description">I appreciate RUPOM EHSAN timeliness and communication. I was slow in my response to his edits and he was very patient.</p>
                        <div class="testimonial-content">
                           <div class="testimonial-profile">
                              <h3 class="name">from : qatar</h3>
                              <span class="post">businessman</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star-half-empty"></li>
                           </ul>
                        </div>
                     </div>
                     <div class="testimonial">
                        <div class="pic">
                           <img src="{{asset('client')}}/images/client-2.jpg" alt="">
                        </div>
                        <h3 class="title">Lorem ipsum dolor</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non ante porttitor.</p>
                        <div class="testimonial-content">
                           <div class="testimonial-profile">
                              <h3 class="name">Kristina</h3>
                              <span class="post">Web Designer</span>
                           </div>
                           <ul class="rating">
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star"></li>
                              <li class="fa fa-star-half-empty"></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>


    <section class="blog blog-bg" id="my-blog">
       <div class="container">
              <div class="section-title">
               <div class="btn btn-lg">
                  <span>blog</span>
               </div>
            </div>
         
                    <div class="row"> 
                   
                     @if (count($blogs))
                        @foreach ($blogs as $blog)
                        <div class="col-md-6 col-sm-6">
                           <div class="serviceBox">
                               <div class="service-icon">
                                 <img  src="{{asset($blog->image)}}" height="200" href="">
                               </div>
                               <div class="service-content">
                                   <h3 class="title">{{$blog->title}}</h3>
                                   <p class="description">{{$blog->desc}}</p>

                               </div>
                               <div class="blog-bottom">
                                 <div class="left col-md-6 col-sm-6">
                                       <button type="btn"><a href="{{url('/single-blog',$blog->id)}}">ReadMore</a></button>

                                 </div>
                                 <div class="right col-md-6 col-sm-6">
                                    <p>posted on :<span>{{$blog->created_at->format('d/m/y')}}</span></p>
                                 </div>
                                  <div class="blog-social">                                         
                                     <div class="center">
                                             <p>share on:</p>
                                          <div id="social-test">
                                             <ul class="social">
                                                <li><a href="https://www.facebook.com/profile.php" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="https://twitter.com" title=""><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                                
                                            
                                             </ul>
                                          </div>
                                       </div>

                                  </div>
                               </div>
                           </div>
                       </div>
                        @endforeach 
                     @endif
                    
        
          </div>
          <div class="morebuttn">
              <a href="all-blogs" class="link"><span data-hover="click here">see all post</span></a>
          </div>
          
      </div>
   </section>

      <!---  ---------CLIENTS ----------->
      <!----------------------------------------------------------------------CLIENTS  end-------------------------------------------------------------------------->

      <!------------------------------------------------------------------------- contact START------------------------------------------------------------------------->
      <section class="contact contact-bg" id="contact">
      <div class="container">
         <div class="contact-circle"></div>
         <div class="contact-border"></div>
         <div class="section-title">
            <div class="btn btn-lg">
               <span>contact </span>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 col-xs-12 contact-left" style="padding: 0px 39px; margin-top: 15%;left: 10%;">
            <p>Contact Information</p>
            <p style="font-size: 15px;text-transform: capitalize;">"if you are like my service you can contact with me or send me your valuable opinion here </p>
            

            
         </div>
         <div class="col-md-8  col-sm-8 col-xs-12">
            <div class="container-contact100">
               <div class="wrap-contact100">

                  {{-- <form id="contactform" class="contact100-form">
                     <!--  <label class="label-input100" for="first-name">Tell us your name *</label> -->
                     
                      <div class="wrap-input100 rs2-wrap-input100 validate-input mt-20 " data-validate="Type first name">
                        <input class="input100" type="text" id="first-name" name="first-name" placeholder="First name">
                        <span class="focus-input100"></span>
                     </div>
                     <div class="wrap-input100 rs2-wrap-input100 validate-input mt-20 " data-validate="Type last name">
                        <input class="input100" type="text" id="last-name" name="last-name" placeholder="Last name">
                        <span class="focus-input100"></span>
                     </div>
                     <!--   <label class="label-input100" for="email">Enter your email *</label> -->
                     <div class="wrap-input100 validate-input mt-20" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100"  id="email" type="text" name="email" placeholder="Enter your email">
                        <span class="focus-input100"></span>
                     </div>
                     <!--  <label class="label-input100" for="phone">Enter phone number</label> -->
                     <div class="wrap-input100 mt-20">
                        <input id="phone" class="input100" type="text" id="phone" name="phone" placeholder="Enter your phone">
                        <span class="focus-input100"></span>
                     </div>
                     <!--  <label class="label-input100" for="message">Message *</label> -->
                     <div class="wrap-input100 validate-input mt-20" data-validate = "Message is required">
                        <textarea id="message" class="input100" id="message" name="message" placeholder="Write your opinion"></textarea>
                        <span class="focus-input100"></span>
                     </div>
                     <div class="container-contact100-form-btn">
                         <input type="submit" class="btnRegister" name="submit" value="SEND"/>
                       <!--  <button class="contact100-form-btn">
                        Send Message
                        </button> -->
                     </div>
                  </form> --}}

                  <form id="contactForm" class="contact100-form">
                     <div class="wrap-input100 rs2-wrap-input100 validate-input mt-20 " data-validate="Type first name">
                        <input class="input100" type="text" id="first-name" name="first-name" placeholder="First name">
                        <span class="focus-input100"></span>
                     </div>
                     <div class="wrap-input100 rs2-wrap-input100 validate-input mt-20 " data-validate="Type last name">
                        <input class="input100" type="text" id="last-name" name="last-name" placeholder="Last name">
                        <span class="focus-input100"></span>
                     </div>
                     <div class="wrap-input100 validate-input mt-20" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100"  id="email" type="email" name="email" placeholder="Enter your email">
                        <span class="focus-input100"></span>
                     </div>
                     <div class="wrap-input100 mt-20">
                        <input id="phone" class="input100" type="number" id="phone" name="phone" placeholder="Enter your phone">
                        <span class="focus-input100"></span>
                     </div>
                     <!--  <label class="label-input100" for="message">Message *</label> -->
                     <div class="wrap-input100 validate-input mt-20" data-validate = "Message is required">
                        <textarea id="message" class="input100" name="message" placeholder="Write your opinion"></textarea>
                        <span class="focus-input100"></span>
                     </div>
                     <div class="container-contact100-form-btn">
                        <input type="submit" class="btn btn-white btnRegister" value="Submit">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      </section>
      <!-- ------------------------------------   colntact part end-------------------------------------------------------------->


@endsection
@section('custom_js')
   <script>
   $(document).ready(function(){
      $('#contactForm').submit(function(e){
         e.preventDefault()

         var first_name = $('#first-name').val()
         var last_name = $('#last-name').val()
         var email = $('#email').val()
         var phone = $('#phone').val()
         var message = $('#message').val()
         
         $.ajax({
            url : '{{route('contact.store')}}',
            method : 'post',
            datatype : 'json',
            data : {
               '_token' : '{{csrf_token()}}',
               'first_name' : first_name,
               'last_name' : last_name,
               'email' : email,
               'phone' : phone, 
               'message' : message,
            },
            success : function(res){
               if(res.status == 'done'){
                  Swal.fire(
                  'Good job!',
                  'Your Message Successfully Send',
                  'success'
                  )
                  $('#first-name').val('')
                  $('#last-name').val('')
                  $('#email').val('')
                  $('#phone').val('')
                  $('#message').val('')
               }
               console.log(res)
            },
            error :function(err){
               var error = err.responseJSON.errors
               if( error){
                  Swal.fire(
                  'Something went wrong!',
                  'Validation Error!',
                  'error'
                  )
               }
               console.log(err)
            },

         });
         
      })
   })
   </script>
   
@endsection
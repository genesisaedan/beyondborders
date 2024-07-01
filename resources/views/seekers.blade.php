@include('header')

<section class="sec-1-seeker">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h2>Work in <span>Germany</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('assets/images/frame_1487664799.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="sec-2-seeker">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3>Apply now for any of the following <br><span>In-Demand</span> Jobs</h3>
                <div class="apply-now">
                    <span class="select-dot"><img src="{{asset('assets/images/select-dot.png')}}" alt=""></span>
                    <select name="" id="" class="form-control">
                        <option value="" selected>Registered Nurse</option>
                    </select>
                    <span class="select-arrow"><img src="{{asset('assets/images/down-select.png')}}" alt=""></span>
                    <button>Apply Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="road-map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2>Process <span>Roadmap</span></h2>
                <p>(Please note that the specified stages below follows the German Recruitment requirements and it will vary depending on Applicant's country of origin and final country of Job Placement)</p>
                <div class="stages">
                    <div class="stage">
                        Stage 1
                    </div>
                    <div class="stage">
                        Stage 2
                    </div>
                    <div class="stage">
                        Stage 3
                    </div>
                </div>
                <div class="stage-process">
                    <div class="process">
                        <div class="process-head"><div class="process-img"><img src="{{asset('assets/images/assestment.png')}}" alt=""></div>Assetment</div>
                        <div class="process-body"><p>(Evaluation of applicant credentials such as CV, Certifications and standard background check)</p></div>
                    </div>
                </div>
                <div class="stage-process">
                    <div class="process">
                        <div class="process-head"><div class="process-img"><img src="{{asset('assets/images/interview.png')}}" alt=""></div>Interview</div>
                        <div class="process-body"><p>(Agency and Client)</p></div>
                    </div>
                </div>
                <div class="stage-process">
                    <div class="process">
                        <div class="process-head"><div class="process-img"><img src="{{asset('assets/images/client.png')}}" alt=""></div>Client Approval</div>
                    </div>
                </div>
                <div class="stage-process">
                    <div class="process">
                        <div class="process-head"><div class="process-img"><img src="{{asset('assets/images/employment.png')}}" alt=""></div>Employment Offer</div>
                        <div class="process-body"><p>(Discussion of contract inclusion, limitations, negotiation and acceptance)</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-germany">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2>Why Germany?</h2>
                <p>Here you will find, a lighthearted and often humorous look at the quirks of German culture through Meet-the-Germans by Deutschewelle <i>(https://www.dw.com)</i>,  or DW’s features on Germany’s places to visit. On the other hand, Make-it-in-Germany <i>(https://www.make-it-in-germany.com/en/)</i> will provide you with all the info on why it is attractive legally speaking to live and work in Germany. You can also find Vlog links of famous German Language Vloggers, “Learn German with Anja” and “German with Jenny” that can help ease the challenges of learning the German language</p>
            </div>
        </div>
    </div>
</section>

<section class="schools">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="school"><img src="{{asset('assets/images/school/image_702199947.png')}}" alt=""></div>
                <div class="school"><img src="{{asset('assets/images/school/image_702199943.png')}}" alt=""></div>
                <div class="school"><img src="{{asset('assets/images/school/image_702199944.png')}}" alt=""></div>
                <div class="school"><img src="{{asset('assets/images/school/image_702199945.png')}}" alt=""></div>
                <div class="school"><img src="{{asset('assets/images/school/image_702199946.png')}}" alt=""></div>
                
                <div class="school"><img src="{{asset('assets/images/school/image_702199948.png')}}" alt=""></div>
            </div>
        </div>
    </div>
</section>

<section class="vlogs">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2>Vlogs That Can Help Detangle Your Tongue And Brain As Your Learn The German Language</h2>
            </div>
            <div class="col-lg-12 vlog-container">
                <div class="youtubes">
                    <div class="youtube">
                        <img src="{{asset('assets/images/yt-btn.png')}}" alt="">
                    </div>
                    <p>German with Jenny</p>
                </div>
                <div class="youtubes">
                    <div class="youtube">
                        <img src="{{asset('assets/images/yt-btn.png')}}" alt="">
                    </div>
                    <p>A lighthearted and often humorous look at the...</p>
                </div>
                <div class="youtubes">
                    <div class="youtube">
                        <img src="{{asset('assets/images/yt-btn.png')}}" alt="">
                    </div>
                    <p>Learn German with Anja</p>
                </div>
                <div class="youtubes">
                    <div class="youtube">
                        <img src="{{asset('assets/images/yt-btn.png')}}" alt="">
                    </div>
                    <p>As an expactant mother in Germany you are entitled...</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')
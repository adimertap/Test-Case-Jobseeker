@extends('layouts')
@section('content')


<nav class="container navbar justify-content-between mt-2 px-3">
    <a class="navbar-brand">
        <img src="/img/logo-header.png" alt="logo-header" width="183" height="54">
    </a>
    <form class="form-inline">
        <button class="btn btn-pink p-3 px-5 text-white" type="submit"> Login</button>
    </form>
</nav>

<header class="container mt-5 mb-5 px-5">
    <div class="row gx-5">
        <div class="col my-auto">
            <h1 style="font-size: 48px">We help you <br> <b>
                    build your job portal
                </b></h1>
            <p class="mt-4" style="line-height: 27px; font-size: 18px">Why use third party when you can build your own, <br> customizable job portal for your specific requirements</p>
        </div>
        <div class="col">
            <img src="/img/hero.png" alt="logo-header" width="550" height="520">
        </div>
    </div>
</header>


<div class="container text-center justify-content-center px-5" style="margin-top: 156px">
    <h1 style="font-size: 48px">Powered by <br>
        Applicant Tracking System</h1>
    <p style="margin-top: 64px">Applicant Tracking System or ATS is software that streamlines and automates the end-to-end recruitment process for an employer or recruiter from source to hire. 99% of Fortune 500 companies use ATS to make their hiring process faster, cheaper and more effective</p>
    <button style="margin-top: 64px" class="btn btn-pink p-3 px-5 text-white" type="submit">Get Started</button>
</div>

<aside class="text-center" style="background: linear-gradient(90deg, rgba(197,66,138,1) 0%, rgba(49,44,150,1) 70%); padding: 100px; margin-top: 156px">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xl-10">
                <div class="text-white mb-4" style="font-size: 48px">Ready to Build Your Own Job Portal?</div>
                <button class="btn btn-pink p-3 px-5 mt-2 text-white" type="submit">Get Started</button>
            </div>
        </div>
    </div>
</aside>

{{-- <section class="container-fluid text-center bg-primary" style="margin-top: 156px">

        <h1 style="font-size: 48px">Ready to Build your Own Portal?</h1>
        <button style="margin-top: 64px" class="btn btn-pink p-3 px-5 text-white" type="submit">Get Started</button>

    </section> --}}


<section class="container mb-5" style="margin-top: 156px; padding-right: 100px; padding-left: 100px">
    <div class="row gx-5">
        <div class="col">
            <img src="/img/detail1.png" alt="logo-header" width="498" height="360">
        </div>
        <div class="col my-auto">
            <h2>High Quality Candidates</h2>
            <p class="mt-3 text-secondary" style="line-height: 27px; font-size: 20px">Get more high quality candidates faster and at <br>
                lower cost per hire</p>
            <a href="" class="text-pink">
                <p style="font-size: 18px">Get Started</p>
            </a>
        </div>
    </div>
    <div class="row gx-5" style="margin-top: 65px">
        <div class="col my-auto" style="padding: 80px">
            <h2>Saved Talent Pool</h2>
            <p class="mt-3 text-secondary" style="line-height: 27px; font-size: 20px">Boost employer brand and build your <br> own talent pool</p>
            <a href="" class="text-pink">
                <p style="font-size: 18px">Get Started</p>
            </a>
        </div>
        <div class="col-auto">
            <img src="/img/detail2.png" alt="logo-header" width="430" height="440">
        </div>
    </div>
    <div class="row gx-5" style="margin-top: 65px">
        <div class="col">
            <img src="/img/detail3.png" alt="logo-header" width="498" height="450">
        </div>
        <div class="col my-auto">
            <h2>Automated hiring Process & <br> Insights</h2>
            <p class="mt-3 text-secondary" style="line-height: 27px; font-size: 22px">Leverage insights from automated hiring <br> process to win the war for talent</p>
            <a href="" class="text-pink">
                <p style="font-size: 18px">Get Started</p>
            </a>
        </div>
    </div>
</section>

<section class="container mb-5" style="margin-top: 125px">
    <div class="text-center ">
        <h1 style="font-size: 48px">Search Any Jobs for You</h1>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-8">
                <form action="" class="search-bar">
                    <input type="text" id="search-form" placeholder="Position, City, or Company Name" name="search">
                    <button type="button" id="search-btn">
                        <img src="/img/search.png" alt="icon-search">
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:126px; padding-right: 100px; padding-left: 100px">
        <div class="col-lg-4">
            <h3 class="fw-bold">AVALIABLE JOBS</h3>
            <h4 class="mt-4">5 Top Location</h4>
            <ul style="list-style-type: none;">
                <li class="mt-1">Jakarta</li>
                <li class="mt-1">Surabaya</li>
                <li class="mt-1">Bali</li>
                <li class="mt-1">Tanggerang</li>
                <li class="mt-1">Bandung</li>
            </ul>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <tr class="Jsondata" style="list-style: none">
                    <td>
                        <div class="col-12 p-2 mt-3">
                            <div class="d-flex justify-content-between">
                                <h2 class="fw-semi-bold nama_lowongan">Marketing Manager</h2>
                                <div class="ml-auto">
                                    <h4 class="text-primary kota">Jakarta</h4>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2">
                                    <p class="text-muted">Requirements: </p>
                                </div>
                                <div class="col-auto ml-2">
                                    <p class="mb-1 fw-normal">Bachelor Degree <br>
                                        Min. 5 years of experience</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <p class="text-muted">Salary: </p>
                                </div>
                                <div class="col-auto ml-2">
                                    <p>IDR 10 - 15 Millions</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div class="my-auto">
                                    <p class="fw-italic text-muted" style="font-size: 12px"> <i>Posted 10 mins ago</i> </p>
                                </div>
                                <div class="ml-auto">
                                    <button class="btn btn-pink p-2 px-5 text-white" type="submit">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </td>
            </div>
        </div>
        </ul>



    </div>

</section>

<section style="background: #202020; margin-top: 125px; padding-right: 100px; padding-left: 100px">
    <div class="container p-5 text-white">
        <img src="/img/logo-footer.png" alt="logo-footer" width="72" height="67">

        <div class="row mt-4">
            <div class="col-7">
                <h5 class="text-uppercase">Indonesia</h5>
                <h6>Jakarta</h6>
                <p>AD Premier Office Park, 9th Floor <br> Jl. TB Simatupang No.5, Ragunan, Pasar Minggu <br> South Jakarta City, Jakarta 12550</p>
                <div class="mt-4">
                    <h6>Bali</h6>
                    <p>Jl. Karang Mas, Jimbaran, South Kuta <br> Kabupaten Badung, Bali, 80361 </p>
                </div>
                <div class="mt-4">
                    <h6>Singapore</h6>
                    <p>10 Anson Road #22-02 International Plaza, <br> Singapore, 079903</p>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-auto">
                            <i class="h3 fa-regular fa-envelope"></i>
                        </div>
                        <div class="col">
                            <p>info@jobseeker.company</p>
                        </div>
                    </div>
                </div>
                <div class="mt-1">
                    <div class="row">
                        <div class="col-auto">
                            <i class="h3 fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="col">
                            <p>+62 813 1881 7887</p>
                        </div>
                    </div>
                </div>
                <div class="dflex justify-content-between">
                    <i class="p-1 h3 fa-brands fa-facebook"></i>
                    <i class="p-1 h3 fa-brands fa-instagram"></i>
                    <i class="p-1 h3 fa-brands fa-linkedin"></i>
                    <i class="p-1 h3 fa-brands fa-tiktok"></i>
                    <i class="p-1 h3 fa-brands fa-youtube"></i>
                    <i class="p-1 h3 fa-brands fa-telegram"></i>

                </div>
            </div>
            <div class="col-3">
                <h5 class="text-uppercase">For Employer</h5>
                <a class="text-white fs--1" href="">jobseeker.patners</a> <br>
                <a class="text-white fs--1" href="">jobseeker.services</a><br>
                <a class="text-white fs--1" href="">jobseeker.software</a>
            </div>
            <div class="col-2">
                <h5 class="text-uppercase">For Candidate</h5>
                <a class="text-white fs--1" href="">jobseeker.patners</a> <br>
            </div>
        </div>
        <hr style="background: white">
        <div class="d-flex justify-content-between">
            <p class="mr-auto p-1">Copyright © 2022 JobSeekerApps Pte. Ltd</p>
            <p class="p-1">Privacy Policy</p>
            <p class="p-1">Terms of Service</p>
        </div>
    </div>
</section>


<script type="text/javascript">
    $(document).ready(function() {
        $('#search-btn').on("click", function() {
            var search = $('#search-form').val()
            var url = "https://api-dev.jobseeker.app/api/v1/get-list-vacancy?page=1&limit=4&keyword=" + search;
            $.ajax({
                url: url
                , type: "POST"
                , success: function(response) {
                    console.log(response.data)
                }
                , error: function(err) {
                    console.log(err)
                }

            })

        })
    });

</script>




@endsection

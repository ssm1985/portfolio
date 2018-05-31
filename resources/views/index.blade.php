@extends('shell')

@section('content')
    {{-- <h1>Hi, talk nerdy to me.</h1> --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="home-image">

            </div>
            <br>
            <div class="downloads">
                <h3>Downloads</h3>
                <ul class="home-list">
                    <li><a href="/img/El Toro - Certificate.JPG">El Toro Certificate of Completion</a></li>
                    <li><a href="/img/El Toro - Letter of Recognition.JPG">El Toro Letter of Recognition</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="home-content">
                <h3>Summary</h3>
                <br>
                <ul class="home-list">
                  <li>With a Web Developer Certification from SAIT (2018) & BSc in Electrical Engineering from the University of Calgary (2015), Spencer is a well rounded individual looking to use his skills to master Web Development.</li>
                  <br>
                  <li>Completed a four month internship with a digital advertising technology company, <a href="https://www.eltoro.com">El Toro</a> in Louisville, KY, USA. Spencer had to work independently to solve issues or implement new features - but with a highly advanced support team ready to assist if needed.</li>
                  <br>
                  <li>Spencer does not take a typical approach to a portfolio site or <a href="https://www.linkedin.com/in/spencer-mcleod">LinkedIn profile</a>. He wants to give you a sense of who he is as a person. He tends to thrive in smaller business environments and company cultures where displaying a sense of personality is valued just as much as learning & a job well done.</li>
                  <br>
                  <li>Full Stack opportunities are preferred.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div id="tabs">
                <ul class="row">
                    <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><a href="#tabs-1">What I Learned</a></li>
                    <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><a href="#tabs-2">Other Skills</a></li>
                    <li class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><a href="#tabs-3">This Site</a></li>
                </ul>
                <div id="tabs-1">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h4>SAIT Web Developer Fast-Track (Sept. 2017 - Dec. 2017):</h4>
                            <ul class="home-list">
                                <li>JavaScript</li>
                                <li>Responsive design</li>
                                <li>The MVC architectural pattern (Laravel/PHP)</li>
                                <li>Adobe Photoshop & Illustrator</li>
                                <li>GIT</li>
                                <li>UI/UX theory</li>
                                <li>Google Cloud & AWS</li>
                                <li>...and much more...</li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h4>ElToro.com Internship - Louisville, KY, USA (Jan. 2018 - April 2018):</h4>
                            <ul class="home-list">
                                <li>Ubuntu OS & Linux CLI</li>
                                <li>More JavaScript</li>
                                <li>Meteor JS</li>
                                <li>React JS</li>
                                <li>Node JS</li>
                                <li>GIT CLI</li>
                                <li>MongoDB & Robo 3T</li>
                                <li>...and much more...</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="tabs-2">
                    <ul class="home-list">
                        <li>C/C++</li>
                        <li>SEO</li>
                        <li>Domain names as they relate to marketing & business as opposed to I.T.</li>
                        <li>Audio production</li>
                        <li>BSc. in Electrical Engineering (University of Calgary - 2015)</li>
                    </ul>
                </div>
                <div id="tabs-3">
                    <h4>About this site:</h4>
                    <ul class="home-list">
                        <li>Built on Laravel PHP Framework</li>
                        <li>CRUD application (blog)</li>
                        <li>JavaScript & jQuery</li>
                        <li>Hosted on AWS Elastic Beanstalk</li>
                        <li>See <a href="/projects">projects page</a> to see more work</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="place-holder">

            </div>
            <div class="twitter">
                <a class="twitter-timeline" data-width="250" data-height="400" data-theme="light" data-link-color="#1f363d" href="https://twitter.com/ssmcleod85?ref_src=twsrc%5Etfw">Tweets by ssmcleod85</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>

@endsection

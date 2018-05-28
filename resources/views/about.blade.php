@extends('shell')

@section('content')
    <h1>About</h1>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="tabs">
                <ul class="row">
                    <li class="col-xs-12 col-sm-5 col-md-4 col-lg-2"><a href="#tabs-1">Why Web Development?</a></li>
                    <li class="col-xs-12 col-sm-5 col-md-4 col-lg-2"><a href="#tabs-2">What I Learned</a></li>
                    <li class="col-xs-12 col-sm-5 col-md-4 col-lg-2"><a href="#tabs-3">Complimentary Skills</a></li>
                    <li class="col-xs-12 col-sm-5 col-md-4 col-lg-2"><a href="#tabs-4">Future Goals</a></li>
                </ul>
                <div id="tabs-1">
                    <ul class="home-list">
                        <li>It's a stepping stone to future goals</li>
                        <li>Expand on previous experience, fill in some gaps, while continuing to learn</li>
                        <li>Develop the credibility that comes with certification & experience</li>
                        <li>Programming is a skill that is increasingly in demand</li>
                        <li>Job and freelancing opportunities</li>
                        <li>Possiblities to work remotely at times</li>
                        <li>I like to talk nerdy</li>
                    </ul>
                </div>
                <div id="tabs-2">
                  <h4>SAIT Web Developer Fast-Track (Sept. 2017 - Dec. 2017):</h4>
                    <ul class="home-list">
                        <li>Applying JavaScript and an introduction to common JS libraries & frameworks</li>
                        <li>Responsive design</li>
                        <li>The MVC architectural pattern (Laravel)</li>
                        <li>Adobe Photoshop & Illustrator</li>
                        <li>Version Control (GIT)</li>
                        <li>UI/UX theory</li>
                        <li>Introduction to Google Cloud & AWS</li>
                        <li>...and much more...</li>
                    </ul>
                  <h4>ElToro.com Internship - Louisville, KY, USA (Jan. 2018 - April 2018):</h4>
                    <ul class="home-list">
                        <li>Extensive use of full stack web development tools including Meteor JS, React JS, Node JS, Git, MongoDB, Robo 3T, and Bootstrap</li>
                        <li>Required to work with many various NPM packages including ReactTable, Vazco Uniforms, and Simple Schema</li>
                        <li>Ubuntu</li>
                        <li>...and much more...</li>
                    </ul>
                </div>
                <div id="tabs-3">
                    <ul class="home-list">
                        <li>C/C++</li>
                        <li>SEO</li>
                        <li>Domain names as they relate to marketing & business as opposed to I.T.</li>
                        <li>Audio production</li>
                        <li>BSc. in Electrical Engineering (University of Calgary - 2015)</li>
                    </ul>
                </div>
                <div id="tabs-4">
                    <ul class="home-list">
                        <li>Gain valuable work experience with entrepreneurial companies developing online based platforms</li>
                        <li>Cover (almost) every Tool song on the drums and post it on YouTube</li>
                        <li>Buy property in Sicamous B.C.</li>
                        <li>Be alive long enough to see the Oilers win the Stanley Cup again</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

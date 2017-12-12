@extends('shell')

@section('content')
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Why Web Development?</a></li>
            <li><a href="#tabs-2">What I Learned</a></li>
            <li><a href="#tabs-3">Complimentary Skills & Knowledge</a></li>
            <li><a href="#tabs-4">Future Goals</a></li>
        </ul>
        <div id="tabs-1">
            <ul class="home-list">
                <li>It's a stepping stone to future goals</li>
                <li>Expand on previous experience & fill in some gaps</li>
                <li>Aquire the credibility that comes with certification</li>
                <li>Programming is a skill that is increasingly in higher demand</li>
                <li>Job and freelancing opportunities</li>
                <li>I like to talk nerdy</li>
            </ul>
        </div>
        <div id="tabs-2">
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
        </div>
        <div id="tabs-3">
            <ul class="home-list">
                <li>C/C++</li>
                <li>SEO</li>
                <li>Domain names</li>
                <li>Audio production</li>
                <li>Electrical engineering background</li>
            </ul>
        </div>
        <div id="tabs-4">
            <ul class="home-list">
                <li>Gain valuable work experience with entrepreneurial minded people developing online based platforms </li>
                <li>Develop premium domains in my portfolio into revenue generating businesses</li>
                <li>Be entirely self employed</li>
                <li>Not have to touch a single line of code within 5 to 10 years</li>
                <li>Buy property in Sicamous B.C.</li>
                <li>Be alive long enough to see the Oilers win the Stanley Cup again</li>
            </ul>
        </div>
    </div>

        {{-- <h2>Calgary Website Development</h2> --}}
        {{-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 home">
            <h3>Why Web Development?</h3>
            <ul>
                <li>It's a stepping stone to future goals</li>
                <li>Expand on previous experience & fill in some gaps</li>
                <li>Aquire the credibility that comes with certification</li>
                <li>Programming is a skill that is increasingly in higher demand</li>
                <li>Job and freelancing opportunities</li>
                <li>I like to talk nerdy</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 home">
            <h3>What I Learned</h3>
            <ul>
                <li>Applying JavaScript and an introduction to common JS libraries & frameworks</li>
                <li>Responsive design</li>
                <li>The MVC architectural pattern (Laravel)</li>
                <li>Adobe Photoshop & Illustrator</li>
                <li>Version Control (GIT)</li>
                <li>UI/UX theory</li>
                <li>Introduction to Google Cloud & AWS</li>
                <li>...and much more...</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 home">
            <h3>Complimentary Skills & Knowledge</h3>
            <ul>
                <li>C/C++</li>
                <li>SEO</li>
                <li>Domain names</li>
                <li>Audio production</li>
                <li>Electrical engineering background</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 home">
            <h3>Future Goals</h3>
            <ul>
                <li>Gain valuable work experience with entrepreneurial minded people developing online based platforms </li>
                <li>Develop premium domains in my portfolio into revenue generating businesses</li>
                <li>Be entirely self employed</li>
                <li>Not have to touch a single line of code within 5 to 10 years</li>
                <li>Buy property in Sicamous B.C.</li>
                <li>Be alive long enough to see the Oilers win the Stanley Cup again</li>
            </ul>
        </div> --}}
@endsection

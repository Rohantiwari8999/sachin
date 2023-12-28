@extends('layout.app')
@section('appContents')
<head>
    <style>
        .container {
            max-width: 640px;
            margin: 50px auto;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .pars {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background: transparent;
    border:2px solid rgba(255,255,255,.2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    color:black;
        }

        .pars p {
            margin-bottom: 0;
        }

        .pars b {
            color: #333;
        }
        .leftalign {
    margin: 20px 71px 20px -157px;
}
.rightalign {
    margin: 59px -156px 59px 102px;
}
.imgRight {
    position: absolute;
    top: 0em;
    left: 745px;
    max-width: 293px;
}
.imgLeft {
    position: absolute;
    top: 0em;
    right: 730px;
    max-width: 298px;
}
.img3{
    max-width: 330px;
}
.img4{
    max-width: 340px;
}
.img5{
    max-width: 335px;
}


.history-heading {
  font-size: 3em;
  text-align:center;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #333;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}
    </style>
</head>
<body>
    <div class="history-heading">
        History
    </div>
    <div class="container">
        <div class="pars leftalign">
            <p><b>Early Life and Entry into Cricket</b><br><br>
                Virat Kohli was born on November 5, 1988, in Delhi, India. His father, Prem Kohli, was a criminal lawyer, and his mother, Saroj Kohli, was a housewife. Virat grew up in Uttam Nagar and showed a keen interest in cricket from a very young age. His talent was evident early on, and he started receiving proper training in cricket during his schooling at the Vishal Bharti Public School.</p>
            <img src="/images/img1.jpg" alt="img1" class="imgRight img1">
            </div>
        <div class="pars rightalign">
            <p><b>Rise through the Ranks</b><br><br>
                Kohli's passion for the game led him to join the West Delhi Cricket Academy at the age of 9, where he honed his skills under the guidance of coach Rajkumar Sharma. His proficiency in batting was apparent, and he quickly climbed through the ranks in Delhi's age-group cricket.</p>
                <img src="/images/img2.jpg" alt="img2" class="imgLeft img2">
        </div>
        <div class="pars leftalign">
            <p><b>Domestic Career</b><br><br>
                He made his first-class debut for Delhi in 2006 at the Ranji Trophy and soon became a regular in the team. His consistent performances earned him a spot in the Indian U-19 team, where he shone as a promising talent during the 2008 U-19 World Cup, leading India to victory.</p>
                <img src="/images/img3.jpg" alt="img2" class="imgRight img3">
        </div>
        <div class="pars rightalign">
            <p><b>International Debut and Rise to Stardom</b><br><br>
                Virat Kohli made his international debut for India in August 2008 during a One Day International (ODI) against Sri Lanka. He showcased his remarkable batting skills and cemented his place in the team with consistent performances. His breakthrough moment came during the 2011 ICC Cricket World Cup where he played a pivotal role in India's triumph.</p>
                <img src="/images/img4.jpg" alt="img2" class="imgLeft img4">
        </div>
        <div class="pars leftalign">
            <p><b>Captaincy and Leadership</b><br><br>
                Kohli's leadership journey began when he was appointed the captain of the Indian cricket team for the U-19 World Cup in 2008. He took over the reins of the Test team in 2014, leading the team to significant victories, including India's first Test series win in Australia in 2018-2019. In 2017, he also took over the captaincy of the limited-overs formats (ODIs and T20Is).</p>
                <img src="/images/img5.jpg" alt="img2" class="imgRight img5">
        </div>
        <div class="pars rightalign">
            <p><b>Personal Life and Off-field Influence</b><br><br>Personal Life and Off-field Influence:
                Off the field, Kohli is known for his fitness regimen and dedication to maintaining a healthy lifestyle. His marriage to Bollywood actress Anushka Sharma in 2017 made headlines, and the couple has since been influential figures both in the sports and entertainment industries.</p>
                <img src="/images/img6.jpg" alt="img2" class="imgLeft img6">
        </div>
        <div class="pars leftalign">
            <p><b>Transition and Future</b><br><br>
                As of my last update, Kohli had stepped down as India's T20I captain, emphasizing a shift in his career focus. However, his dedication to cricket and aspirations for further achievements remain undiminished.</p><br><br>
                <img src="/images/img7.jpg" alt="img2" class="imgRight img7">
        </div>
    </div>
</body>
@endsection

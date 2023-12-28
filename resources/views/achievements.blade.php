@extends('layout.app')
@section('appContents')
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Virat Kohli Records and Achievements</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;

  background-color: #f7f7f7;
  color: #333;
}
main {
  max-width: 800px;
  margin: 20px auto;
  padding: 0 20px;
}

.records {
    overflow: hidden;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  background: transparent;
    border:2px solid rgba(255,255,255,.2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    color:black;
    overflow: hidden;
}

h2{
  font-size: 1.8em;
  margin-bottom: 15px;
}
h3 {
    font-size:1.4em;
    margin-bottom: 15px;
}
ul {
  list-style: none;
  padding: 0;

}

.records li {
    margin: 20px 10px;
  line-height: 1.5;
}

.records li::before {
  content: "• ";
  color: #333;
  font-weight: bold;
  display: inline-block;
  margin-left: -1em;
}
.Awards-heading {
            font-size: 3em;
            text-align:center;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
          }
.img{
    text-align: center;
}
p{
    line-height: 1.5;
    margin-bottom: 15px;
}
  </style>
</head>
<body>
    <div class="Awards-heading">
        Virat Kohli Records, Awards and Achievements
    </div>
    <div class="img">
        <img src="/images/records.jpg" alt="img">
    </div>
  <main>
    <section class="records">
        <p><b>Virat Kohli Records Awards list: </b> Indian skipper Virat Kohli is considered as one of the greatest cricketers of all time. Times of Sports(TOS) listed records, achievements, and awards received by Virat Kohli.</p>
      <h2>Virat Kohli's Records</h2>
      <ul>
        <li> Virat Kohli is the only Indian batsman who got 890 rating points in the ICC ODI ranking.
            Previously Sachin Tendulkar got the best rating of 887 in 1998.</li>
        <li> Virat Kohli has the record of having the highest ICC rating points (922) in the ICC Player Rankings for Test Batsmen. </li>
        <li> Virat Kohli scored six double-centuries as a captain in test matches. He surpassed Cricket legend Brian Lara, who had five double centuries as a test captain.</li>
        <li> Virat Kohli has the most number of 150+ scores as captain in Tests - 9 times.</li>
        <li> Virat Kohli became the first player to hit consecutive 3 centuries in against two opponents (West Indies & Sri Lanka).</li>
        <li> Kolhi is the most successful Indian ODI captain. Kohli's success rate is 75.89% as a captain which is better than M.S. Dhoni.</li>
        <li> Virat Kohli scored more than 20,000 runs at an average of over 50 in all formats -Test matches, One Day Internationals, and T-20 matches.</li>
        <li> Rahul Dravid scored 10,000 ODI runs after playing 10 years, 317 days while Kohli achieved this by playing just 10 years and 68 days.</li>
        <li> Virat Kohli captained India in 17 T20I bilateral series and won 12 out of them. India lost just 2 series under him.</li>
        <li> Virat Kohli becomes the first Indian cricketer to cross 10,000 T20 runs.</li>
        <li> Virat Kohli becomes the first-ever player to be part of 50 wins in each of the three formats.</li>
        <li> In the 2nd Test match of IND vs NZ 2021 series, India beat New Zealand by 372 runs under Virat Kohli's captaincy which is the biggest win in       terms of runs in the Indian test history.</li>
        <li> Ricky Ponting(2006, 2007) and Virat Kohli(2017, 2018) are the only cricketers to win the Sir Garfield Sobers Trophy in successive years.</li>
        <li> Virat Kohli becomes the first Indian captain in history to win two Boxing Day Test matches. (AUS vs IND - Melbourne Cricket Ground; SA vs IND      at Centurion 2021)</li>
        <li> Virat Kohli took over the Test captaincy when India was ranked 7th and Virat steps down from Captaincy when India ranked No.1.</li>
        <li> Virat Kohli's batting record as a Test captain: Innings - 113; Runs - 5,864; Average - 54.80; Hundreds - 20; Fifties - 18.</li>
        <li> Virat Kohli as captain in international cricket: Matches - 213; Won - 135; Runs - 12,883; Average - 59.92; Hundreds - 41.</li>
        <li> On December 10, 2022 Virat Kohli bagged his 72nd century in the 3rd ODI against Bangladesh and surpassed Ricky Ponting's 71-century mark.</li>
        <li> Virat Kohli bagged the ICC Men's Player of the Month award for October following his impressive performance in the Asia Cup 2022 and in ICC T20 World Cup 2022.</li>
        <li> On 11th March 2023, in the 4th Test match of BGT 2023, Virat Kohli surpassed Brain Lara and became the second player to score the most runs against Australia in international cricket behind Sachin Tendulkar.</li>
        <li> On 11th September 2023, Virat Kohli became the third player to score the most 50+ runs in the ODI format in a match against Pakistan in AsiCup 2023 Super 4s.</li>
        <li> On October 08, 2023, during the IND vs AUS ODI World Cup 2023 League game, Virat Kohli became the fastest ever in history to complete 11,00 ODI runs at No.3 position.</li>
        <li> On October 19, 2023, Virat Kohli surpassed Brain Lara and AB de Villers in the list of players with the most runs in ODI World Cups.</li>
        <li> On October 19, 2023, Virat Kohli became the fastest ever to complete 26,000 runs in International cricket. Virat reached this milestone in  just 577 innings while Sachin scored 26000 international runs in 601 innings.</li>
        <li> On November 5, 2023, Virat Kohli scored his 49th ODI century against South Africa in the World Cup 2023 group matches and equals Sachin record of 49 ODI centuries. Notably, Sachin took 452 innings to achieve this feat while Virat took only 277 innings to score his 49th ODI century.</li>
        <li> On November 12, 2023, in the match against the Netherlands, Virat Kohli scored 51 runs and equals Sachin Tendulkar's record for most 50 scores in a World Cup edition. Sachin scored seven 50+ scores in the 2003 World Cup while Virat scored 7* in the 2023 World Cup.</li>
        <li> On November 15, 2023, in the ODI WC 2023 1st semifinal against New Zealand, Virat scored his 50th ODI century and surpassed Sachin's record for 49 ODI centuries.</li>
      </ul>
    </section>
  </main>

  <div class="img">
    <img src="/images/awards.jpg" alt="img" height="295px" width="500px">
</div>
<main>
<section class="records">
  <h2>Virat Kohli Achievement as Skipper</h2>
  <h3>T 20</h3>
  <ul>
    <li>Virat Kohli has the best average(500+ runs) as T20 Skipper -47.6%</li>
    <li>Virat Kohli holds the second-best win(40+ matches) rate -66%</li>
    <li>Virat won the T20I series in South Africa, England, New Zealand, and Australia</li>
    <li>India's longest T20I win-streak as Virat as skipper -10 matches</li>
  </ul>
  <h3>Most double centuries by an Indian in Test cricket </h3>
  <p>In 2019, Kohli surpassed Sachin Tendulkar and Virendra Sehwag to smash most double centuries by an Indian in test cricket. Kohli has seven centuries in the long format of the game, while Sachin and Sehwag have six double centuries each.</p>
  <h3>Most runs in a single IPL season – 973</h3>
  <p>
    Kohli scored 973 runs in the ninth edition of the Indian Premier League to guide his team to the finals of the tournament. The season saw him score as many as four centuries — the most by a player in a single season. That year, Kohli led India to new heights as a captain with his consistency.</p>
    <h3>Most runs in a calendar year/series</h3>
    <p>
        In 2017, Kohli slammed 11 centuries across all formats of the game and amassed 3000 runs. As a captain, he led India to new heights, winning all the series at home.
    </p>
    <ul>
        <li> Most ODI runs in a calendar year by an Indian cricketer – 2010, 2011, 2012, 2013, 2014, 2015, 2016</li>
        <li> Highest combined international runs scored in a year by an Indian cricketer – 2818 international runs in 2017</li>
        <li> Second Highest century by an Indian</li>
        <li> Most Test runs in 2018 by any cricketer</li>
        <li> Most ODI runs in 2018 by any cricketer</li>
      </ul>
</section>
</main>
<main>
    <section class="records">
      <h2>Milestones reached by Virat Kohli</h2>
      <ul>
        <li> Fastest Indian to reach 1000, 5000, 6000, 7000, 8000, 9000, and 10,000 runs in ODIs</li>
        <li> Fastest Indian and second fastest in the world to reach 10, 15, 20, and 25 centuries in ODIs</li>
        <li> The only batsman in history to average more than 50 in Tests, ODIs, and T20Is simultaneously</li>
        <li> Fastest in the world to reach 30 and 35 centuries in ODIs</li>
        <li> Second fastest in the world to reach 1,000 runs in T20Is</li>
        <li> First Indian cricketer to score three successive centuries in ODIs</li>
        <li> Fastest in the world to reach 15,000 international runs</li>
        <li> Fastest batsman to score 17,000 runs in international cricket (363 innings)</li>
        <li> First batsman to reach 6000 runs in IPL tournament</li>
        <li> Virat Kohli holds the record for the fewest innings(462 innings) to reach 22000 International runs followed by Sachin Tendulkar who took 493 innings to achieve this feat.</li>
        <li>Kohli scored 23000 runs from playing 490 international matches with a 50+ average – the only player to score 20000+ runs with a 50+ average.</li>
        <li> Virat Kohli becomes the first Indian cricketer to cross 10,000 T20 runs.</li>
        <li> Virat becomes the fastest to complete 8000, 9000, 10000, 11000, 12000, and 13000 runs in ODI format.</li>
        <li> Virat Kohli scored his 49th ODI century in just 277 innings while Sachin Tendulkar took 452 innings to score his 49th ODI century.</li>
      </ul>
    </section>
</main>
<div class="img">
    <img src="/images/receiving.jpg" alt="img" height="340px" width="750px">
</div>
<main>
    <section class="records">
      <h2>Virat Kohli Awards</h2>
      <ul>
        <li> Sir Garfield Sobers Trophy (ICC Cricketer of the Year): 2017, 2018</li>
        <li> ICC ODI Player of the Year: 2012, 2017</li>
        <li> ICC Test Team of the Year: 2017 (captain)</li>
        <li> Padma Shri: 2017</li>
        <li> ICC ODI Team of the Year: 2012, 2014, 2016 (Captain), 2017 (Captain)</li>
        <li> Arjuna Award: 2013</li>
        <li> Rajiv Gandhi Khel Ratna: 2018</li>
        <li> Sir Garfield Sobers Award for ICC Men’s Cricketer of the Decade(2010-2020)</li>
      </ul>
    </section>
</main>
</body>
</html>

@endsection

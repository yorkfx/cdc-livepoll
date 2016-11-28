<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CDC</title>
  <style>
  html {
    box-sizing: border-box;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    background-color: #00ff00;
  }
  
  *,
  *:before,
  *:after {
    box-sizing: inherit;
  }
  
  body {
    margin: 0;
    font-family: 'Open Sans', sans-serif;
    color: #333;
    width: 100%;
    height: 100%;
  }
  
  header {
    text-align: center;
  }
  
  h1 {
    text-align: center;
    width: 100%;
    font-size: 50px;
    padding: 30px 0;
    margin: 0;
    color: #fff;
  }
  
  #wrap {
    position: relative;
    margin: 0px auto;
    width: 1280px;
    height: 720px;
  }
  
  .tc {
    text-align: center;
    font-weight: bold;
    display: inline-block;
    background-size: 100% 100%;
    background-position: center left;
  }
  
  .wf img.emoji {
    width: 110px;
    display: inline-block;
    margin: 25px 20PX 20px 40px;
    float: left;
  }
  
  .counter {
    margin: 20px 20px 20px 0;
    float: left;
    text-align: center;
    width: 180px;
    font-size: 5rem;
    color: #fff;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, .4);
  }
  
  .wf {
    width: 47%;
    float: left;
    margin: 4px 1.5%;
    height: 160px;
    background: transparent;
    position: relative;
    text-align: center;
  }

  #contenedor{
    height: 50px;
    width: 97%;
    margin: 0 auto;
  }
  #contenedor div{
    display: inline-block;
    vertical-align: top;
    height: 50px;
    background-color: black;
    width: 49.8%;
 
  }
  #valor1{
    float: right;
    height: 50px; 
    border-radius: 20px 0 0 20px;
    border:2px solid black;
    }
  #valor2{
    float: left;
    height: 50px; 
    border-radius: 0 20px 20px 0;
    border:2px solid black;
    }

    p{
    font-size: 2rem;
    color: #fff;
    text-align: center;
    font-weight: 700;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, .4);
    }
  </style>
</head>

<body>
  <header>
    <h1>Facebook Live Poll (Demo) </h1>
  </header>
  <div id="contenedor">  
    <div>
      <div id="valor1" style="background-color: #2674e5"></div>
    </div>
    <div>
      <div id="valor2" style="background-color: #FFD954"></div>
    </div>
  </div>
  
  <div class="tc wf likes" style="background-image: url('');"><img class="emoji" src="emojis/like.png"><span class="counter"></span></div>
  <div class="tc wf fml" style="background-image: url('');"><img class="emoji" src="emojis/haha.png"><span class="counter"></span></div>
  
  <p>votos totales <span id="votosTotales"></span></p>

  <script src="jquery.min.js"></script>
  <script src="lodash.min.js"></script>
  <script>
  "use strict";
  var access_token = '627471700756980|cfjwzo9_Wx_y1XVR2Z7db5ndoaY'; // FACEBOOK ACCESS TOKEN
  var postID = '905228679611095'; // POST ID 
  var refreshTime = 1;
  var defaultCount = 0;

  var reactions = ['LIKE', 'LOVE', 'WOW', 'HAHA', 'SAD', 'ANGRY'].map(function(e) {
    var code = 'reactions_' + e.toLowerCase();
    return 'reactions.type(' + e + ').limit(0).summary(total_count).as(' + code + ')'
  }).join(',');

  var v1 = $('.likes .counter'),
    v2 = $('.happy .counter'),
    v3 = $('.sad .counter'),
    v4 = $('.fml .counter'),
    v5 = $('.angry .counter'),
    v6 = $('.shock .counter'),

    valor1 = $('#valor1'),
    valor2 = $('#valor2'),
    votosTotales = $('#votosTotales');


  function refreshCounts() {
    var url = 'https://graph.facebook.com/v2.8/?ids=' + postID + '&fields=' + reactions + '&access_token=' + access_token;
    $.getJSON(url, function(res) {
      v1.text(defaultCount + res[postID].reactions_like.summary.total_count);
      v2.text(defaultCount + res[postID].reactions_love.summary.total_count);
      v3.text(defaultCount + res[postID].reactions_sad.summary.total_count);
      v4.text(defaultCount + res[postID].reactions_haha.summary.total_count);
      v5.text(defaultCount + res[postID].reactions_angry.summary.total_count);
      v6.text(defaultCount + res[postID].reactions_wow.summary.total_count);

      votosTotales.text(res[postID].reactions_haha.summary.total_count  + res[postID].reactions_like.summary.total_count);

      valor1.width(defaultCount + res[postID].reactions_like.summary.total_count/(res[postID].reactions_haha.summary.total_count  + res[postID].reactions_like.summary.total_count)*100 + '%');
      valor2.width(defaultCount + res[postID].reactions_haha.summary.total_count/(res[postID].reactions_haha.summary.total_count  + res[postID].reactions_like.summary.total_count)*100 + '%');

    });
  }

  $(document).ready(function() {
    setInterval(refreshCounts, refreshTime * 1000);
    refreshCounts();


  });
  </script>
</body>

</html>

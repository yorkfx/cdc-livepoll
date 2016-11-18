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
    background: rgba(0, 0, 0, 0.3)
  }
  
  header {
    text-align: center;
  }
  
  header .logo {
    position: relative;
    margin: 100px auto 20px;
    width: 250px;
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
    margin: 25px 0 20px 20px;
    float: left;
  }
  
  .counter {
    margin: 20px 20px 20px 0;
    float: left;
    text-align: center;
    width: 180px;
    font-size: 5.5rem;
    color: #fff;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, .4);
  }
  
  .wf {
    width: 47%;
    float: left;
    margin: 4px 1.5%;
    height: 160px;
    background: #fff;
    position: relative;
    text-align: center;
  }
  </style>
</head>

<body>
  <header>
    <h1>¿Cuál crees que fue el mejor evento de año?</h1>
  </header>
  <div class="tc wf likes" style="background-image: url('preguntas/pregunta1.jpg');"><img class="emoji" src="emojis/like.png"><span class="counter"></span></div>
  <div class="tc wf happy" style="background-image: url('preguntas/pregunta2.jpg');"><img class="emoji" src="emojis/love.png"><span class="counter"></span></div>
  <div class="tc wf sad" style="background-image: url('preguntas/pregunta3.jpg');"><img class="emoji" src="emojis/sad.png"><span class="counter"></span></div>
  <div class="tc wf fml" style="background-image: url('preguntas/pregunta4.jpg');"><img class="emoji" src="emojis/haha.png"><span class="counter"></span></div>
  <div class="tc wf angry" style="background-image: url('preguntas/pregunta5.jpg');"><img class="emoji" src="emojis/angry.png"><span class="counter"></span></div>
  <div class="tc wf shock" style="background-image: url('preguntas/pregunta6.jpg');"><img class="emoji" src="emojis/shock.png"><span class="counter"></span></div>
  <script src="jquery.min.js"></script>
  <script src="lodash.min.js"></script>
  <script>
  "use strict";
  var access_token = '627471700756980|cfjwzo9_Wx_y1XVR2Z7db5ndoaY'; // FACEBOOK ACCESS TOKEN
  var postID = '1235833699792726'; // POST ID 
  var refreshTime = 5;
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
    v6 = $('.shock .counter');

  function refreshCounts() {
    var url = 'https://graph.facebook.com/v2.8/?ids=' + postID + '&fields=' + reactions + '&access_token=' + access_token;
    $.getJSON(url, function(res) {
      v1.text(defaultCount + res[postID].reactions_like.summary.total_count);
      v2.text(defaultCount + res[postID].reactions_love.summary.total_count);
      v3.text(defaultCount + res[postID].reactions_sad.summary.total_count);
      v4.text(defaultCount + res[postID].reactions_haha.summary.total_count);
      v5.text(defaultCount + res[postID].reactions_angry.summary.total_count);
      v6.text(defaultCount + res[postID].reactions_wow.summary.total_count);
    });
  }

  $(document).ready(function() {
    setInterval(refreshCounts, refreshTime * 1000);
    refreshCounts();
  });
  </script>
</body>

</html>

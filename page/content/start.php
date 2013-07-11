<?php

$quotes = array(
  'When <b>Gad</b> created earth, he used <a href="http://cantact.me">cantact.me</a>', 
  '<a href="http://cantact.ft/chat.php">Nouveau ! Discutez a l\'ambre des regards...</a>', 
  'Alle <b>kantaktieren</b> sich weltweit!! Willkammen im <b>Kantakte-Netzwerk</b>',
  'The King says: <b>Cantacts</b> are <b>impartants</b> far <b>everyane</b>!',
  'Au commencement, il y eut <a href="http://cantact.fr">cantact.fr</a>',
  'A dead cantact is a bad cantact.',
  'It is a bird? It is a plane? Na, it\'s <b>Super-Cantact</b> in the Sky.',
  '<b>Chuck Norris</b> invented Cantact.me while playing all the main casts in <br> Back to the Future, Star Wars & Pulp Fiction.'
);

shuffle($quotes);
$quote = $quotes[0];

if (isset($_SESSION["last-quote"]) && $_SESSION["last-quote"] == $quote) {

  // Same quote as last time, so take another one
  $quote = $quotes[1];
  $_SESSION["last-quote"] = $quote;

} else {

  // No quote defined, initialize
  $_SESSION["last-quote"] = $quote;
}


?>

<div class="headline">

  <blockquote> <?php echo $quote ?> </blockquote>

  <div class="pure-g">
    <div class="pure-u-1 helper--beta">
      <b><a href="https://coderwall.com/p/petbja" target="_blank">Cantact.me in the news!</a></b>
    </div>
    
    <div class="pure-u-1">
      <h2> - $ - <a href="http://cantactdeck.com">Glabal Premium Netwark</a> - $ -</h2>
    </div>
  
      <div class="pure-u-1-3">
          <a class="btn alpha" href="http://kantakte.de" target="_blank">Deutsch</a>
      </div>
  
      <div class="pure-u-1-3">
          <a class="btn alpha"  href="http://cantact.me" target="_blank">English</a>
      </div>

      <div class="pure-u-1-3">
          <a class="btn alpha"  href="http://cantact.fr" target="_blank">Français</a>
      </div>
  </div>
  
</div>

<!--<div class="pure-g">
    <div class="pure-u-1 helper--alpha">
      <a href="#" id="load-comments" class="btn beta">Load Discussian!</a>
    </div>
</div>-->

<div id="disqus_thread">
</div>

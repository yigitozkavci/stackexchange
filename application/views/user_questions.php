<div class="row hidden-sm" style="margin-top:30px;">
    <div class="col-md-3 col-md-offset-1"  style="font-size: 30px;">Top Questions</div>
    <div class="col-md-5 col-md-offset-1">
      <ul class="nav nav-tabs">
        <li role="presentation" class="active" style="float:right"><a href="#">newest</a></li>
        <li role="presentation" class="active"style="float:right"><a href="#">featured</a></li>
        <li role="presentation" class="active"style="float:right"><a href="#">frequent</a></li>
        <li role="presentation" class="active" style="float:right"><a href="#">votes</a></li>
        <li role="presentation" class="active"style="float:right"><a href="#">active</a></li>
        <li role="presentation" class="active"style="float:right"><a href="#">unanswered</a></li>
      </ul>
    </div>
        <div class="row" style="margin-top:5px;">
    <div class="col-md-9 col-md-offset-1">
   <div class="panel panel-warning">
    <div class="row">

      <div class="col-md-3">
        <div class="btn-group" role="group" aria-label="...">
          <button type="button" class="btn btn-warning">vote</button>
          <button type="button" class="btn btn-warning">answers</button>
          <button type="button" class="btn btn-warning">views</button>
        </div>
        <table class="table">
          <thead><tr><th>0</th><th>0</th><th>0</th></tr></thead>
        </table>
        </div>
      <div class="col-md-8">
        <div class="panel-body">
          <span style="color:blue; font-size:22">How to get the website image/logo with jsoup in Android?</span>
          <br>
          <span>Game Club / Büyak / Compec</span>
          <br>
          <span style="float:right; color:#d8d4df">asked 22 secs ago Mari_Yaguchi 115</span>
        </div>
      </div>
    </div></div></div></div>

<?php 
    $track = 0;
    foreach ($questions as $question) { 
      $track++;
      ?>
    <div class="row" style="margin-top:5px;">
    <div class="col-md-9 col-md-offset-1">
   <div class="panel panel-warning">
    <div class="row">

      <div class="col-md-3">
        <div class="btn-group" role="group" aria-label="...">
          <button type="button" class="btn btn-warning">vote</button>
          <button type="button" class="btn btn-warning">answers</button>
          <button type="button" class="btn btn-warning">views</button>
        </div>
        <table class="table">
          <thead><tr><th>0</th><th>0</th><th>0</th></tr></thead>
        </table>
        </div>
      <div class="col-md-8">
        <div class="panel-body">
          <span style="color:blue; font-size:22"><?php echo $question['title']; ?></span>
          <br>
          <span><?php echo $question['desc']; ?></span>
          <br>
          <span style="float:right; color:#d8d4df">asked 22 secs ago Mari_Yaguchi 115</span>
        </div>
      </div>
    </div></div></div></div>
    <?php } ?>

      
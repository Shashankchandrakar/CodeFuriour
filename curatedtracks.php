<?php
include_once('header.php');
if( isset( $_SESSION['email'] ) ): 
?>
<a href='track1.php'>track1</a>	
<a href='track2.php'>track2</a><br/>

<div class="card tracks-layout">
  <img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">
      Some quick example text to build on the card title
      and make up the bulk of the card's content.
    </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>



<?php else: ?>
	login first
<?php endif; 
include_once('footer.php');
?>
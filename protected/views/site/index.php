<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<p></p>
<?
//echo count($posts);
//print_r($posts);
//.Yii::getPathOfAlias('webroot').'/upload/'.$posts[$i]->img_path.
 function pre_content($string){

      $t = explode(" ",$string);
      for($j = 0;$j<35;$j++){
          $arr[$j] = $t[$j];
      }
      $text = implode(" ", $arr);
      return $text;
      //unset($arr);
}

for($i=count($posts)-1;$i>=0;$i--){
	//echo $posts[$i]->id."&nbsp;".$posts[$i]->title."<br>".$posts[$i]->content."<br><br>";
	$pre_text = pre_content($posts[$i]->content);
	
    if($posts[$i]->img_path != ''){
      echo "<div class='row post'>
        <div class='col s12'>
         <div class='card'>
             <div class='card-image'>
          <img class='responsive-img' src='upload/".$posts[$i]->img_path."'  alt='work desk'>
        <span class='card-title'>".$posts[$i]->title."</span>
       </div>
         <div class='card-content'>
           <p>".$pre_text."...</p>
              </div>
                  <div class='card-action'>
                      <a href=".Post::getUrl($posts[$i]->id) ." >ЧИТАТЬ ДАЛЬШЕ</a>
                  </div>
              </div>
          </div>
      </div><p></p>";
    }else{
      echo "<div class='row post'>
        <div class='col s12'>
         <div class='card'>
             <div class='card-image'>
        <span class='card-title'>".$posts[$i]->title."</span>
       </div>
         <div class='card-content'>
         <h2>".$posts[$i]->title."</h2><br>
           <p>".$pre_text."...</p>
              </div>
                  <div class='card-action'>
                      <a href=".Post::getUrl($posts[$i]->id) ." >ЧИТАТЬ ДАЛЬШЕ</a>
                  </div>
              </div>
          </div>
      </div><p></p>";
    }
  }
    

?>
<p></p>
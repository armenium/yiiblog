<div class="main-content">
      <div class="container">

        <div class="row">
        <?if($model->img_path != ''){
          echo "<div class='col s12'>
            <img class='responsive-img full-width-img' src='upload/".$model->img_path."'  alt='Work Desk'>

            <h1 class='post-title'>".$model->title."</h1>
            <span class='post-date'>". date('d:m:y H:m:s',$model->create_time)."</span>

            <p>".$model->content."</p>";

        
        }else{

            echo "<div class='col s12'>
            <h1 class='post-title'>".$model->title."</h1>
            <span class='post-date'>". date('d:m:y H:m:s',$model->create_time)."</span>

            <p>". $model->content ."</p>";
        }?>
        </div>
      </div>
    </div>
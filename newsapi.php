<?php
/**
*  Generates news template which renders into the browser
*/

$countryCode = $_REQUEST['countryCode'];
$jsonFromAPI = file_get_contents('https://newsapi.org/v2/top-headlines?country='.$countryCode.'&apiKey=11cee38b36244730b3949e4eec4ff1de');
$list = json_decode($jsonFromAPI, true);

if(count($list['articles']) > 0) {
for($i = 0; $i < count($list['articles']); $i++) {
    if($i < 10) {?>

    <div class="item col-xs-4 col-lg-4 list-group-item">
            <div class="thumbnail card">
                <div class="img-event">
                    <img class="group list-group-image img-fluid" src="<?php echo $list['articles'][$i]['urlToImage'];?>" />
                </div>
                <div class="caption card-body">
                    <h5 class="group card-title inner list-group-item-heading">
                        <a href="<?php echo $list['articles'][$i]['url'];?>" title="<?php echo $list['articles'][$i]['title'];?>" target="_blank">
                        <?php echo $list['articles'][$i]['title'];?>                           
                        </a>
                        </h5>
                    <p class="group inner list-group-item-text">
                        <?php echo $list['articles'][$i]['description'];?></p>
                
                </div>
            </div>
        </div>

<?php } } } else {?>
    <h4> No news available with this country</h4>
<?php } ?>

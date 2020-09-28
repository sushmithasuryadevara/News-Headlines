<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>News HeadLines</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="styles.css" rel="stylesheet">

</head>

<body>

<div class="container">
  	<div class="header">
      <a href="#" class="logo">News Headlines</a>
      <div class="header-right">
        <a class="active" href="#home">Home</a>
      </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Country" name="country">
        </div>
        <div class="col-sm-2">
            <button type="submit" id="frmSubmit" class="btn btn-primary">Submit</button>
        </div>
    </div>

    <div class="row view-group">
        <div id="newsList">
            <!-- Append news headlines here -->
        </div>
	</div>
</div>
</body>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    var countryList = {
    "United_States": "us","India": "in","United_Kingdom": "gb","UAE": "ae","Australia": "au","Argentina": "ar","Austria":"at","Belgium":"be","Brazil": "br","Bulgaria": "bg",
	"Canada": "ca","China": "cn","Colombia": "co","Cuba": "cu","Czech_Republic": "cz","Egypt": "eg","France": "fr","Germany": "de","Greece": "gr","Hong_kong": "hk","Hungary": "hu",
	"Indonesia": "id","Ireland": "ie","Israel": "il","Italy": "it","Japan": "jp","Latvia": "lv","Lithuania": "lt","Malaysia": "my","Mexico": "mx","Morocco": "ma","Netherland": "nl",
	"New_zealand": "nz","Nigeria": "ng","Norway": "no","Philippines": "ph","Poland": "pl","Portugal": "pt","Romania": "ro","Russia": "ru","Saudi_Arabia": "sa","Serbia": "rs",
	"Singapore": "sg","Slovakia": "sk","Slovenia": "si","South_Africa": "za","South_Korea": "kr","Sweden": "se","Switzerland": "ch","Taiwan": "tw","Thailand": "th","Turkey": "tr",
	"Ukraine": "ua","Venuzuela": "ve"
    }
	
	/**
	*  Fetching the top headlines from new API
	*/
    $("#frmSubmit").click(function(){
        var countryName = $("input[name='country']").val().replace(/ /g,"_");
        countryName = countryList[countryName];
        if(countryName) {
            $.ajax({
                url: "newsapi.php",
                data: {countryCode : countryName},
                success: function(result){
                $("#newsList").html(result);
            }
            });
        }
    });
</script>
</html>

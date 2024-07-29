<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
	.myarticles{
		background-color: #f3f3f3;
		padding: 10px;
		clear: both;
		float: left;
		border-radius: 10px;
	}
</style>

<script>
  $.getJSON('http://127.0.0.1:8000/api/articles', function(data) {

  	var content 	=	'';
  	$.each(data,function (key,val)
   	{
    	console.log(val);

    	content 	+=	'<div class="col-md-4 greybg"><h2>'+val['title']+'</h2><p>'+val['content']+'</p></div>';
   	});

  	$('.myarticles').html(content);

  });
</script>


</head>
<body>

<div class="container">
	<div class="row">
		<h1>Articles</h1>
		<div class="myarticles">articles</div>
	</div>
</div>


</body>
</html>
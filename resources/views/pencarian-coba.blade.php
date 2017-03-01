<html>
<head>
<title>Coba Pencarian</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12">
		<h1>Pencarian</h1>
		</div>

		<div class="col-xs-12 col-md-12">
			<div class="input-group input-group-sm">
	            <input type="text" class="form-control"  id="keywords" placeholder="Keywords">
	                <span class="input-group-btn">
	                <button id="search" class="btn btn-warning btn-flat" type="button" >Go!</button>
	                </span>
	            </div> 
		</div>
		<div class="col-xs-12 col-md-12">
			<div class="hasil-cari">
				@foreach ($article as $item)
  				<div>
						<h1>{!!$item->title!!}</h1>

    				</div>
  			</div>
  				@endforeach
			</div>
		</div>
	</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>

$('#search').on('click', function(){

  $.ajax({

    url : '/ajax/{rp}',

    type : 'GET',

    data : {

      'keywords' : $('#keywords').val()

    },
    success : function(data) {

      $('.hasil-cari').html(data['view']);

    },

    error : function(xhr, status) {

      console.log(xhr.error + " ERROR STATUS : " + status);

    },

    complete : function() {

      alreadyloading = false;

    }

  });

});

</script>

</body>
</html>
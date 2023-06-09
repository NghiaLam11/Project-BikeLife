<?php 
 $dm='http://localhost/aWork/LamHienNghia - BikeLife/';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="<?php echo $dm; ?>"/>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

	<link rel="stylesheet" type="text/css" href="css/style.css?version=<?php echo time(); ?>" />

	<script src="public/js/jquery.js"></script>
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<title>Document</title>
</head>
<body>
	<div class="container-fluid p-0 bg-transparent overflow-hidden">
		<?php 
		if(@$_GET['p']){
			
			$p=$_GET['p'];
				require "page/header.php";
				require "page/".$p.".php";
				require "page/footer.php";
		} else{

			require "page/header.php";
			require "page/trangchu.php";
			require "page/footer.php";
		}
		?>
	</div>
	</body>

<script>
	
	var owl = $('#hero__carousel');
    owl.owlCarousel({
    loop: true,
    margin: 6,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    items: 1,
});
    $('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.customPrevBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})

	var owl1 = $('#sport__carousel');
    owl1.owlCarousel({
    loop: true,
    margin: 6,
    autoplay: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    items: 5,
    nav: true,
    dots: false,
    responsive : {
    	0 : {
    		items: 2,
    	},
    	768 : {
    		items: 4,
    	},
    	1200 : {
    		items: 5,
    	}
    }

});
    $('.customNextBtn1').click(function() {
    owl1.trigger('next.owl.carousel');
})
// Go to the previous item
$('.customPrevBtn1').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl1.trigger('prev.owl.carousel', [300]);
})



	var owl2 = $('#brand__carousel');
    owl2.owlCarousel({
    loop: true,
    margin: 6,
    autoplay: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    items: 5,
    nav: true,
    dots: false,
    responsive : {
    	0 : {
    		items: 2,
    	},
    	768 : {
    		items: 4,
    	},
    	1200 : {
    		items: 5,
    	}
    }

});
    $('.customNextBtn1').click(function() {
    owl2.trigger('next.owl.carousel');
})
// Go to the previous item
$('.customPrevBtn1').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl2.trigger('prev.owl.carousel', [300]);
})
</script>
</html>
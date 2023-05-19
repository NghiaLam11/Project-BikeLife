<style type="text/css">

	/*Di động*/
	.header{
		z-index: 9999;
	}
	.logo{
		width: 50px;
	}
	.line{
		bottom:-5px;
	}
	.line1{
		bottom:-12px;
	}
	.fs-7{
		font-size: 14px;
	}
	.bg__search{
	    background-color: transparent;
	}
	.bg__blur-fixed{
		background-color: rgba(0, 0, 0, 0.4);
		display: none;
	}
	.search{
		top: -100%;
		transition: all 0.35s linear;
	}
	.menu{
		left: -100%;
		transition: all 0.35s linear;
	}
	.cate{
		top: 10%;
		width: 40%;
		display: none;
	}
	/*Tablet*/
	@media (min-width: 768px){
				html{
					font-size: 85%;
				}
			    .logo{
		       width: 70px;
	            }
	            .bg__search{
	            	background-color: transparent;
	            }
	}
	/*PC*/
	@media (min-width: 1200px){
		       .bg__search{
	            	background-color: rgba(0, 0, 0, 0.1);
	            }
	}
		
	@media (min-width: 1400px){
			html{
					font-size: 85%;
				}
		       .bg__search{
	            	background-color: rgba(0, 0, 0, 0.1);
	            }

	}
</style>

<div class="row header position-fixed start-0 end-0 top-0 px-4 py-3 bg-white" style="z-index: 99999;">
	<div class="search position-fixed start-0 end-0 p-0 bg-white d-flex justify-content-center align-items-center py-3 pt-4 d-lg-none" style="z-index: 9999;">
		<div class="hide__search"><i class="bi bi-caret-left-fill px-2"></i></div>
		<div class="input-group w-75">
 			 <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
 			 <span class="input-group-text" id="basic-addon2">@</span>
		</div>
	</div>	

	<div class="position-fixed top-0 start-0 bottom-0 end-0 bg__blur-fixed" style="z-index: 9999;"></div>

	<div class="menu position-fixed top-0 bottom-0 p-0 bg-white w-50" style="z-index: 9999;">
		<div class="px-4 py-3">
			<div class="d-flex align-items-center fs-1 mb-4">
				<div class="hide__menu"><i class="bi bi-caret-left-fill px-2"></i></div>
				<div>Danh mục</div>
			</div>
			<ul class="list-group fs-2">
 				<li class="list-group-item">A disabled item</li>
  				<li class="list-group-item">A second item</li>
  				<li class="list-group-item">A third item</li>
 				<li class="list-group-item">A fourth item</li>
 				<li class="list-group-item">And a fifth one</li>
			</ul>
		</div>
	</div>

	<div class="cate position-fixed p-0 bg-white" style="z-index: 9999;">
		<div class="px-4 py-3">
			<ul class="list-group fs-2">
 				<li class="list-group-item border-0"><i class="bi bi-box2-heart-fill py-2 pe-4"></i><span>A disabled item</span></li>
  				<li class="list-group-item border-0"><i class="bi bi-box2-heart-fill py-2 pe-4"></i><span>A disabled item</span></li>
  				<li class="list-group-item border-0"><i class="bi bi-box2-heart-fill py-2 pe-4"></i><span>A disabled item</span></li>
  				<li class="list-group-item border-0"><i class="bi bi-box2-heart-fill py-2 pe-4"></i><span>A disabled item</span></li>
  				<li class="list-group-item border-0"><i class="bi bi-box2-heart-fill py-2 pe-4"></i><span>A disabled item</span></li>
  				<li class="list-group-item border-0"><i class="bi bi-box2-heart-fill py-2 pe-4"></i><span>A disabled item</span></li>
  				<li class="list-group-item border-0"><i class="bi bi-box2-heart-fill py-2 pe-4"></i><span>A disabled item</span></li>
  				<li class="list-group-item border-0"><i class="bi bi-box2-heart-fill py-2 pe-4"></i><span>A disabled item</span></li>
  				<li class="list-group-item border-0"><i class="bi bi-box2-heart-fill py-2 pe-4"></i><span>A disabled item</span></li>
  				<li class="list-group-item border-0"><i class="bi bi-box2-heart-fill py-2 pe-4"></i><span>A disabled item</span></li>
  				<li class="list-group-item border-0"><i class="bi bi-box2-heart-fill py-2 pe-4"></i><span>A disabled item</span></li>
			</ul>
		</div>
	</div>

	<div class="w-100 position-absolute top-0 start-0 end-0 bg-info" style="height: 2px;"></div>
	<div class="d-flex justify-content-around align-items-center container">
		<div>
			<img class="logo" src="Image/logo.png" alt="">
		</div>
		<div class="display__menu d-flex flex-column align-items-center position-relative px-3 border-end">
			<a class="text-decoration-none text-dark" href="#">MENU</a>
			<span class="position-absolute line">______</span>
			<span class="position-absolute line1 text-success fw-bold">___</span>
		</div>
		<div class="d-flex align-items-center display__cate">
			<i class="bi bi-list fs-2"></i>
			<a class="text-decoration-none text-dark  d-none d-md-block" href="#">DANH MUC SAN PHAM</a>
		</div>
		<div class="px-2">
			<div class="px-3 py-2 bg__search d-flex align-items-center">
				<input placeholder="Tim kiem san pham" type="text" class="border-0 bg-transparent d-none d-lg-block">
				<i class="bi bi-search display__search"></i>
			</div>
		</div>
		<div class="bg-success p-1 px-2 rounded-pill text-light d-flex align-items-center">
			<i class="bi bi-telephone"></i>
			<span class="fs-7 d-none d-md-block">099 9999 999 Ms My</span>
		</div>
		<div class="d-flex px-2">
			 <i class="bi bi-person-circle px-1"></i>
			<span class=" d-none d-md-block">Thanh vien</span>
			
		</div>
		<div class="pe-1">
			<i class="bi bi-globe"></i>
			<span class=" d-none d-md-block">VN</span>
		</div>
		<div class="border border-success rounded-2 p-1 d-flex align-items-center">
			<i class="bi bi-cart-fill pe-1"></i>
			<span class=" d-none d-lg-block">Gio Hang</span>
			<span class="badge bg-primary mx-1  d-none d-md-block">4</span>
		</div>
	</div>
</div>

<script>
	const bgBlurFixed = document.querySelector('.bg__blur-fixed');
	const display__search = document.querySelector('.display__search');
	const hide__search = document.querySelector('.hide__search');
	const search = document.querySelector('.search');

	display__search.addEventListener('click', () => {
		search.style.top = 0;
	})
	hide__search.addEventListener('click', () => {
		search.style.top = -100 + '%';
	})

	const display__menu = document.querySelector('.display__menu');
	const hide__menu = document.querySelector('.hide__menu');
	const menu = document.querySelector('.menu');

	display__menu.addEventListener('click', () => {
		menu.style.left = 0 + '%';
		bgBlurFixed.style.display = 'block'

	})
	hide__menu.addEventListener('click', () => {
		menu.style.left = -100 + '%';
		bgBlurFixed.style.display = 'none'

	})

	const display__cate = document.querySelector('.display__cate');
	const cate = document.querySelector('.cate');
	var isDisplayCate = false;
	display__cate.addEventListener('click', () => {
		if(isDisplayCate === false) {
			cate.style.display = 'block';
			bgBlurFixed.style.display = 'block'
			isDisplayCate = true;			
		} else {
			cate.style.display = 'none';
			bgBlurFixed.style.display = 'none'
			isDisplayCate = false;			
		}


	})


</script>

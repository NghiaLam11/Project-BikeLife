

	<style type="text/css">
	html{
		font-size: 72.5%;
	}
	.main{
   		margin-top: 3rem;

	}
	.bg__blur{
		background-color:  rgba(39, 39, 45, 0.8);
	}
	.bg__fixed{
		position: fixed;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		z-index: -1;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	.hero{
		overflow: hidden;
		height: 180px;
	}
	.bike__img{
		height: 180px;
	}

	.hide__scroll::-webkit-scrollbar{
 		display: none;
	 }
	.h-cate{
		height: 51px;
	}
	.cate__img{
		width: 40px;
	}
	.cate__border{
		border-left: 4px solid blue;
	}
	.brand__img{
	height: 85px;
	}
	.brand__text{
		background-color: rgba(0, 0, 0, 0.8);
	}
	.brand__blur{
		background-color: rgba(0, 0, 0, 0.6);
	}
	.brand__img:hover > .brand__blur {
		display: none;
			transition:all 0.4s linear;
	}
	.brand__img:hover > p {
		padding: 0.65rem 0 !important;
		background-color: red;
			transition:all 0.2s linear;
	}
	.sport__blur{
		background-color: rgba(0, 0, 0, 0.5);
	}
		.sport__bg{
		background-color: rgba(0, 0, 0, 0.3);
	}

	.sport__img:hover > .sport__blur {	transition:all 0.2s linear;
		background-color: rgba(0, 0, 0, 0.8) !important;
	
	}
	.sport__img:hover > .sport__bg {
		display: none;
			transition:all 0.4s linear;

	}
	.product__card{
      width: 14.5rem;
	}
	.product__img{
		width: 210px !important;
		padding: 1rem;
	}
  @media(min-width: 768px){
		html{
			font-size: 82.5%;
		}
	   .brand__img{
	        height: 111px;
	    }
	   .hero{
		   overflow: hidden;
		   height: 320px;
	 	 }
	   .bike__img{
			height: 320px;
	 	 }
		.product__card{
     		 width: 10rem;
	 	 }
  }
	
	@media(min-width: 1200px){
		html{
			font-size: 92.5%;
		}
	    .brand__img{
	   	   height: 186px;
	    }
	    .hero{
			overflow: hidden;
			height: 480px;
		}
	    .bike__img{
			height: 480px;
		}
		.product__card{
    	 	width: 16rem;
		}

	}
	.owl-theme .owl-nav.disabled+.owl-dots{
		position: absolute;
		bottom: 10%;
		left: calc(50% - (168px / 2));
	}
	@keyframes aniImg {
		from {
			transform: scale(1.0);
		}
		to {
			transform: scale(1.05);
		}
	}
.owl-carousel .owl-nav button.owl-prev {
	position: absolute;
	bottom: 10%;
	left: 5px;
	font-size: 6rem;

}
.owl-carousel .owl-nav button.owl-next {
	position: absolute;
	bottom: 10%;
	right: 5px;
	font-size: 6rem;

}
.owl-carousel .owl-nav button.owl-prev:hover{
		background-color: transparent;
}
.owl-carousel .owl-nav button.owl-next:hover{
		background-color: transparent;
}

/*TEXT*/
.multiline-ellipsis {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 5; /* start showing ellipsis when 3rd line is reached */
}
</style>


<div class="main">
    <img src="Image/bg-mainer2.jpg" class="bg__fixed" />
    <div class="d-flex flex-column align-items-center justify-content-center position-fixed end-0 top-50 bg-transparent mt-5" style="z-index: 9999; font-size: 3rem;" >
    	<i class="bi bi-0-circle-fill m-1 text-primary" style="height: 36px;"></i>
    	<i class="bi bi-0-circle-fill m-1 text-primary" style="height: 36px;"></i>
    	<i class="bi bi-0-circle-fill m-1 text-primary" style="height: 36px;"></i>
    	<i class="bi bi-0-circle-fill m-1 text-primary" style="height: 36px;"></i>
    </div>

    <div class="position-fixed end-0 bottom-0 me-4 mb-4" style=" font-size: 5rem; z-index: 9999;">
    	<i class="bi bi-0-circle-fill text-primary"></i>
    </div>

<!-- ------------------------------- START HERO ----------------------------- -->
    <div class="hero row">
	                <div class="owl-carousel owl-theme owl-loaded owl-drag position-relative p-0" id="hero__carousel">
                    <div class="owl-stage-outer band__img">
                        <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
                            <div class="owl-item p-0 cloned">
                                <div class="item pt-4">
                                    <img src="Image/bikelife_-1.png" class="img-fluid bike__img p-0" alt="...">
                                  
                                </div>
                            </div>
                            <div class="owl-item p-0 cloned">
                                <div class="item pt-4">
                                    <img src="Image/bikelife_-10.png" class="img-fluid bike__img p-0" alt="...">
                                    
                                </div>
                            </div>
                             <div class="owl-item p-0 cloned">
                                <div class="item pt-4">
                                    <img src="Image/bikelife_-10.png" class="img-fluid bike__img p-0" alt="...">
                                    
                                </div>
                            </div> <div class="owl-item p-0 active">
                                <div class="item pt-4">
                                    <img src="Image/bikelife_-10.png" class="img-fluid bike__img p-0" alt="...">
                                    
                                </div>
                            </div> <div class="owl-item p-0">
                                <div class="item pt-4">
                                    <img src="Image/bikelife_-10.png" class="img-fluid bike__img p-0" alt="...">
                                    
                                </div>
                            </div> <div class="owl-item p-0">
                                <div class="item pt-4">
                                    <img src="Image/bikelife_-10.png" class="img-fluid bike__img p-0" alt="...">
                                    
                                </div>
                            </div>
                            <div class="owl-item p-0">
                                <div class="item pt-4">
                                    <img src="Image/bikelife_-8.png" class="img-fluid bike__img p-0" alt="...">
                                    
                                </div>
                            </div>
                        </div>
                         <div class="owl-nav disabled">
                        </div>
                    </div>
                     <button class="customPrevBtn position-absolute start-0 top-50 border-0 bg-transparent fs-1 fw-bolder ps-5">
                        <</button> <button class="customNextBtn position-absolute end-0 top-50 border-0 bg-transparent fs-1 fw-bolder pe-5">>
                    </button>
                </div>
    </div>
<!-- ------------------------------- END HERO -------------------------------- -->

<!-- ------------------------------- START CATEGORY ----------------------------- -->
<div class="category row  py-3 px-4 px-lg-5 text-light bg__blur">
	<div class="d-flex justify-content-between align-items-center py-1">
		<h5 class="fw-bold cate__border px-2">DANH MUC SAN PHAM</h2>
			<a class="text-decoration-none text-success fw-bold" href="#">Xem them ></a>
	</div>
	
	<div class="d-flex overflow-scroll gap-2 hide__scroll ps-2">
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/16012020_1101257.png" alt="">
			<span>Dịch vụ</span>
		</div>
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/16592020_1059181.png" alt="">
			<span>Xe Đạp & Sườn Xe</span>
		</div>
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/18192020_121934Gel.png" alt="">
			<span>Thuc Pham Chuc Nang</span>
		</div>
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/16012020_1101257.png" alt="">
			<span>Dịch vụ</span>
		</div>
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/16592020_1059181.png" alt="">
			<span>Xe Đạp & Sườn Xe</span>
		</div>
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/18192020_121934Gel.png" alt="">
			<span>Thuc Pham Chuc Nang</span>
		</div><div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/16012020_1101257.png" alt="">
			<span>Dịch vụ</span>
		</div>
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/16592020_1059181.png" alt="">
			<span>Xe Đạp & Sườn Xe</span>
		</div>
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/18192020_121934Gel.png" alt="">
			<span>Thuc Pham Chuc Nang</span>
		</div><div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/16012020_1101257.png" alt="">
			<span>Dịch vụ</span>
		</div>
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/16592020_1059181.png" alt="">
			<span>Xe Đạp & Sườn Xe</span>
		</div>
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/18192020_121934Gel.png" alt="">
			<span>Thuc Pham Chuc Nang</span>
		</div><div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/16012020_1101257.png" alt="">
			<span>Dịch vụ</span>
		</div>
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/16592020_1059181.png" alt="">
			<span>Xe Đạp & Sườn Xe</span>
		</div>
		<div class="d-flex align-items-center py-1 px-2 border-dark border rounded-2 bg-transparent h-cate col-auto">
			<img class="cate__img" src="Image/18192020_121934Gel.png" alt="">
			<span>Thuc Pham Chuc Nang</span>
		</div>
	</div>
</div>
<!-- ------------------------------- END CATEGORY ----------------------------- -->

<!-- ------------------------------- START BRAND ----------------------------- -->
 <div class="brand row py-3 px-4 px-lg-5 text-light bg__blur">
	 <div class="d-flex justify-content-between align-items-center py-1">
		<h5 class="fw-bold cate__border px-2">THUONG HIEU</h2>
			<a class="text-decoration-none text-success fw-bold" href="#">Xem them ></a>
	 </div>
	 <!-- --------------------------- DESKTOP UP -------------------------------- -->
	 <div class="d-md-flex flex-wrap justify-content-center d-none">
		<div class="col-4 p-3 pb-1">
			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/30022019_040224Logo 720.jpg'); background-size: cover; background-repeat: no-repeat;">
				<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
			 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		    </div>
		    <p class="text-center py-1">Xem website Thuong hieu ></p>
		</div>
		<div class="col-4 p-3 pb-1">
			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/30022019_040224Logo 720.jpg'); background-size: cover; background-repeat: no-repeat;">
				<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
			 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		    </div>
		    <p class="text-center py-1">Xem website Thuong hieu ></p>
		</div>
		<div class="col-4 p-3 pb-1">
			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/30022019_040224Logo 720.jpg'); background-size: cover; background-repeat: no-repeat;">
				<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
			 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		    </div>
		    <p class="text-center py-1">Xem website Thuong hieu ></p>
		</div>
		<div class="col-4 p-3 pb-1">
			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/31362019_033658Logo Vision.jpg'); background-size: cover; background-repeat: no-repeat;">
				<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
			 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		    </div>
		    <p class="text-center py-1">Xem website Thuong hieu ></p>
		</div><div class="col-4 p-3 pb-1">
			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/31242019_032435Logo Argon18.jpg'); background-size: cover; background-repeat: no-repeat;">
				<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
			 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		    </div>
		    <p class="text-center py-1">Xem website Thuong hieu ></p>
		</div>
		<div class="col-4 p-3 pb-1">
			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/31362019_033658Logo Vision.jpg'); background-size: cover; background-repeat: no-repeat;">
				<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
			 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		    </div>
		    <p class="text-center py-1">Xem website Thuong hieu ></p>
		</div>
          <div class="col-4 p-3 pb-1">
			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/31362019_033658Logo Vision.jpg'); background-size: cover; background-repeat: no-repeat;">
				<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
			 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		    </div>
		    <p class="text-center py-1">Xem website Thuong hieu ></p>
		</div>
		<div class="col-4 p-3 pb-1">
			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/30012019_040130Logo FSA.jpg'); background-size: cover; background-repeat: no-repeat;">
				<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
			 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		    </div>
		    <p class="text-center py-1">Xem website Thuong hieu ></p>
		</div><div class="col-4 p-3 pb-1">
			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/30022019_040224Logo 720.jpg'); background-size: cover; background-repeat: no-repeat;">
				<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
			 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		    </div>
		    <p class="text-center py-1">Xem website Thuong hieu ></p>
		</div>	
	 </div>

	 <!-- ---------------------------MOBILE -------------------------------- -->
	 <div class="d-block d-md-none">
	 	<div class="owl-carousel owl-theme position-relative" id="brand__carousel" >
    		<div class="item">
    			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/30022019_040224Logo 720.jpg'); background-size: cover; background-repeat: no-repeat;">
					<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
					 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		   		</div>
		        <p class="text-center py-1">Xem website Thuong hieu ></p>
    		</div>

    		<div class="item">
    			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/31362019_033658Logo Vision.jpg'); background-size: cover; background-repeat: no-repeat;">
					<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
					 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		   		</div>
		        <p class="text-center py-1">Xem website Thuong hieu ></p>
    		</div>

    		<div class="item">
    			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/30012019_040130Logo FSA.jpg'); background-size: cover; background-repeat: no-repeat;">
					<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
					 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		   		</div>
		        <p class="text-center py-1">Xem website Thuong hieu ></p>
    		</div>

    		<div class="item">
    			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/30022019_040224Logo 720.jpg'); background-size: cover; background-repeat: no-repeat;">
					<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
					 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		   		</div>
		        <p class="text-center py-1">Xem website Thuong hieu ></p>
    		</div>

    		<div class="item">
    			<div class="brand__img d-flex align-items-end justify-content-center position-relative" style="background-image: url('Image/30022019_040224Logo 720.jpg'); background-size: cover; background-repeat: no-repeat;">
					<div class="brand__blur position-absolute top-0 start-0 end-0 bottom-0"></div>
					 <p class="m-0 brand__text position-absolute bottom-0 start-0 end-0 py-2 text-center">Xem sản phẩm Bikelife</p>
		   		</div>
		        <p class="text-center py-1">Xem website Thuong hieu ></p>
    		</div>
 		</div>
	 </div>
 </div>
<!-- ------------------------------- END BRAND ----------------------------- -->

<!-- ------------------------------- START SPORT ----------------------------- -->
<div class="sport row  py-3 px-4 px-lg-5 text-light bg__blur">
	<div class="d-flex justify-content-between align-items-center py-1">
		<h5 class="fw-bold cate__border px-2">MÔN THỂ THAO</h2>
			<a class="text-decoration-none text-success fw-bold" href="#">Xem them ></a>
	</div>

 <div class="owl-carousel owl-theme position-relative" id="sport__carousel" >
    <div class="item"><div class="position-relative sport__img"><div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08172019_041755road.jpg" alt=""><p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Chay Bo</p>
    </div></div>
    <div class="item"><div class="position-relative sport__img"><div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08122019_041208run.jpg" alt=""><p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Chay Bo</p>
    </div></div>
    <div class="item"><div class="position-relative sport__img"><div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08072019_040715Tri.jpg" alt=""><p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Boi Loi</p>
    </div></div>
    <div class="item"><div class="position-relative sport__img"><div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08092019_040914trail.jpg" alt=""><p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Boi Loi</p>
    </div></div>
    <div class="item"><div class="position-relative sport__img"><div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08172019_041755road.jpg" alt=""><p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Chay Bo</p>
    </div></div>
    <div class="item"><div class="position-relative sport__img"><div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08172019_041755road.jpg" alt=""><p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Chay Bo</p>
    </div></div>
    <div class="item"><div class="position-relative sport__img"><div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08172019_041755road.jpg" alt=""><p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Xe Dap Duong Truong</p>
    </div></div>
    <div class="item"><div class="position-relative sport__img"><div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08172019_041755road.jpg" alt=""><p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Xe Dap Duong Truong</p>
    </div></div>
    <div class="item"><div class="position-relative sport__img"><div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08172019_041755road.jpg" alt=""><p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Chay Bo</p>
    </div></div>
    <div class="item"><div class="position-relative sport__img"><div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08172019_041755road.jpg" alt=""><p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Chay Bo</p>
    </div></div>
    <div class="item"><div class="position-relative sport__img"><div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08172019_041755road.jpg" alt=""><p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Chay Bo</p>
    </div>></div>
    <div class="item">
    	<div class="position-relative sport__img">
    		<div class="position-absolute top-0 start-0 end-0 bottom-0 sport__bg"></div>
    	<img src="Image/08172019_041755road.jpg" alt="">
    	<p class="position-absolute bottom-0 start-0 end-0 m-0 text-center sport__blur p-1">Chay Bo</p>
       </div>
   </div>
  </div>
</div>
<!-- ------------------------------- END SPORT ----------------------------- -->

<!-- ------------------------------- START ITEM ----------------------------- -->
 <div class="product row  py-3 px-4 px-lg-5 bg-white">
     <div class="d-flex justify-content-between align-items-center py-3">
		<h5 class="fw-bold cate__border px-2">SẢN PHẨM GIẢM GIÁ <span class="text-secondary">SẢN PHẨM MỚI</span> </h2>
	    <a class="text-decoration-none text-success fw-bold" href="#">Xem them ></a>
	</div>

	<div class="d-flex justify-content-center flex-wrap">
		<div class="card p-2 position-relative product__card">
           <img style="height: 210px; object-fit: contain;" src="Image/bikelife_-banh-xe-thang-dia-roval-clx32_thumb.jpg" class="card-img-top" alt="...">
           <div class="card-body text-center">
             <h5 class="card-title text-truncate">Banh Xe Thang Rim Royal Cao Cap</h5>
			<p class="card-text">Ma so: B13-51</p>
              <div class=" card-text d-flex align-items-center justify-content-center"><p class="text-danger">30,000,000d</p> <p class=" text-truncate text-decoration-line-through"> 33,000,000d</p></div>
          </div>
          <div class="position-absolute top-0 start-0 text-light">
          	<span class="bg-info p-1 px-2">-9%</span>
          	<p class="bg-info p-1 px-2 mt-2">CS-TK-11</p>
          </div>
       </div>
       <div class="card p-2 position-relative product__card">
           <img style="height: 210px; object-fit: contain;" src="Image/bikelife_ruot-xe-maxxis-700x2332-48mm_thumb_17432021_014355.jpg" class="card-img-top" alt="...">
           <div class="card-body text-center">
             <h5 class="card-title text-truncate">Banh Xe Thang Rim Royal Cao Cap</h5>
			<p class="card-text">Ma so: B13-51</p>
              <div class=" card-text d-flex align-items-center justify-content-center"><p class="text-danger">30,000,000d</p> <p class=" text-truncate text-decoration-line-through"> 33,000,000d</p></div>
          </div>
          <div class="position-absolute top-0 start-0 text-light">
          	<span class="bg-info p-1 px-2">-9%</span>
          	<p class="bg-info p-1 px-2 mt-2">CS-TK-11</p>
          </div>
       </div>
       <div class="card p-2 position-relative product__card">
           <img style="height: 210px; object-fit: contain;" src="Image/20352020_123510Trang phuc va giay 1.png" class="card-img-top" alt="...">
           <div class="card-body text-center">
             <h5 class="card-title text-truncate">Banh Xe Thang Rim Royal Cao Cap</h5>
			<p class="card-text">Ma so: B13-51</p>
              <div class=" card-text d-flex align-items-center justify-content-center"><p class="text-danger">30,000,000d</p> <p class=" text-truncate text-decoration-line-through"> 33,000,000d</p></div>
          </div>
          <div class="position-absolute top-0 start-0 text-light">
          	<span class="bg-info p-1 px-2">-9%</span>
          	<p class="bg-info p-1 px-2 mt-2">CS-TK-11</p>
          </div>
       </div>
       <div class="card p-2 position-relative product__card">
           <img style="height: 210px; object-fit: contain;" src="Image/bikelife_-lip-xe-dap-token-11s_thumb.jpg" class="card-img-top" alt="...">
           <div class="card-body text-center">
             <h5 class="card-title text-truncate">Banh Xe Thang Rim Royal Cao Cap</h5>
			<p class="card-text">Ma so: B13-51</p>
              <div class=" card-text d-flex align-items-center justify-content-center"><p class="text-danger">30,000,000d</p> <p class=" text-truncate text-decoration-line-through" > 33,000,000d</p></div>
          </div>
          <div class="position-absolute top-0 start-0 text-light">
          	<span class="bg-info p-1 px-2">-9%</span>
          	<p class="bg-info p-1 px-2 mt-2">CS-TK-11</p>
          </div>
       </div>
       <div class="card p-2 position-relative product__card">
           <img style="height: 210px; object-fit: contain;" src="Image/bikelife_-banh-xe-thang-dia-roval-clx32_thumb.jpg" class="card-img-top" alt="...">
           <div class="card-body text-center">
             <h5 class="card-title text-truncate">Banh Xe Thang Rim Royal Cao Cap</h5>
			<p class="card-text">Ma so: B13-51</p>
              <div class=" card-text d-flex align-items-center justify-content-center"><p class="text-danger">30,000,000d</p> <p class=" text-truncate text-decoration-line-through"> 33,000,000d</p></div>
          </div> 
          <div class="position-absolute top-0 start-0 text-light">
          	<span class="bg-info p-1 px-2">-9%</span>
          	<p class="bg-info p-1 px-2 mt-2">CS-TK-11</p>
          </div>
       </div>


       <div class="card p-2 position-relative product__card">
           <img style="height: 210px; object-fit: contain;" src="Image/bikelife_-banh-xe-thang-dia-roval-clx32_thumb.jpg" class="card-img-top" alt="...">
           <div class="card-body text-center">
             <h5 class="card-title text-truncate">Banh Xe Thang Rim Royal Cao Cap</h5>
			<p class="card-text">Ma so: B13-51</p>
              <div class=" card-text d-flex align-items-center justify-content-center"><p class="text-danger">30,000,000d</p> <p class=" text-truncate text-decoration-line-through"> 33,000,000d</p></div>
          </div>
          <div class="position-absolute top-0 start-0 text-light">
          	<span class="bg-info p-1 px-2">-9%</span>
          	<p class="bg-info p-1 px-2 mt-2">CS-TK-11</p>
          </div>
       </div>
       <div class="card p-2 position-relative product__card">
           <img style="height: 210px; object-fit: contain;" src="Image/bikelife_ruot-xe-maxxis-700x2332-48mm_thumb_17432021_014355.jpg" class="card-img-top" alt="...">
           <div class="card-body text-center">
             <h5 class="card-title text-truncate">Banh Xe Thang Rim Royal Cao Cap</h5>
			<p class="card-text">Ma so: B13-51</p>
              <div class=" card-text d-flex align-items-center justify-content-center"><p class="text-danger">30,000,000d</p> <p class=" text-truncate text-decoration-line-through"> 33,000,000d</p></div>
          </div>
          <div class="position-absolute top-0 start-0 text-light">
          	<span class="bg-info p-1 px-2">-9%</span>
          	<p class="bg-info p-1 px-2 mt-2">CS-TK-11</p>
          </div>
       </div>
       <div class="card p-2 position-relative product__card">
           <img style="height: 210px; object-fit: contain;" src="Image/20352020_123510Trang phuc va giay 1.png" class="card-img-top" alt="...">
           <div class="card-body text-center">
             <h5 class="card-title text-truncate">Banh Xe Thang Rim Royal Cao Cap</h5>
			<p class="card-text">Ma so: B13-51</p>
              <div class=" card-text d-flex align-items-center justify-content-center"><p class="text-danger">30,000,000d</p> <p class=" text-truncate text-decoration-line-through"> 33,000,000d</p></div>
          </div>
          <div class="position-absolute top-0 start-0 text-light">
          	<span class="bg-info p-1 px-2">-9%</span>
          	<p class="bg-info p-1 px-2 mt-2">CS-TK-11</p>
          </div> 
          <div class="position-absolute start-0 end-0 text-center py-2" style="top: 25%; background-color: rgba(0, 0, 0, 0.4);">
          	<h3 class="text-light">SOLD OUT</h3>
          </div>
       </div>
       <div class="card p-2 position-relative product__card">
           <img style="height: 210px; object-fit: contain;" src="Image/bikelife_-lip-xe-dap-token-11s_thumb.jpg" class="card-img-top" alt="...">
           <div class="card-body text-center">
             <h5 class="card-title text-truncate">Banh Xe Thang Rim Royal Cao Cap</h5>
			<p class="card-text">Ma so: B13-51</p>
              <div class=" card-text d-flex align-items-center justify-content-center"><p class="text-danger">30,000,000d</p> <p class=" text-truncate text-decoration-line-through" > 33,000,000d</p></div>
          </div>
          <div class="position-absolute top-0 start-0 text-light">
          	<span class="bg-info p-1 px-2">-9%</span>
          	<p class="bg-info p-1 px-2 mt-2">CS-TK-11</p>
          </div>
         
       </div>
       <div class="card p-2 position-relative product__card">
           <img style="height: 210px; object-fit: contain;" src="Image/bikelife_-banh-xe-thang-dia-roval-clx32_thumb.jpg" class="card-img-top" alt="...">
           <div class="card-body text-center">
             <h5 class="card-title text-truncate">Banh Xe Thang Rim Royal Cao Cap</h5>
			<p class="card-text">Ma so: B13-51</p>
              <div class=" card-text d-flex align-items-center justify-content-center"><p class="text-danger">30,000,000d</p> <p class=" text-truncate text-decoration-line-through"> 33,000,000d</p></div>
          </div> 
          <div class="position-absolute top-0 start-0 text-light">
          	<span class="bg-info p-1 px-2">-9%</span>
          	<p class="bg-info p-1 px-2 mt-2">CS-TK-11</p>
          </div>
       </div>


	</div>
	<div class="text-center mt-2"><button class="btn btn-info btn-lg text-light">Xem them <i class="bi bi-arrow-down"></i></button></div>
 </div>
<!-- ------------------------------- END ITEM ----------------------------- -->

</div>
<!-- header-section-starts -->
	<div class="header ">
		<div class="header-top-strip navbar-fixed-top">
			<div class="container">
				<div class="row">
				
				<div class="header50 col-xs-6 col-sm-3 col-md-3">
				<div class="header-top-left">
					
					<div class="navbar-header">
						
						<div class="logo">
						<h1><a href="index.php"><span>E</span>-Shop</a></h1>			
						</div>
					</div>
				</div>
				</div>
								
				<?php
				//formula total belanja dan total item
				$total_belanja = 0;
				$total_item = 0;
				if (isset($_SESSION['items'])) {
				
				foreach ($_SESSION['items'] as $key => $val) {
				
				require_once ("koneksi.php");
				$sql= "select harga from tb_produk where id_produk = '$key'";
				$hasil = mysqli_query($koneksi, $sql);
				//$query = mysql_query($koneksi, "select * from tb_produk where id_produk = '$key'");
				$data = mysqli_fetch_array($hasil);
			
				if($data === FALSE) { 
					die(mysql_error()); // TODO: better error handling
				}
				
				$jumlah_harga = $data['harga'] * $val;
				$total_belanja += $jumlah_harga;
				$total_item += $val;
				}
				}
				?>
				
				<div class="header50 col-xs-6 col-sm-4 col-sm-push-5 col-md-3 col-md-push-6">
				<div class="header-right">
						
						<div class="cart box_1">
								
							
							<?php if (isset($_SESSION['nama'])) { ?>
								<a href="login_daftar.php" class="login-daftar">Hi, <?php echo $_SESSION['nama']?></a>								
							<?php } else{ ?>							
								<a href="login_daftar.php" class="login-daftar">Login / Daftar <span class="glyphicon glyphicon-user"></span></a>
							<?php } ?>			
								
								<a href="checkout.php" class="login-daftar">
								<?php echo $total_belanja; ?> ( <?php echo $total_item; ?> ) <span class="glyphicon glyphicon-shopping-cart"></span>
								</a>
								
							<!--<div class="clearfix"> </div> -->
						</div>
				</div>
				</div>
				
				<div class="col-sm-5 col-sm-pull-4 col-md-6 col-md-pull-3 hidden-xs">
				<div class="header-center">
					<div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="  search-query form-control" placeholder="Search" />
                            <span class="input-group-btn">
                                <button class="btn btn-warning" type="button">
                                    <span class=" glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
				</div>
				</div>
				
				
				<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- header-section-ends -->
<div class="banner-top">
	<div class="container">
	<!--/.navbar-->
	<nav class="navbar navbar-default" role="navigation">
		<!--navbar-header-->
		
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
		</button>
		
		<!--<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="logo">
				<h1><a href="index.php"><span>E</span>-Shop</a></h1>
					
			</div>
		</div>-->
		<!--navbar-header-end-->
	
	    <!--/.navbar-collapse-->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
				<li><a href="http://localhost/web/">Home</a></li>
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="products.html">New In Clothing</a></li>
						            <li><a href="products.html">New In Bags</a></li>
						            <li><a href="products.html">New In Shoes</a></li>
						            <li><a href="products.html">New In Watches</a></li>
						            <li><a href="products.html">New In Grooming</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="products.html">Polos & Tees</a></li>
						            <li><a href="products.html">Casual Shirts</a></li>
						            <li><a href="products.html">Casual Trousers</a></li>
						            <li><a href="products.html">Jeans</a></li>
						            <li><a href="products.html">Shorts & 3/4th</a></li>
						            <li><a href="products.html">Formal Shirts</a></li>
						            <li><a href="products.html">Formal Trousers</a></li>
						            <li><a href="products.html">Suits & Blazers</a></li>
						            <li><a href="products.html">Track Wear</a></li>
						            <li><a href="products.html">Inner Wear</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>WATCHES</h6>
						            <li><a href="products.html">Analog</a></li>
						            <li><a href="products.html">Chronograph</a></li>
						            <li><a href="products.html">Digital</a></li>
						            <li><a href="products.html">Watch Cases</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">women <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="products.html">New In Clothing</a></li>
						            <li><a href="products.html">New In Bags</a></li>
						            <li><a href="products.html">New In Shoes</a></li>
						            <li><a href="products.html">New In Watches</a></li>
						            <li><a href="products.html">New In Beauty</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="products.html">Polos & Tees</a></li>
						            <li><a href="products.html">Casual Shirts</a></li>
						            <li><a href="products.html">Casual Trousers</a></li>
						            <li><a href="products.html">Jeans</a></li>
						            <li><a href="products.html">Shorts & 3/4th</a></li>
						            <li><a href="products.html">Formal Shirts</a></li>
						            <li><a href="products.html">Formal Trousers</a></li>
						            <li><a href="products.html">Suits & Blazers</a></li>
						            <li><a href="products.html">Track Wear</a></li>
						            <li><a href="products.html">Inner Wear</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>WATCHES</h6>
						            <li><a href="products.html">Analog</a></li>
						            <li><a href="products.html">Chronograph</a></li>
						            <li><a href="products.html">Digital</a></li>
						            <li><a href="products.html">Watch Cases</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
				<li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">kids <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-2">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="products.html">New In Boys Clothing</a></li>
						            <li><a href="products.html">New In Girls Clothing</a></li>
						            <li><a href="products.html">New In Boys Shoes</a></li>
						            <li><a href="products.html">New In Girls Shoes</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-6">
					             <ul class="multi-column-dropdown">
									<h6>ACCESSORIES</h6>
						            <li><a href="products.html">Bags</a></li>
						            <li><a href="products.html">Watches</a></li>
						            <li><a href="products.html">Sun Glasses</a></li>
						            <li><a href="products.html">Jewellery</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
				<li><a href="typography.html">TYPO</a></li>
				<li><a href="contact.html">CONTACT</a></li>
	        </ul>
	    </div>
	    <!--/.navbar-collapse-end-->
	</nav>
	<!--/.navbar-end-->
	</div>
</div>


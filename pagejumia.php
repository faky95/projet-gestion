<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JUMIA ESSAI</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

</head>
<body>
	<?php define("IMG","images/") ; ?>
	<div class="container">
		<header>
			<div class="row">
				<div class="col-4 "style="color:gray;font-size:12px;">
					En partenariat avec
					<img src="<?php echo IMG?>axa.png">  & &nbsp
					<img src="<?php echo IMG?>tigor.png">
				</div>
				<div class="col-6 ">
					<img src="<?php echo IMG?>jumia_logo_small.png" style="width: 60px;">
					<ul style="display:flex;list-style:none;margin-top: -20px;justify-content: space-between;margin-left: 100px;font-size: 12px;color: gray;">
						<a href="#" style="margin-left:10px;"><li>TRAVEL</li> </a>
						<a href="#" style="margin-left:10px;"><li>FOOD</li> </a>
						<a href="#" style="margin-left:10px;"><li>HOUSE</li> </a>
						<a href="#" style="margin-left:10px;"><li>DEALS</li> </a>
						<a href="#"><li>JOBS</li> </a>
					</ul>
				</div>
				
			</div>
			<div class="row" style="margin-top:20px;display:flex;">
				<div class="col-3 " style="display:flex;margin-top: -20px;" >
					<img src="<?php echo IMG?>jumia_logo_small.png"  >
				</div>
				<div class="col-5 ">
					<input class="col-12" type="text"placeholder="Chercher un produit, une marque ou une catégorie...">
				</div>
				<div class="col-2"style="margin-left:-30px;">
					<input class="col-12" type="button" value="CHERCHER" style="background-color:orange;color:white;">
				</div>
				<div class="col-2 " >
					<ul  style="display:flex;list-style: none;">
						<a href="#" style="margin-left: -40px;"> <li><p style="color:gray;">Besoin D'aide?</p> </li> </a>
						<a href="#"> <li><p style="color:gray;">Votre Compte</p> </li> </a>
						<a href="#"> <li> <img src="<?php echo IMG?>panier.png"></li> </a>
					</ul>
				</div>
				
			</div>
		</header>
		<section>
			<div class="row">
				<div class="col-2 ">

					<ul style="list-style:none;">
 						<img src="<?php echo IMG?>service.png" style="margin-left: -50px;"> 
 						<li style="margin-top: -20px;margin-left: -20px;font-size: 10px;"> 
 							<a href="" style="color:black; text-decoration: none;"> NOS SERVICES</a>
 							

 						 </li>
 						<img src="<?php echo IMG?>femme.png" style="margin-left: -50px;margin-top: 10px;"> 
 					<li style="margin-top:-20px;margin-left:-20px;font-size: 10px;" ><a href="" style="color:black; text-decoration: none;"> MODE FEMME</a></li><br>
 					<img src="<?php echo IMG?>hom.png" style="margin-left:-50px;margin-top: -22px;"> 
 					<li style="margin-top:-30px;margin-left:-20px;font-size: 10px;"><a href="" style="color:black; text-decoration: none;">MODE HOMME</a></li><br>
 					<img src="<?php echo IMG?>sante.png" style="margin-left: -50px;margin-top: -30px;"> 
 					<li style="margin-top:-35px;margin-left:-20px;font-size: 10px;"><a href="" style="color:black; text-decoration: none;">BEAUTÉ, HYGIENE & SANTÉ</a></li><br>
 					<img src="<?php echo IMG?>bb.png" style="margin-left:-50px;margin-top: -22px;"> 
 					<li style="margin-top:-30px;margin-left:-20px;font-size: 10px;"><a href="" style="color:black; text-decoration: none;">BEBE, ENFANT & JOUETS</a></li><br>
 					<img src="<?php echo IMG?>phone.png" style="margin-left:-50px;margin-top: -22px;"> 
 					<li style="margin-top:-30px;margin-left:-20px;font-size: 10px;"><a href="" style="color:black; text-decoration: none;">TELEPHONE & TABLETTE</a></li><br>
 					<img src="<?php echo IMG?>info.png" style="margin-left:-50px;margin-top: -22px;"> 
 					<li style="margin-top:-30px;margin-left:-20px;font-size: 10px;"><a href="" style="color:black; text-decoration: none;">INFORMATIQUE</a></li><br>
 					<img src="<?php echo IMG?>elec.png" style="margin-left:-50px;margin-top: -22px;">
 					<li style="margin-top:-30px;margin-left:-20px;font-size: 10px;"><a href="" style="color:black; text-decoration: none;">ELECTROMENAGER</a></li><br>
 					<img src="<?php echo IMG?>tv.png" style="margin-left:-50px;margin-top: -22px;">
 					<li style="margin-top:-30px;margin-left:-20px;font-size: 10px;"><a href="" style="color:black; text-decoration: none;">TV, PHOTO & AUDIO</a></li><br>
 					<img src="<?php echo IMG?>home.png" style="margin-left:-50px;margin-top: -22px;">
 					<li style="margin-top:-30px;margin-left:-20px;font-size: 10px;"><a href="" style="color:black; text-decoration: none;">MAISON</a></li><br>
 					<img src="<?php echo IMG?>sport.png" style="margin-left:-50px;margin-top: -22px;">
 					<li style="margin-top:-30px;margin-left:-20px;font-size: 10px;"><a href="" style="color:black; text-decoration: none;">SPORT & LOISIR</a></li><br>
 					<img src="<?php echo IMG?>autre.png" style="margin-left:-50px;margin-top: -22px;">
 					<li style="margin-top:-30px;margin-left:-20px;font-size: 10px;"><a href="" style="color:black; text-decoration: none;">AUTRES CATEGORIES</a></li><br>
				 </ul>
				 </div>
				<div style="z-index: 1; background-color: white; position:absolute; margin-left: 200px;height: 400px;">
	 							<ul style="list-style: none;">
	 								<a href=""><li style="font-size: 15px;margin-left: -50px;color:black;">NOS SERVICES</li></a>
	 								<li style="font-size: 12px;margin-left: -30px;">Jumia Food</li>
	 								<li style="font-size: 12px;margin-left: -30px;">Jumia Travel</li>
	 								<li style="font-size: 12px;margin-left: -30px;">Jumia House</li>
	 								<li style="font-size: 12px;margin-left: -30px;">Jumia Deals</li>
	 								<li style="font-size: 12px;margin-left: -30px;">Jumia Jobs</li>
	 							</ul>
 							</div>
 							
				<div class="col-8 " style="height: 400px;">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="<?php echo IMG?>1.jpg" alt="First slide" style="height: 400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="<?php echo IMG?>2.jpg" alt="Second slide" style="height: 400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="<?php echo IMG?>3.jpg" alt="Third slide" style="height: 400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="<?php echo IMG?>4.jpg" alt="Second slide" style="height: 400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="<?php echo IMG?>maison.jpg" alt="Second slide" style="height: 400px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
				</div>
				<div class="col-2 bg-secondary" style="margin-bottom: 50px;">a</div>
				
			</div>
			<article>
				<div class="row" style="margin-top: -10px;">
					<div class="col-2 ">
						<img src="<?php echo IMG?>left.jpg">
					</div>
				<div class="col-8 ">

							 <div class="row">
 <ul style="list-style:none;">
 <li><a href=""><img src="images/motorola_d6937099964a67d16bf28330a63d84b7.jpg" alt=""></a></li>
 <li><a href=""><img src="images/lenovo_1c741282a8562be2fb62b7ad12a59ce0.jpg" alt=""></a></li>
 <li><a href=""><img src="images/topicrem_3195e8979e205138e5589540a6e58ddd.jpg" alt=""></a></li>
 </ul>
 <ul style="list-style:none;">
 <li><a href=""><img src="images/binatone_ed588b479c393cea546bf8ff7beef154.jpg" alt=""></a></li>
 <li><a href=""><img src="images/infinix_40c05905e74f85bc93f41066e259bfc7.jpg" alt=""></a></li>
 <li><a href=""><img src="images/black-up_67bd2df2b926ddcd72f090fcba82ed79.jpg" alt=""></a></li>
 </ul>
 <ul style="list-style:none;">
 <li><a href=""><img src="images/fero_3f1f94ae6f7f777ab1b508f8d330b096.jpg" alt=""></a></li>
 <li><a href=""><img src="images/astech_4951596919ccb38bb7fec6d431909dbd.jpg" alt=""></a></li>
 <li><a href=""><img src="images/canon.jpg" alt=""></a></li>
 </ul>
 <ul style="list-style:none;">
 <li><a href=""><img src="images/hp_42ee85b5f3ac14b5367b2a998a8bcabc.jpg" alt=""></a></li>
 <li><a href=""><img src="images/invens_cd41c41c3a0eaf1007a9fe74eae1f536.jpg" alt=""></a></li>
 <li><a href=""><img src="images/tecno_5749c70bee535d3cf3f8b97a36ba6d6c.jpg" alt=""></a></li>
 </ul>
 <ul style="list-style:none;">
 <li><a href=""><img src="images/samsung_42c14dd5a48f80af911551d65dc2ca28.jpg" alt=""></a></li>
 <li><a href=""><img src="images/apple.jpg" alt=""></a></li>
 <li><a href=""><img src="images/sharp_7d18fe3e5dec9891b694d7c39f729d1a.jpg" alt=""></a></li>
 </ul>

 </div>

				</div>
					<div class="col-2 ">
						<img src="<?php echo IMG?>droite.jpg">
					</div>
					
				</div>

			</article>
			<article>
				<div class="row" style="margin-top: 30px;">
					<div class="col-3 ">
						<p style="color:orange;font-size: 9.5px; font-family:Arial;margin-left: -10px;">INSCRIVEZ-VOUS A LA NEWSLETTER JUMIA SENEGAL!</p>
						<p style="color:orange;margin-left: -10px;font-size: 10px;margin-top: -15px;"><b>Et accédez aux meilleures offres du moment </b></p>
					</div>
					<div class="col-7">
						<input class="col-12" type="text"placeholder="Chercher un produit, une marque ou une catégorie...">
					</div>
					<div class="col-1 ">
						<input type="button" value="HOMME" style="background-color:orange;color:white;margin-left: -20px;">
					</div>
					<div class="col-1">
						<input type="button" value="FEMME" style="background-color:orange; color:white;margin-left: -25px;">
					</div>
					
				</div>
			</article>
			<article>
				<div class="row" style="margin-top: 30px;">
					<div class="col-2 " style="border-right: 2px solid black;">
						<img src="<?php echo IMG?>recom.png" style="margin-left: -20px; ">
						<ul style="list-style: none; margin-left: -50px;">
						<li style="margin-top: 20px;font-size: 12px;"> <a href="" style="color:black; text-decoration: none;"> LES MEILLEURS PRODUITS</a>
							<li style="font-size:12px; margin-top: 18px; "> <a href="" style="color:black; text-decoration: none;"> ARTICLES VUS RECEMMENT</a>
								<li style="font-size:12px; margin-top: 18px; "> <a href="" style="color:black; text-decoration: none;"> TOP DE LA TELEPHONIE</a>
									<li style="font-size:10px; margin-top: 18px; "> <a href="" style="color:black; text-decoration: none;"> TOP DE L'ELECTROMENAGER</a>
										<li style="font-size:12px; margin-top: 18px; "> <a href="" style="color:black; text-decoration: none;"> AU TOP DE LA MODE</a>
							</ul>
					</div>
					<div class="col-10">
						<div class="row" >
							<div class="col-3 ">
								<img src="<?php echo IMG?>1_021.jpg">
								<p style="color:gray;font-size: 12px;width: 100px;">Astech</p>
								<p style="margin-top: -5px;">Téléviseur Led 32 pouces </p>
							</div>
							<div class="col-2 ">
								<img src="<?php echo IMG?>1_026.jpg" style="margin-left: -30px; width: 198px;">
								<p style="color:gray;font-size: 12px;width: 100px; margin-top: 20px;">Apple Senegal</p>
								<p style="margin-top: -5px;">Iphone 5s </p>
							</div>
							<div class="col-2 ">
								<img src="<?php echo IMG?>1_024.jpg" style="margin-left: -30px; width: 198px;">
								<p style="color:gray;font-size: 12px;width: 100px; margin-top: 20px;">Watch</p>
								<p style="margin-top: -5px;">Montre connecté </p>
							</div>
							<div class="col-2 ">
								<img src="<?php echo IMG?>1_028.jpg" style="margin-left: -20px; width: 198px;">
								<p style="color:gray;font-size: 12px;width: 100px; margin-top: 20px;">White label</p>
								<p style="margin-top: -5px;">T-shirt</p>
							</div>
							<div class="col-3 ">
								<img src="<?php echo IMG?>1_008.jpg" style="margin-left: -20px;">
								<p style="color:gray;font-size: 12px;width: 100px; margin-top: -3px;">White label</p>
								<p style="margin-top: -5px;">Smartphone </p>
							</div>
							
							
						</div>
					</div>
					
				</div>
			</article>
			<article id="4">
				<div class="row" style="margin-top: 30px;">
					<div class="col-2 bg-secondary">
						<img src="<?php echo IMG?>blu.png" style="margin-left: -20px;">
                        <div style="margin-left: 60px;border-right: 2px solid blue;">
                        <a href=""><img src="<?php echo IMG?>fero_3f1f94ae6f7f777ab1b508f8d330b096.jpg"></a>
                        <a href=""><img src="<?php echo IMG?>samsung_42c14dd5a48f80af911551d65dc2ca28.jpg"></a>
                        <a href=""><img src="<?php echo IMG?>lenovo_1c741282a8562be2fb62b7ad12a59ce0.jpg"></a>
                        <a href=""><img src="<?php echo IMG?>infinix_40c05905e74f85bc93f41066e259bfc7.jpg"></a>
                        <a href=""><img src="<?php echo IMG?>nokia_04e881f0bff6af74a6fc18be9f681f14.jpg"></a>
                        </div>
                    </div>
					
						<div class="col-5 bg-warning" style="display: flex;">

							<div style="font-size:10px;margin-top: 10px;margin-left: -10px;"><a href="">VISITEZ LA BOUTIQUE</a>

							<ul style="list-style:none;">		 
							 <a href="" style="margin-left: -40px;"><b>TÉLÉPHONES & TABLETTES !</b></a>
							<li style="font-size: 12px;margin-top: 20px;color:black;font-size: 12px;margin-left:-40px;"><a href="">SMARTPHONES</a></li> 
							<li style="font-size: 12px;margin-top: 20px;color:black;font-size: 12px;margin-left:-40px;"><a href="">TELEPHONES FIXES</a></li>
							<li style="font-size: 10px;margin-top: 20px;color:black;font-size: 12px;margin-left:-45px;"><a href="">ACCESSOIRES TELEPHONE</a>
								<ul>
									<a href=""> <li style="margin-top: 20px;">Pochettes</li></a>
									<a href=""> <li>Ecouteurs</li></a>
									<a href=""> <li>Chargeurs</li></a>
									<a href=""> <li>Power Banks</li></a>
								</ul>
								
							</li>
							<li style="font-size: 12px;margin-top: 20px;color:black;font-size: 12px;margin-left:-40px;"><a href="">TABLETTES</a></li>
							<li style="font-size: 12px;margin-top: 20px;color:black;font-size: 12px;margin-left:-40px;"><a href="">SMARTWATCHES</a></li>
							</div>
							<div>

								<a href="" style="margin-left: -20px;"><img src="<?php echo IMG?>a.jpg" style="width: 400px;"></a> 
								<a href="" style="margin-left: -20px;"><img src="<?php echo IMG?>led.jpg" style="width: 400px;margin-top: 25px;"></a>
								<a href="" style="margin-left: -20px;"><img src="<?php echo IMG?>f.jpg" style="width: 400px;margin-top: 25px;"></a>
								<a href="" style="margin-left: -20px;"><img src="<?php echo IMG?>ga.jpg" style="width: 400px;margin-top: 25px;"></a>
								<a href="" style="margin-left: -20px;"><img src="<?php echo IMG?>mob.jpg" style="width: 400px;margin-top: 25px;"></a>
							</div>

						</div>

						<div class="col-5 bg-warning">
							<div style="display: flex;">
									<p style="margin-top: 25px; margin-left: 40px;">INFINIX</p>
									<p style="margin-top: 50px;font-size: 12px; margin-left: -60px;">jusqu'à -20% de remise</p>
									<p style="margin-top: 30px; margin-left:90px; ">WIKO</p>
									<p style="margin-top: 50px;font-size: 12px; margin-left:">jusqu'à -20% de reduction</p>
							</div>

								<div>
									<a href="">	
										<img src="<?php echo IMG?>1_029.jpg" style="margin-top: 10px;margin-left: -12px;">
										<img src="<?php echo IMG?>1_032.jpg" style="margin-top: -20px;margin-left: -12px;">
										<img src="<?php echo IMG?>fre.jpg" style="margin-top: -20px;margin-left: -12px;width: 190px;">
										<img src="<?php echo IMG?>1_029.jpg" style="margin-top: -20px;margin-left: 32px;">	
										<img src="<?php echo IMG?>1_027.jpg" style="margin-top: 50px;margin-left: -12px;width: 190px;">
										<img src="<?php echo IMG?>1_007.jpg" style="margin-top: 50px;margin-left: 62px;width: 190px;">
										<img src="<?php echo IMG?>1_030.jpg" style="margin-top: 10px;margin-left: -12px;width: 190px;">
										<img src="<?php echo IMG?>mara.jpg" style="margin-top: 20px;margin-left: 62px;width: 190px;">
										<img src="<?php echo IMG?>1_037.jpg" style="margin-top: 100px;margin-left: -12px;width: 190px;">
										<img src="<?php echo IMG?>1_035.jpg" style="margin-top: 100px;margin-left: 62px;width: 190px;">
										<img src="<?php echo IMG?>1_034.jpg" style="margin-top: -10px;margin-left: -12px;width: 190px;">
										<img src="<?php echo IMG?>1_036.jpg" style="margin-top: -10px;margin-left: 62px;width: 190px;">
										<img src="<?php echo IMG?>ver.jpg" style="margin-top: 90px;margin-left: -12px;width: 190px;">
										<img src="<?php echo IMG?>tab.jpg" style="margin-top: 90px;margin-left: 62px;width: 190px;">
										<img src="<?php echo IMG?>bic.jpg" style="margin-top: 20px;margin-left: -12px;width: 190px;">
										<img src="<?php echo IMG?>al.jpg" style="margin-top: 20px;margin-left: 62px;width: 190px;">

										<img src="<?php echo IMG?>li.jpg" style="margin-top: 90px;margin-left: -12px;width: 190px;">
										<img src="<?php echo IMG?>montre.jpg" style="margin-top: 90px;margin-left: 62px;width: 190px;">
										<img src="<?php echo IMG?>caf.jpg" style="margin-top: 10px;margin-left: -12px;width: 190px;">
										<img src="<?php echo IMG?>cofee.jpg" style="margin-top: 10px;margin-left: 62px;width: 190px;">
										
									</a>								
								</div>
						
						</div>
					
					
				</div>
			</article>
			<article>
				<div class="row bg-warning" style="margin-top: 80px;">
							<h2>Le plus grand centre commercial en ligne du Senegal</h2><br>
							<p>Découvrez Jumia, la première <strong>Marketplace au Sénégal</strong> en 2017 ! Jumia est le plus grand site de vente en ligne qui permet de rapprocher directement à la fois les clients, et les vendeurs, qu'ils soient particuliers ou professionnels. Notre plateforme en ligne vous permet de bénéficier de prix bas sur une large sélection de produits. Grâce à notre expertise, vous pouvez <strong>acheter et vendre en toute sécurité</strong>.Vous recherchez des <strong>bons plans</strong> à des prix abordables? Jumia est fait pour vous! Sur Jumia Sénégal vous allez pouvoir trouver des milliers de produits neufs ou occasions aux meilleurs prix. Achetez ou vendez directement un smartphone, des chaussures pour hommes, des accessoires de mode, des produits de beauté, des vêtements pour femme… Avec Jumia faites votre <strong>shopping en ligne</strong> en toute simplicité!.</p><br>


				</div>
					<div class="row bg-secondary">

						<h2>Des accessoires et vêtements pour homme & femme de marque à bon prix.</h2><br>
							<p>Mesdames et messieurs, Jumia Mall Sénégal a choisi pour vous le meilleur de la mode actuelle, des <strong>t-shirt originaux pour hommes pas cher</strong> ainsi que des <strong>montres et bracelets élégants pour femme</strong> vous laisseront sans voix. Actualisez votre garde robe pour pas cher, il vous suffit de visiter nos boutiques <a href="https://www.jumia.sn/mode-homme/"><strong>mode homme</strong></a> ou femme et faites défiler les marques présentées, vous n’allez pas être déçus ! Des jeans pour homme de marque pas cher sont aussi disponible pour tout les goûts et toutes les tailles. Que se soit des montres, vêtements ou <a href="https://www.jumia.sn/bijoux-femmes/"><strong>bijoux pour femme</strong></a> tout y es! N’hésitez plus et venez faire votre shopping en toute tranquillité sur jumia Mall Sénégal.</p><br>

					</div>
						<div class="row bg-primary">
								<h2>L’univers des smartphones, télévisions et électroménagers à porté de main</h2><br>
								<p>Le <a href=""><strong>Smartphone</strong></a> règne sur le monde en 2017, on ne peut pas imaginer notre vie sans téléphone portable ni télévision. De nos jours les marques sortent de nouveaux modèles toutes les années avec une cadence de plus en plus élevé, il est devenu difficile de s’aligner en matière de technologie dans le domaine et c’est pour cela que Jumia Mall Sénégal est là! Nous vous proposons un éventail de smartphones tous autant performant que élégant de toutes les marques. Parler de téléphone portables sans évoquer la célèbre marque <strong>Samsung</strong> serait intolérant. La firme n’a plus besoin d’être décrite, la sortie de son nouveaux bijoux le <strong>Samsung galaxy s8</strong> ainsi que le <strong>Samsung Note 8</strong> fait d’elle LA marque du moment, sans oublier l’ultime rivale, l’Iphone d’Apple. Un nom qu’on entends partout dans le monde qui lui aussi a son mot à dire avec son <strong>Iphone 8</strong> et l’<strong>Iphone X</strong> qui font des ravage sur le marché. Les smartphones <strong>Itel</strong> sont aussi présent, les préférés des sénégalais grâce à leur rapport qualité/prix intéressant qui n’est pas négligeable.<br><br>Pour ce qui est des <a href="https://www.jumia.sn/televisions/"><strong>televisions</strong></a>, vous serez servis. Nous comptons parmi nos articles des centaines de modèles de télévision toutes technologies confondues, cela va des <strong>Smart Tv Samsung</strong> à résolution 4k aux <strong>écrans 40/50/60 pouces</strong>, pour toutes les fonctions et goûts. Vous voulez <strong>acheter une tv 4k 50 pouces</strong> pour rendre vos films et jeux vidéo intense ? Jumia Mall Sénégal a pensé à vous et a fait appel aux marques les plus demandées de tous les temps, Samsung, <strong>Lg</strong>, <strong>Astech</strong>,... à des prix hallucinants!</p><br>


						</div>
							<div class="row bg-warning">
								<h2>Tout ce qui concerne les produits beauté & Santé chez Jumia mall Sénégal</h2><br>

								<p>Jumia a aussi pensé à vous mesdames. Notre catégorie <strong>santé & beauté</strong> regroupe tout les produits dont vous aurez besoin pour vous faire belle. Des fard à paupière ou des mascara, vous trouverez votre bonheur en visitant notre site Jumia.sn. Jumia c’est aussi des produits de soin et des savons de grandes marques, il vous suffit de venir faire un tour et de faire votre choix. N’hésitez plus.</p><br>

							</div>
								<div class="row bg-secondary">
											<h3>Comment faire son shopping en ligne à Dakar, Thiès, Touba, Saint-Louis, Pikine?</h3><br>

									<p>Faire son shopping en ligne c’est simple et rapide, il vous suffit de faire un tour sur le site et d’y choisir la catégorie qui vous intéresse puis de spécifier quel type de produit il vous faut à travers les filtres. Vous pouvez fixer une fourchette de prix à ne pas dépasser ou de ne faire défiler que les produit d’une marque précise ou encore trier ceux-ci en fonction des avis illustrés en étoiles ( 1 à 5 étoiles ). Tout à été agencé pour que vous puissiez faire LA bonne affaire tout en restant sur son canapé dans le confort de sa maison. N’hésitez plus et allez vite sur le site.</p>
 
								</div>
			</article>
			<article>
				<div class="row">
					<hr>
				</div>
			</article>
		</section>
		
	</div>
	<footer>
		<div style="background-color: gray; display: flex;">
			<img src="<?php echo IMG?>jumia_logo_small.png" style="margin-top: 10px;margin-left: 90px;width: 190px;">
			<p style="margin-top: 20px;margin-left: 10px;"><strong>Jumia dans votre poche!</strong></p> <br>
				<p style="font-size: 15px;margin-top: 40px;margin-left: -190px;">Téléchargez notre application et commandez à n'importe quel moment.</p>
			<p><strong>Inscrivez-vous à notre Newsletter</strong><br> Et accédez aux meilleures offres du moment</p>
		</div>
	</footer>


</body>
</html>

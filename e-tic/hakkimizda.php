﻿<?php   
include 'header.php';

include "nedmin/netting/baglan.php";

$hakkimdasor=$db->prepare("SELECT *FROM hakkimizda where hakkimizda_id=:id");
$hakkimdasor->execute(array(
'id'=>0
));
$hakkimdacek=$hakkimdasor->fetch(PDO::FETCH_ASSOC);


?>
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4"><div class="bigtitle">Hakkımızda Sayfası</div></div>
						
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->

<div class="title-bg">
					<div class="title">Tanıtım Videosu</div>

				</div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $hakkimdacek['hakkimizda_video'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<div class="title-bg">
					<div class="title">Vizyonumuz</div>
				</div>

					<blockquote><?php echo $hakkimdacek['hakkimizda_vizyon']; ?></blockquote>
				<div class="title-bg">
					<div class="title">Misyonumuz</div>
				</div>
					<blockquote><?php echo $hakkimdacek['hakkimizda_misyon']; ?></blockquote>



				<div class="title-bg">
					<div class="title"><?php echo $hakkimdacek['hakkimizda_baslik'];  ?></div>
				</div>
				<div class="page-content">
					<p>
					<?php echo $hakkimdacek['hakkimizda_icerik'];  ?>
					</p>
					
				</div>




			</div>



<?php include 'sidebar.php'; ?> 




		</div>
		<div class="spacer"></div>
	</div>
	
		<?php include 'footer.php'; ?> 
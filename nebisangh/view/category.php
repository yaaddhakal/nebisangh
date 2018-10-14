<?php
require_once 'layout/header.php';
?>


<div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
		<div class="container">
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					
					<div id="myTabContent" class="tab-content">
						
						
						
						<div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">
							
							<div class="clearfix"></div>
						</div>
						<div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">

							
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
		<div class="tech-no">
			<!-- technology-top -->
			
			 
			<div class="clearfix"></div>
			<!-- technology-top -->
			<!-- technology-top -->
			
			<!-- technology-top -->
			<?php
				 foreach($this->categorynews as $f){
				 ?>
			
			<div class="wthree">
				 <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<div class="tch-img">

							<a href='<?php echo base_url()."single/$f->id" ?>'>
								<?php
								if($f->image!=NULL){
								?>
								<img src="<?php echo base_url().'admin/images/'.$f->image ?>" class="img-responsive" alt="why">
								<?php }
								else{
								 ?>
								<img src="<?php echo base_url().'admin/images/random.jpg' ?>"><?php } ?>
							</a>
							
							
							
						</div>
				 </div>
				 
				 <div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<h3><a href='<?php echo base_url()."single/$f->id" ?>'><?php echo $f->title ?></a></h3>
					
							<p><?php echo $f->short_desc ?></p>
							<div class="bht1">
								<a href='<?php echo base_url()."single/$f->id" ?>'>Read More</a>
							</div>
							<div class="soci">
								
							</div>
							<div class="clearfix"></div>
					
				 </div>
				
					<div class="clearfix"></div>
			</div>
			<?php } ?>
			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				
				
				<div class="blo-top1">
							
					<div class="tech-btm">
					
					<h4>Popular Posts </h4>
					<?php
					foreach ($this->latestpost as $lat) {
					 	
					 
					?>
						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<div class="blog-grid-left">
								<a href='<?php echo base_url()."single/$f->id" ?>'>
									<?php
									if($lat->image!=NULL){ 
									?>
									<img src="<?php echo base_url().'admin/images/'.$lat->image ?>" class="img-responsive" alt=""><?php } else{ ?>
									<img src="<?php echo base_url().'admin/images/random.jpg'?>" class="img-responsive" alt="">
									<?php } ?>
								</a>
							</div>
							<div class="blog-grid-right">
								<h5><a href='<?php echo base_url()."single/$f->id" ?>'><?php echo $lat->title ?></a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div><?php } ?>
						
						
						
						
						
					
					
					
					</div>
					
					
					
				</div>
				
			
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<?php
require_once 'layout/footer.php';

?>

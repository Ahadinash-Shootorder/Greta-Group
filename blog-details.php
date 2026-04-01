<?php $head_title="Blog Details - Corporate & Financial Business PHP Template"?>
<?php require_once('template-parts/layout/top-layout.php'); ?>
<?php require_once('template-parts/header/header.php'); ?>
<?php
$page_title = "Blog Details";
require_once('template-parts/page-title.php');
?>
	<!-- Blog Section Start -->
	<div class="blog-sec pt-100 pb-70">
		<div class="container">		
			<div class="row">								
				<div class="col-lg-8">	
					<div class="single-post">	
						<div class="single-post-thumb">	
							<img src="img/blog-details.jpg" alt=""/>	
						</div>	
						<div class="post-info">
							<div class="post-meta">
								<ul>
									<li class="post-author"><span>by</span><a href="#">Pierce Blick</a></li>
									<li><a href="#">14 february 2018</a></li>
								</ul>									
							</div>																			
						</div>						
						<div class="single-post-text">
							<h2><a href="#">For One Athens Arts Groupthe</a></h2>
							<p>Odio a quis, non pretium, dui aenean ac cras, lacinia feugiat elit tortor ligula et, odio nulla magna pellentesque velit. Et congue, leo lacus aptent semper in a, id quisque facilisi elit, ut vulputate donec amet. Volutpat sodales proin id eget, placeat adipisci, eros magna wisi pretium dui, arcu mollis, non velit consectetuer velit fermentum. Mauris wisi dui aliquam vel fermentum blandit, elementum wisi. Vitae mollis </p>
							<div class="code-text">
								<p>The most common way people give up their power is by thinking they don’t have any. </p>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="column-img">
										<img src="img/col1.jpg" alt=""/>
									</div>
								</div>							
								<div class="col-md-6">
									<div class="column-img">
										<img src="img/col2.jpg" alt=""/>
									</div>
								</div>
							</div>
							<p>Massa neque amet integer velit at, enim lacus vitae diam. Diam posuere ut vehicula nec in massa. Quis nisl proin eros porta urna, sociis ipsum, wisi nec duis vivamus at, ultrices magna semper arcu eu lectus, ac justo purus nunc vehicula nec. Arcu amet diam </p>				
						</div>
						<div class="row">
							<div class="col-md-7 col-sm-7">
								<div class="post-tag">
									<ul>
										<li><a href="#">business </a></li>
										<li><a href="#">creative </a></li>
										<li><a href="#">agency </a></li>
										<li><a href="#">marketing </a></li>
									</ul>
								</div>					
							</div>					
							<div class="col-md-5 col-sm-5">
								<div class="post-share-link">
									<span>share</span>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>								
							</div>
						</div>
						<div class="post-commenter-author">
							<div class="media">
							  <div class="media-left">
								  <div class="commenter-author-img">
									<img src="img/comment-author.jpg" alt="">
								  </div>
							  </div>
							  <div class="media-body">
								<h3 class="comment-author">Will Marvin</h3>
								<h4 class="comment-time">28 may 2018, 06:00 pm</h4>		
								<p>quisque interdum vulputate molestie, nibh conubia, vitae sed eget quod enim lorem doaLem tristique, mi vestibulum non congue aperiam</p>    
								<div class="author-soical-profile">
									<ul>
										<li><a href="#"><i class="icofont-facebook"></i></a></li>
										<li><a href="#"><i class="icofont-linkedin"></i></a></li>
										<li><a href="#"><i class="icofont-vimeo"></i></a></li>
										<li><a href="#"><i class="icofont-google-plus"></i></a></li>
										<li><a href="#"><i class="icofont-twitter"></i></a></li>
									</ul>
								</div>
							  </div>
							</div>														
						</div>						
						<div class="commentar-sec">
							<h2>2 comment</h2>
							<div class="media">
							  <img class="d-flex mr-3" src="img/commentar_1.jpg" alt="">
							  <div class="media-body">
								<h3 class="comment-author">Jamel Grant <span class="replay-button"><a href="#">reply</a></span></h3>
								<h4 class="comment-time">28 may 2018, 06:00 pm</h4>		
								<p>quisque interdum vulputate molestie, nibh conubia, vitae sed eget quod enim lorem doaLem tristique, mi vestibulum non congue aperiam</p>    
								<div class="media mt-3">
								  <a class="d-flex pr-3" href="#">
									<img src="img/commentar_2.jpg" alt="">
								  </a>
								  <div class="media-body">
									<h3 class="comment-author">Eula Wolff<span class="replay-button"><a href="#">reply</a></span></h3>
									<h4 class="comment-time">15 may 2018, 10:00 pm</h4>
									<p>quisque interdum vulputate molestie, nibh conubia, vitae sed eget quod enilorem doaLem tristique, mi vestibulum non congue aperiam</p>
								  </div>
								</div>
							  </div>
							</div>														
						</div>						
						<!-- Comment Input Section Start-->
						<div class="comment-field">
							<h2 class="comment-form-title">post a comment </h2>
							<form action="#" method="post" id="commentform">
							   <div class="row form-fields">
								  <p class="comment-author col-md-4"><input placeholder="Name*" id="author" name="author" value="" size="30" type="text"  aria-required="true"></p>
								  <p class="author-email col-md-4"><input placeholder="Email" id="email" name="email" value="" size="30" type="text"  aria-required="true"></p>
								  <p class="author-website col-md-4"><input placeholder="Website" id="url" name="url" value="" size="30" type="text"></p>
							   </div>						
							   <p class="comment-form">
								<textarea placeholder="Write Your Comment" id="comment" name="comment" cols="20" rows="5" aria-required="true"></textarea>
							   </p>
							   <p class="form-submit"><input name="submit" id="submit" class="submit" value="post comment" type="submit"> 
							   </p>
							</form>					
						</div>
						<!-- Comment Input Section End-->							
					</div>											
				</div>				
				<div class="col-lg-4">
					<div class="sidebar">
						<div class="search-field">
							<form action="#" method="post">
								<input placeholder="search keyword" type="text">
								<button type="submit"><i class="fa fa-search"></i></button>								
							</form>	
						</div>						
						<div class="widget-two">
							<h1 class="sidebar-widget-title">recent news</h1>
							<div class="all_r_pst">
								<div class="relative-post">								
									<div class="media-body">
										<div class="single_r_dec">
											<h3><a href="#">Comment never heard the word impossible this time there’s</a></h3>
											<ul>
												<li><a href="#">Dylan Moore</a></li>
												<li><a href="#">20 may, 2018</a></li>
											</ul>
										</div>
									</div>
								</div>								
								<div class="relative-post">								
									<div class="media-body">
										<div class="single_r_dec">
											<h3><a href="#">Having a clear understanding of your site’s mission will help inform</a></h3>
											<ul>
												<li><a href="#">Eula Wolff</a></li>
												<li><a href="#">20 may, 2018</a></li>
											</ul>
										</div>
									</div>
								</div>				
								<div class="relative-post">								
									<div class="media-body">
										<div class="single_r_dec">
											<h3><a href="#">You bet your life Speed Racer he will see it through</a></h3>
											<ul>
												<li><a href="#">Sonya Renner</a></li>
												<li><a href="#">20 may, 2018</a></li>
											</ul>
										</div>
									</div>
								</div>						
																													
							</div>															
						</div>	
						<div class="widget-archive">
							<h1 class="sidebar-widget-title">Categories</h1>
							<ul>
								<li><a href="#">business policy <span>(36)</span></a></li>
								<li><a href="#">gobel business policy <span>(25)</span></a></li>
								<li><a href="#">finance growth <span>(18)</span></a></li>
								<li><a href="#">education <span>(25)</span></a></li>
								<li><a href="#">Implement Plan <span>(25)</span></a></li>
							</ul>
						</div>			
						<div class="widget-category">
							<h1 class="sidebar-widget-title">Categories</h1>
							<ul>
								<li><a href="#">january 1980</a></li>
								<li><a href="#">march 1991</a></li>
								<li><a href="#">september 2012</a></li>
								<li><a href="#">february 2018</a></li>
							</ul>
						</div>		
						<div class="widget-newsletter">
							<h2>have any Questions?</h2>
							<form action="#" method="post">
								<input placeholder="your email" type="text">								
							</form>
							<span class="newsletter-subtitle">Call us   000 888 999</span>
						</div>
						<div class="widget-tag">
							<h1 class="sidebar-widget-title">tags</h1>
							<ul>
								<li><a href="">finace  </a></li>
								<li><a href="">loan</a></li>
								<li><a href="">online services </a></li>
								<li><a href=""> agency</a></li>
								<li><a href="">Accounting</a></li>
								<li><a href="">cases</a></li>
								<li><a href="">Consultants</a></li>
							</ul>
						</div>		          																				
					</div>
				</div>														
			</div>
		</div>
	</div>
	<!-- Blog Section End -->
<?php require_once('template-parts/footer/footer.php'); ?>
<?php require_once('template-parts/layout/bottom-layout.php'); ?>
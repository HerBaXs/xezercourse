<?php $directory = base_url('public/user/') ?>
<?php $segment = $this->uri->segment(1); ?>
<style>
	.editLogo
	{
		border-radius: 50%;
	}
</style>
<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
						<a href="<?php base_url('Home'); ?>"><img src="<?php echo $directory ?>assets/images/xtblogo.png" class="editLogo"></a>
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/xezer_tedris_buzovna/" target="_blank" class="btn-link"><i class="fa fa-instagram"></i></a></li>
								<!-- Search Button ==== -->
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
							<a href="<?php base_url('Home'); ?>"><img src="<?php echo $directory ?>assets/images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">	
							<li class="<?php if($segment == 'Home' || $segment == ''){ ?> active <?php } ?>">
								<a href="<?php echo base_url('Home'); ?>">Ana Səhifə</a>
							</li>
							<li class="<?php if($segment == 'Gallery'){ ?> active <?php } ?>">
								<a href="<?php echo base_url('Gallery'); ?>">Galeriyamız</a>
							</li>
							<li class="<?php if($segment == 'MyCourse'){ ?> active <?php } ?>">
								<a href="<?php echo base_url('MyCourse'); ?>">Bizim Kurs</a>
							</li>
							<li class="<?php if($segment == 'News'){ ?> active <?php } ?>">
								<a href="<?php echo base_url('News'); ?>">Xəbərlər</a>
							</li>
						</ul>
						<div class="nav-social-link">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="https://www.instagram.com/xezer_tedris_buzovna/"><i class="fa fa-instagram"></i>asd</a>
						</div>
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Top END ==== -->
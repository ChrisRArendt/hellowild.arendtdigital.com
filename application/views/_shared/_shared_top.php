<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=0,width=device-width" />
		
		<TITLE><?=$title?> - Hello, Wild.</TITLE>
		
		<LINK href="<?=base_url()?>assets/styles/Normalize/normalize.css" type="text/css" rel="stylesheet" />
		<LINK href="<?=base_url()?>assets/styles/global.css" type="text/css" rel="stylesheet" />
		
		<? include_once __DIR__."/GATrackingCode.php"?>
	</HEAD>
	<BODY>
		<DIV class="centering">
			<DIV id="head">
				<H1>
					<A href="<?=site_url("news")?>">Hello, Wild.</A>
					<small>A CodeIgniter &amp; GIT study project</small>
					<NAV>
						<UL>
							<LI>
								<A href="<?=site_url("home")?>">Home</A>
							</LI>
							<LI>
								<A href="<?=site_url("news")?>">News</A>
							</LI>
						</UL>
					</NAV>
				</H1>
			</DIV><!-- /#head -->
			<DIV id="content">
<?
	$data["data"] = $data;
	$data["title"] = "Home \\ " .$title;
	$this->load->view("_shared/_shared_top", $data); //load the appropriate header ?>


<SECTION>
	<H2>
		<A href="<?=site_url("home")?>">Home \ <?=$title?></A>
	</H2>
	<P>
		
	<? $this->load->view($page, $data); //load the appropriate content ?>
	
	</P>
</SECTION>


<? $this->load->view("_shared/_shared_bottom", $data); //load the appropriate footer?>
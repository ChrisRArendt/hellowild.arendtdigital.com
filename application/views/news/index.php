<? foreach($news as $news_item):?>
	<H2><?=$news_item["title"]?></H2>
	<DIV id="main"><?=$news_item["text"]?></DIV>
	<P>
		<A href="<?=site_url("news/view/".$news_item["slug"])?>">View Article</A>
	</P>
<? endforeach?>

<A href="<?=site_url("news/create")?>">Create New</A>
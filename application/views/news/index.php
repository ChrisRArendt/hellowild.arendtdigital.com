
<? foreach($news as $news_item):?>
	<ARTICLE>
		<H3><?=$news_item["title"]?></H3>
		<?=$news_item["text"]?>
		<P>
			<A href="<?=site_url("news/view/".$news_item["slug"])?>">View Article</A>
		</P>
	</ARTICLE>
<? endforeach?>
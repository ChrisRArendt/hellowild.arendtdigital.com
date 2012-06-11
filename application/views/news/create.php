<H3>Create a news item</H3>
<P>To create a new news item, please fill out the form below. Both the Title and Text fields are absolutely necessary.</P>
<?=validation_errors();?>
<?=form_open("news/create")?>
	<DIV>
		<LABEL for="title">Title</LABEL>
		<INPUT type="input" name="title"/>
	</DIV>
	<DIV>
		<LABEL for="text">Text</LABEL>
		<TEXTAREA name="text"></TEXTAREA>
	</DIV>
	
	<INPUT type="submit" name="submit" value="Create news item"/>
</FORM>
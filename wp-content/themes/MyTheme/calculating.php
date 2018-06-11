<?php
  /**
  * Template Name: Calc
  */
get_header(); ?>
<?php the_content(); ?>
<div class="content_profile">
    <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>
			<script language="JavaScript">
		function GetResult(oper) {
			var n1 = 0;

			n1 = eval(calcform.num_01.value); 

			switch (oper) 
			{ 
				case 1: 
					{
						calcform.res.value = n1 / 1.59;
						calcform.res1.value = n1 / 2.2;
						calcform.res2.value = n1 / 2.9;
						calcform.res3.value = n1 / 4.4;
						calcform.res4.value = n1 / 4.2;
						calcform.res5.value = n1 / 4.1;
						break;
					}
			}
		}
		// -->
</script>
<form name="calcform">

		<table border cellpadding=5 width=350 bgcolor="silver">

			<tr>
				<td>Ваш рост:</td>
				<td>
					<center>
						<input name="num_01" type="text" size="24" maxlength=16 value="1">
					</center>
				</td>
			</tr>
			<tr>
				<td>Грудь:</td>
				<td>
					<center>
						<input name="res" type="text" size="24" maxlength=0>
					</center>
				</td>
			</tr>
			<tr>
				<td>Талия:</td>
				<td>
					<center>
						<input name="res1" type="text" size="24" maxlength=0>
					</center>
				</td>
			</tr>
			<tr>
				<td>Ноги:</td>
				<td>
					<center>
						<input name="res2" type="text" size="24" maxlength=0>
					</center>
				</td>
			</tr>
			<tr>
				<td>Шея:</td>
				<td>
					<center>
						<input name="res3" type="text" size="24" maxlength=0>
					</center>
				</td>
			</tr>
			<tr>
				<td>Руки:</td>
				<td>
					<center>
						<input name="res4" type="text" size="24" maxlength=0>
					</center>
				</td>
			</tr>
			<tr>
				<td>Голень:</td>
				<td>
					<center>
						<input name="res5" type="text" size="24" maxlength=0>
					</center>
				</td>
			</tr>

		</table>

		<table border cellpadding=1 0 width=350>

			<tr bgcolor="yellow">
				<td>
					<center>
						<input name="btnadd" type="button" value="  Result  " onClick="GetResult(1)">
					</center>
				</td>
			</tr>

		</table>

	</form>
</div>


<?php get_footer(); ?>

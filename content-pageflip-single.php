<?php
function chr_pageflip_single() {
 	if(have_posts()) { echo ""; } while ( have_posts() ) : the_post();
 		//Imprime o Titulo da Revista
 		echo '<h4>'.the_title('', '', false).'</h4>';
 	?>
	<script type="text/javascript">
	//<![CDATA[
		jQuery(document).ready(function(){
			jQuery('.gallery').find('br').remove(); jQuery('.galleryid-<?php echo get_the_ID();?>').booklet();
	    })(jQuery);
	//]]>
	</script>
	<?php
		//Verifica as IDs das imagens da Galeria
		$chr_get_ids = get_the_content(); preg_match('/\[gallery.*ids=.(.*).\]/', $chr_get_ids, $chr_ids); $array_id = explode(",", $chr_ids[1]); $array = $array_id;
		$print_ids = implode(",", $array);
		//Verifica se existe Link na Imagem
		$chr_get_target = get_the_content(); preg_match('/\[gallery.*link=.(.*).*ids=.(.*).\]/', $chr_get_target, $chr_target); $array_target = explode(",", $chr_target[1]); $targetarray = $array_target;
		$print_target = implode(",", $targetarray);
		//Funcao de criacao do novo shortcode da galeria
		$geragaleria = '[gallery link="'.$print_target.'" ids="' . $print_ids . '" size="chr-imagem-revista" columns="0" itemtag="div" icontag="figure" captiontag="p"]';
		print ''.apply_filters( 'the_content', $geragaleria , false).'';
	endwhile; if(have_posts()) { echo "";}
}
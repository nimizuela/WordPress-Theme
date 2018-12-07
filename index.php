<?php get_header(); ?>
				<!-- This loops through the paginated posts -->

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_excerpt(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>


	
		
		<section class="post-container">
			<div class="post-thumb"><img src="/images/thumbs/rundown.jpg" alt="" /></div>
			<div class="post-content">
				<i class="post-pin fa fa-thumb-tack"></i>
				<h2><a href="/es/2018/08/09/proyecto-nimizuela.html">Proyecto Nimizuela</a></h2>
				<div>
					Acerca del Proyecto Nimizuela y cómo planeamos hacer de Venezuela el primer país en la historia en adoptar una criptomoneda en toda la nación. <a href="/es/2018/08/09/proyecto-nimizuela.html" class="more">...leer más</a>
				</div>
				<p>
					<span><i class="fa fa-calendar"></i> 
<span class="postedago" datetime="2018-08-09T00:00:00+03:00"></span>

9
de Agosto
2018
 
	
	

</span>
				</p>
			</div>
		</section>
		
	
		
	

	
		
		<section class="post-container">
			<div class="post-thumb"><img src="/images/thumbs/net-is-dead.jpg" alt="" /></div>
			<div class="post-content">
				
				<h2><a href="/es/2018/12/03/el-net-ha-muerto-larga-vida-al-nim.html">El NET Ha Muerto, Larga Vida al NIM</a></h2>
				<div>
					Aquellos que han seguido de cerca la evolución del protocolo de pago descentralizado Nimiq y la criptomoneda NIM, ahora han recibido la noticia de que el token NET "¡ha muerto!". Este token fue el usado para recaudar los fondos necesarios para empezar el proyecto, y ahora el contrato inteligente donde el token NET corría en la cadena de bloques Ethereum ha sido desactivado, por lo que este no podrá ser activado ni cambiado a su equivalente en NIM. <a href="/es/2018/12/03/el-net-ha-muerto-larga-vida-al-nim.html" class="more">...leer más</a>
				</div>
				<p>
					<span><i class="fa fa-calendar"></i> 
<span class="postedago" datetime="2018-12-03T00:00:00+02:00"></span>

3
de Diciembre
2018
 
	
	

</span>
				</p>
			</div>
		</section>
		
	
		
	
		
		<section class="post-container">
			<div class="post-thumb"><img src="/images/thumbs/new-faucet.jpg" alt="" /></div>
			<div class="post-content">
				
				<h2><a href="/es/2018/09/22/proyecto-nimizuela-ha-agregado-otro-faucet.html">Proyecto Nimizuela Ha Agregado Otro Faucet</a></h2>
				<div>
					Ahora el Proyecto Nimizuela ha agregado un nuevo faucet (o grifo), donde se distribuye pequeños incentivos en NIM con la finalidad de dar a conocer la criptomoneda Nimiq en Venezuela. <a href="/es/2018/09/22/proyecto-nimizuela-ha-agregado-otro-faucet.html" class="more">...leer más</a>
				</div>
				<p>
					<span><i class="fa fa-calendar"></i> 
<span class="postedago" datetime="2018-09-22T00:00:00+03:00"></span>

22
de Septiembre
2018
 
	
	

</span>
				</p>
			</div>
		</section>
		
	
		
	
		
		<section class="post-container">
			<div class="post-thumb"><img src="/images/thumbs/video-sushipool.jpg" alt="" /></div>
			<div class="post-content">
				
				<h2><a href="/es/2018/08/25/how-to-mine-nimiq-via-the-browser-and-earn-the-cryptocurrency-nim.html">Aprende Como Minar Nimiq En El Navegador Web Y Obtener La Criptomoneda NIM</a></h2>
				<div>
					Un tutorial paso a paso mostrando como empezar a minar la criptomoneda Nimiq utilizando solo tu navegador y tu CPU. Además, aprende como configurar una piscina de minado tal como SushiPool para obtener tus NIM con mayor regularidad. <a href="/es/2018/08/25/how-to-mine-nimiq-via-the-browser-and-earn-the-cryptocurrency-nim.html" class="more">...leer más</a>
				</div>
				<p>
					<span><i class="fa fa-calendar"></i> 
<span class="postedago" datetime="2018-08-25T00:00:00+03:00"></span>

25
de Agosto
2018
 
	
	

</span>
				</p>
			</div>
		</section>
		
	
		
	
		
		<section class="post-container">
			<div class="post-thumb"><img src="/images/thumbs/faucet.jpg" alt="" /></div>
			<div class="post-content">
				
				<h2><a href="/es/2018/08/17/proyecto-nimizuela-ahora-con-faucet.html">Proyecto Nimizuela Ahora Con Faucet</a></h2>
				<div>
					Ahora podrás conseguir NIM gratis... ya que gracias al miembro de la comunidad <a href="https://github.com/smittyvb">smitop</a> hemos agregado un faucet a la página inicial del Proyecto Nimizuela. <a href="/es/2018/08/17/proyecto-nimizuela-ahora-con-faucet.html" class="more">...leer más</a>
				</div>
				<p>
					<span><i class="fa fa-calendar"></i> 
<span class="postedago" datetime="2018-08-17T00:00:00+03:00"></span>

17
de Agosto
2018
 
	
	

</span>
				</p>
			</div>
		</section>
		
	
		
	
		
		<section class="post-container">
			<div class="post-thumb"><img src="/images/thumbs/infographic.jpg" alt="" /></div>
			<div class="post-content">
				
				<h2><a href="/es/2018/08/05/infografico-nimiq.html">Infográfico Nimiq</a></h2>
				<div>
					Un pequeño infográfico explicando Nimiq de forma relativamente exhaustiva que está perfector para cripto-entusiastas. <a href="/es/2018/08/05/infografico-nimiq.html" class="more">...leer más</a>
				</div>
				<p>
					<span><i class="fa fa-calendar"></i> 
<span class="postedago" datetime="2018-08-05T00:00:00+03:00"></span>

5
de Agosto
2018
 
	
	

</span>
				</p>
			</div>
		</section>
		
	
		
	
		
		<section class="post-container">
			<div class="post-thumb"><img src="/images/thumbs/video-introduction.jpg" alt="" /></div>
			<div class="post-content">
				
				<h2><a href="/es/2018/08/04/nimiq-la-primera-cadena-de-bloques-basada-en-el-navegador-web.html">Nimiq La Primera Cadena De Bloques Basada En El Navegador Web</a></h2>
				<div>
					En este corto video encontrarás una breve introducción a qué son las cadenas de bloques y a Nimiq, que es la primera cadena de bloques basada en el navegador web, además de como su criptomoneda NIM es la más fácil de user y de minar que hay. <a href="/es/2018/08/04/nimiq-la-primera-cadena-de-bloques-basada-en-el-navegador-web.html" class="more">...leer más</a>
				</div>
				<p>
					<span><i class="fa fa-calendar"></i> 
<span class="postedago" datetime="2018-08-04T00:00:00+03:00"></span>

4
de Agosto
2018
 
	
	

</span>
				</p>
			</div>
		</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>


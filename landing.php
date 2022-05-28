<?php 
/* Template Name: Landing */ 
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="main-header">
	<div class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Zenta"></div>
	<nav>
		<div class="hamburger"></div>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'      => 'main-nav main-nav-mob',
					'depth'           => 0,
				)
			);
			?>
	</nav>
	<div class="right_bar">
	<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'lang-menu',
					'menu_class'      => 'main-lang',
				)
			);
			?>
	<div class="btn small"><a href="#"><?php echo get_field('get_in_touch'); ?></a></div>
	</div>
</header>
<section class="main-head">
	<div class="content">
	<div class="banner-left">
		<div class="banner-title"><?php echo get_field('zagolovok_bannera'); ?></div>
		<div class="banner-text"><?php echo get_field('tekst_bannera'); ?></div>
		<div class="btn medium"><a href="#"><?php echo get_field('get_in_touch'); ?></a></div>
	</div>
	<div class="banner-right"><img src="<?php echo get_field('kartinka_banera'); ?>" alt=""></div>
	</div>
</section>
<section class="offer content" id="offer_section">
    <div class="section-title"><?php echo get_field('nazvanie_sekczii_offer'); ?></div>
    <div class="offer_box">
    <div class="offer_item">
        <div class="offer_img">
        <img src="<?php echo get_field('kartinka_offera_1'); ?>" alt=""> 
        </div>
        <div class="offer_title">
        <?php echo get_field('zagolovok_offera_1'); ?>
        </div>
        <div class="offer-text">
        <?php echo get_field('tekst_offera_1'); ?>
        </div>
    </div>
    <div class="offer_item">
        <div class="offer_img">
        <img src="<?php echo get_field('kartinka_offera_2'); ?>" alt=""> 
        </div>
        <div class="offer_title">
        <?php echo get_field('zagolovok_offera_2'); ?>
        </div>
        <div class="offer-text">
        <?php echo get_field('tekst_offera_2'); ?>
        </div>
    </div>
    <div class="offer_item">
        <div class="offer_img">
        <img src="<?php echo get_field('kartinka_offera_3'); ?>" alt=""> 
        </div>
        <div class="offer_title">
        <?php echo get_field('zagolovok_offera_3'); ?>
        </div>
        <div class="offer-text">
        <?php echo get_field('tekst_offera_3'); ?>
        </div>
    </div>
    <div class="offer_item">
        <div class="offer_img">
        <img src="<?php echo get_field('kartinka_offera_4'); ?>" alt=""> 
        </div>
        <div class="offer_title">
        <?php echo get_field('zagolovok_offera_4'); ?>
        </div>
        <div class="offer-text">
        <?php echo get_field('tekst_offera_4'); ?>
        </div>
    </div>
    <div class="offer_item">
        <div class="offer_img">
        <img src="<?php echo get_field('kartinka_offera_5'); ?>" alt=""> 
        </div>
        <div class="offer_title">
        <?php echo get_field('zagolovok_offera_5'); ?>
        </div>
        <div class="offer-text">
        <?php echo get_field('tekst_offera_5'); ?>
        </div>
    </div>
    <div class="offer_item">
        <div class="offer_img">
        <img src="<?php echo get_field('kartinka_offera_6'); ?>" alt=""> 
        </div>
        <div class="offer_title">
        <?php echo get_field('zagolovok_offera_6'); ?>
        </div>
        <div class="offer-text">
        <?php echo get_field('tekst_offera_6'); ?>
        </div>
    </div>
    </div>
</section>
<section class="quote" id="quote_text">
<div class="content">
<div class="quote_line"><div class="line"></div><span>”</span><div class="line"></div></div>
<div class="quote_text"><?php echo get_field('tekst_czitaty'); ?></div>
<div class="quote_author"><div class="jobs"><img src="<?php echo get_field('dzhobs'); ?>" alt=""></div><div class="quote_name"><?php echo get_field('imya_dzhobsa'); ?></div></div>
</div>
</section>
<section class="timeline" id="timeline">
<div class="content">
    <div class="section-title"><?php echo get_field('zagolovok_tajmlajna'); ?></div>
    <div class="timeline_content">
    <div class="timeline_logo"><img src="<?php echo get_field('logotip_tajmlajna'); ?>" alt=""></div>
<ol>
    <li><div class="time-item"><time>1</time> <?php echo get_field('punkt_1'); ?></div></li>
    <li><div class="time-item"><time>2</time> <?php echo get_field('punkt_2'); ?></div></li>
    <li><div class="time-item"><time>3</time> <?php echo get_field('punkt_3'); ?></div></li>
    <li><div class="time-item"><time>4</time> <?php echo get_field('punkt_4'); ?></div></li>
    <li><div class="time-item"><time>5</time> <?php echo get_field('punkt_5'); ?></div></li>
    <li><div class="time-item"><time>6</time> <?php echo get_field('punkt_6'); ?></div></li>
    <li><div class="time-item"><div class="btn medium"><a href="#"><?php echo get_field('get_in_touch'); ?></a></div></div></li>
    <li></li>
  </ol>
  </div>
</div>
</section>
<section class="about_us" id="about-us">
<div class="content">
<div class="section-title"><?php echo get_field('zagolovok_o_nas'); ?></div>
<div class="abou_content">
<div class="about_img"><img src="<?php echo get_field('kartinka_o_nas'); ?>" alt=""></div>
<div class="about_text"><?php echo get_field('tekst_o_nas'); ?></div>
</div>
</div>
</section>
<section class="team_expertise" id="team">
<div class="content">
<div class="section-title"><?php echo get_field('zagolovok_komandy'); ?></div>
<div class="team_content">
<div class="team-item">
    <div class="team-img"><img src="<?php echo get_field('kartinka_skila_1'); ?>" alt=""></div>
    <div class="team_text"><?php echo get_field('tekst_skila_1'); ?></div>
</div>
<div class="team-item">
    <div class="team-img"><img src="<?php echo get_field('kartinka_skila_2'); ?>" alt=""></div>
    <div class="team_text"><?php echo get_field('tekst_skila_2'); ?></div>
</div>
<div class="team-item">
    <div class="team-img"><img src="<?php echo get_field('kartinka_skila_3'); ?>" alt=""></div>
    <div class="team_text"><?php echo get_field('tekst_skila_3'); ?></div>
</div>
<div class="team-item">
    <div class="team-img"><img src="<?php echo get_field('kartinka_skila_4'); ?>" alt=""></div>
    <div class="team_text"><?php echo get_field('tekst_skila_4'); ?></div>
</div>
<div class="team-item">
    <div class="team-img"><img src="<?php echo get_field('kartinka_skila_5'); ?>" alt=""></div>
    <div class="team_text"><?php echo get_field('tekst_skila_5'); ?></div>
</div>
<div class="team-item">
    <div class="team-img"><img src="<?php echo get_field('kartinka_skila_6'); ?>" alt=""></div>
    <div class="team_text"><?php echo get_field('tekst_skila_6'); ?></div>
</div>
<div class="team-item">
    <div class="team-img"><img src="<?php echo get_field('kartinka_skila_7'); ?>" alt=""></div>
    <div class="team_text"><?php echo get_field('tekst_skila_7'); ?></div>
</div>
<div class="team-item">
    <div class="team-img"><img src="<?php echo get_field('kartinka_skila_8'); ?>" alt=""></div>
    <div class="team_text"><?php echo get_field('tekst_skila_8'); ?></div>
</div>
</div>
</div>
</section>
<section class="contact_us" id="contact">
<div class="content">
<div class="section-title"><?php echo get_field('zagolovok_komandy'); ?></div>
<div class="section_subtitle">Tell us how we can help you</div>
<div class="contact_form"><?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]'); ?></div>
</div>
</section>
<footer>
<div class="content">
    <div class="contact_info">
        <div class="info_title">Contacts</div>
        <p>Gulliver, 1A Sportyvna Square, 01023 Kyiv, Ukraine</p>
        <p>info@zenta.dev</p>
        <p>+380504552152</p>
    </div>
    <div class="social">
        <div class="social_icon insta"><a href="#"></a></div>
        <div class="social_icon fb"><a href="#"></a></div>
        <div class="social_icon linkin"><a href="#"></a></div>
        <div class="social_icon twitter"><a href="#"></a></div>
    </div>
    </div>
</footer>
<?php wp_footer(); ?>
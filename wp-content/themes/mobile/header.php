<!DOCTYPE html>
<html>
<head>
<title><?php wp_title(); ?></title>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no,initial-scale=1.0,maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta name="format-detection" content="telephone=no"/>
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C700%2C700i%2C800%2C800i%7CLora%3A400%2C400i%2C700%2C700i%7CUbuntu%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i&#038;subset">
<link rel='stylesheet' id='bootstrap-css' href='<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css' type='text/css' media='all'/>
<link rel='stylesheet' id='jquery-ui-css' href='<?php echo get_template_directory_uri(); ?>/assets/css/jquery-ui.min.css' type='text/css' media='all'/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600%2C700&subset=latin%2Clatin-ext">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery-ui.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl/owlcarousel/assets/owl.theme.default.min.css">
<link rel='stylesheet' id='bdt-root-css' href='<?php echo get_template_directory_uri(); ?>/style.css' type='text/css' media='all'/>
	
<div id="fb-root"></div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({google_ad_client: "pub-8063653078243405",enable_page_level_ads: true});
</script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5WN5WRP');</script>
<!-- End Google Tag Manager -->
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106641788-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-106641788-1');
    </script>

<?php wp_head();?>

</head>
<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WN5WRP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wraper">
<div class="wrap-header">
	<div class="left" style="width: 20%;">
		<a href="<?php echo home_url(); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo" width="56px">
		</a>
	</div> 
	<div class="right" style="width: 80%;">
		<div class="tab">
			<a href="<?php echo home_url(); ?>/goi-vinaphone" class="logo-icon vinaphone">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon/vinaphone.png" class="active">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon/vinaphone-unactive.png" class="unactive">
			</a>
			<a href="<?php echo home_url(); ?>/goi-mobifone" class="logo-icon active mobifone">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon/mobifone-active.png" class="active">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon/mobifone.png" class="unactive">
			</a>
			<a href="<?php echo home_url(); ?>/goi-viettel" class="logo-icon viettel">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon/viettel-active.png" class="active">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon/viettel.png" class="unactive">
			</a>
		</div>
	</div>
</div>
<div class="clear-fix"></div>
<div class="menu w100">
	<?php global $nhamang; ?>
	<?php $url = home_url().'/goi-vinaphone/'; ?>
	<?php $khuyenmai = home_url().'/tin-khuyen-mai-vinaphone/'; ?>
	<?php if(is_home()) $url = home_url().'/goi-vinaphone/'; ?>
	<?php if($nhamang == 'viettel') {
		$url = home_url().'/goi-viettel/';
		$khuyenmai = home_url().'/khuyen-mai-viettel/';
	} ?>
	<?php if($nhamang == 'mobifone') {
		$url = home_url().'/goi-mobifone/';
		$khuyenmai = home_url().'/khuyen-mai-mobifone/';
	} ?>
	<?php if($nhamang == 'vinaphone') {
		$url = home_url().'/goi-vinaphone/';
		$khuyenmai = home_url().'/tin-khuyen-mai-vinaphone/';

	} ?>

	<a href="<?php echo $khuyenmai; ?>" class="w50 center tin-tuc">
		Khuyến mãi
		<img src="<?php echo get_template_directory_uri(); ?>/images/icon/down.png" class="img-down">
	</a>
	<a href="<?php echo $url; ?>" class="w50 center current goi-cuoc">
		Gói cước
		<img src="<?php echo get_template_directory_uri(); ?>/images/icon/down.png" class="img-down">
	</a>
</div>
<!-- end header-->
<?php
// Couleur du texte des champs si erreur saisie utilisateur
$color_font_warn="#FF0000";
// Couleur de fond des champs si erreur saisie utilisateur
$color_form_warn="#FFCC66";
// Ne rien modifier ci-dessous si vous n’êtes pas certain de ce que vous faites !
if(isset($_POST['submit'])){
	$erreur="";
	// Nettoyage des entrées
	while(list($var,$val)=each($_POST)){
	if(!is_array($val)){
		$$var=strip_tags($val);
	}else{
		while(list($arvar,$arval)=each($val)){
				$$var[$arvar]=strip_tags($arval);
			}
		}
	}
	// Formatage des entrées
	$f_1=trim(ucwords(eregi_replace("[^a-zA-Z0-9éèàäö\ -]", "", $f_1)));
	$f_2=trim(ucwords(eregi_replace("[^a-zA-Z0-9éèàäö\ -]", "", $f_2)));
	$f_3=strip_tags(trim($f_3));
	$f_4=trim(eregi_replace("[^0-9\ +]", "", $f_4));
	$f_5=trim(ucwords(eregi_replace("[^a-zA-Z0-9éèàäö\ -]", "", $f_5)));
	// Verification des champs
	if(strlen($f_1)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Nom &raquo; est vide ou incomplet.</span>";
		$errf_1=1;
	}
	if(strlen($f_3)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Adresse Mail &raquo; est vide ou incomplet.</span>";
		$errf_3=1;
	}else{
		if(!ereg('^[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+'.
		'@'.
		'[-!#$%&\'*+\/0-9=?A-Z^_`a-z{|}~]+\.'.
		'[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+$',
		$f_3)){
			$erreur.="<li><span class='txterror'>La syntaxe de votre adresse e-mail n'est pas correcte.</span>";
			$errf_3=1;
		}
	}
	if(strlen($f_5)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Sujet &raquo; est vide ou incomplet.</span>";
		$errf_5=1;
	}
	if(strlen($f_6)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Message &raquo; est vide ou incomplet.</span>";
		$errf_6=1;
	}
	if($erreur==""){
		// Création du message
		$titre="Message de votre site";
		$tete="From:Site@David-grillon.com\n";
		$corps.="Nom : ".$f_1."\n";
		$corps.="Société : ".$f_2."\n";
		$corps.="Adresse Mail : ".$f_3."\n";
		$corps.="Tel : ".$f_4."\n";
		$corps.="Sujet : ".$f_5."\n";
		$corps.="Message : ".$f_6."\n";
		if(mail("grillon.d@gmail.com", $titre, stripslashes($corps), $tete)){
			$ok_mail="true";
		}else{
			$erreur.="<li><span class='txterror'>Une erreur est survenue lors de l'envoi du message, veuillez refaire une tentative.</span>";
		}
	}
}
?>
<!doctype html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!--><html class="no-js" lang="fr"> <!--<![endif]-->
<head>
		<meta charset="UTF-8">
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<title>David GRILLON - Me Contacter</title>
		<meta name="description" content="Portfolio de David GRILLON, Chef de Projet, Webdesigner et Intégrateur. Pour toutes informations merci de me contacter">
		<meta name="keywords" content="chef,projet,webdesigner,ux,designer,integrateur,site,internet,création,contact,informations,formulaire,adresse,mail">
		<meta name="author" content="David GRILLON">
		<meta name="category" content="Internet">
		<meta name="classification" content="10">
		<meta name="copyright" content="GRILLON David">
		<meta name="publisher" content="Lopale">
		<meta name="robots" content="index, follow">
		<meta http-equiv="content-script-type" content="text/javascript">
		<meta http-equiv="content-language" content="fr">
		<meta name="rating" content="General">
		<meta name="revisit-after" content="30">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="css/knacss.css" media="all">
		<link rel="stylesheet" href="css/styles.css" media="all">
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>

		<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="img/favicon/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="img/favicon/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">


</head>
<body>

	<section role="main" id="content">		

		<header>		
			<nav id="main-nav">
				<ol>
					<li class="lelogo">
						<a href="index.php" class="logo" title="David GRILLON - Webdesigner / Chef de Projet Web">David GRILLON - Chef De Projet - Webdesigner</a>
					</li>
					<li class="menu">
						<a href="#" class="sprite">Menu</a>
					</li>
					<li>
						<a href="index.php" class="current accueil sprite">Accueil</a>
					</li>
					<li>
						<a href="realisations.php" class="realisation sprite">Réalisations</a>
					</li>
					<li>
						<a href="parcours.php" class="parcours sprite">Parcours</a>
					</li>
					<li>
						<a href="contact.php" class="contact sprite">contact</a>
					</li>
				</ol>			
			</nav>		
		</header>




		

		<article class="texte_qui deco first contactTab">
			<h2>Me contacter</h2>
			
			<div class="bkg">
				<p>Si mon profil vous intéresse, n'hésitez pas à me contacter !<br>
				Que se soit pour </p>
				<ul>
					<li>Une création de site internet ou une refonte</li>
					<li>Une mission interim/ CDD/ CDI</li>
					<li>Une collaboration</li>
					<li>Un accompagnement de votre projet</li>
				</ul>

				<table>
					<tr>
						<td>
							<p>
								<b>David GRILLON</b><br/>
							25 Rue de l'église<br/>
							39300 Ney</p>
						</td>
						<td>
							<p>Tel : <a href="tel:+33607311626"> 06 07 31 16 26</a></p>
							<p>Mail : <a href="mailto:grillon.d@gmail.com" title="Mail">grillon.d@gmail.com</a></p>
						</td>
					</tr>
				</table>
				

				<p>

					Ou alors, remplissez le formulaire suivant :</p>


				<?php  if($ok_mail=="true"){ ?>
					<table>
						<tr>
							<td>
								<span class='txtform'>
									Le message ci-dessous nous a bien été transmis, et nous vous en remercions.
								</span>
							</td>
						</tr>
						<tr>
							<td>
								<tt>
									<?php echo nl2br(stripslashes($corps));?>
								</tt>
							</td>
						</tr>
						<tr>
							<td>
								<span class='txtform'>
									Nous allons y donner suite dans les meilleurs délais.<br>A bientôt.
								</span>
							</td>
						</tr>
					</table>
				<?php  }else{ ?>
				<form action='<?php  echo $PHP_SELF ?>' method='post' name='Form'>
				<table>
				<?php  if($erreur){ ?><tr><td colspan='2' bgcolor='red'><span class='txterror'><font color='white'><b>&nbsp;ERREUR, votre message n'a pas été transmis</b></font></span></td></tr><tr><td colspan='2'><ul><?php echo$erreur?></ul></td></tr><?php }?>
				<tr><td colspan='2'><span class='txterror'>Les champs marqués d'un * sont obligatoires</span></td></tr>
				<tr><td><span class='txtform'>Nom* :</span></td><td><input type='text' class=' <?php if($errf_1==1){echo "erreur";}?>' name='f_1' value='<?php echo stripslashes($f_1);?>' size='24' border='0'></td></tr>
				<tr><td><span class='txtform'>Société :</span></td><td><input type='text' class=' <?php if($errf_2==1){echo "erreur";}?>' name='f_2' value='<?php echo stripslashes($f_2);?>' size='24' border='0'></td></tr>
				<tr><td><span class='txtform'>Adresse Mail* :</span></td><td><input type='text' class=' <?php if($errf_3==1){echo "erreur";}?>' name='f_3' value='<?php echo stripslashes($f_3);?>' size='24' border='0'></td></tr>
				<tr><td><span class='txtform'>Tel :</span></td><td><input type='text' class=' <?php if($errf_4==1){echo "erreur";}?>' name='f_4' value='<?php echo stripslashes($f_4);?>' size='24' border='0'></td></tr>
				<tr><td><span class='txtform'>Sujet* :</span></td><td><input type='text' class=' <?php if($errf_5==1){echo "erreur";}?>' name='f_5' value='<?php echo stripslashes($f_5);?>' size='24' border='0'></td></tr>
				<tr><td><span class='txtform'>Message* :</span></td><td><textarea class='<?php if($errf_6==1){echo "erreur";}?>' name='f_6' rows='6' cols='40'><?php echo$f_6?></textarea></td></tr>
				<tr><td></td><td><input type='submit' name='submit' value='Envoyer' border='0'></td></tr>
				</table>
				</form>
			<?php  } ?>
			</div>
		</article>
	</section>



	<footer role="contentinfo" id="bottom">
		<div>
			<section>
				<p id="copyright">&copy;2014 David GRILLON. All Rights Reserved. 25 Rue de L'église - 39300 Ney - Tel :<a href="tel:+33607311626"> 06 07 31 16 26</a> - Mail : <a href="mailto:grillon.d@gmail.com" title="Mail">grillon.d@gmail.com</a></p>
			</section>
			<ul id="social-links">
				<li class="twitter"><a target="_blank" class="sprite" title="Suivez nous sur Twitter" href="https://twitter.com/Lopale_web">Suivez nous sur Twitter</a></li>
				<li class="facebook"><a target="_blank" class="sprite" title="Rejoignez nous sur Facebook" href="https://www.facebook.com/pages/Opale/277072509024332">Rejoignez nous sur Facebook</a></li>
				<li class="google"><a target="_blank" class="sprite" title="Rejoignez nous sur Google +" href="https://plus.google.com/105399995261109311258?prsrc=3">Rejoignez nous sur Google+</a></li>
				<li class="blog"><a target="_blank" class="sprite" title="Rejoignez nous sur Notre Blog" href="http://www.blog.lopale.fr/">Rejoignez nous sur Notre Blog</a></li>
			</ul>

			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- portfoliot -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-6206355728650615"
			     data-ad-slot="9972462685"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</footer>


	
		
</body>
</html>
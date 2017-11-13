$(document).ready(function() {


	$('#cl1').on('click', function() {

		carousel1();
		

	});



	$('#cl2').on('click', function() {


	carousel2();
		

	});



	$('#cl3').on('click', function() {

		

	carousel3();
		

	});


	/*Carousel automatique*/
	setInterval(carousel_boucle, 9500);

	function carousel_boucle() {
		setTimeout(function() {carousel2()}, 1000);
		setTimeout(function() {carousel3()}, 4500);
		setTimeout(function() {carousel1()}, 6500);
	}


	/*Afficher ou disparaitre les images correspondantes*/
		function carousel1() {
		$('#img-carousel1').fadeIn(300);
		$('#img-carousel2').hide();
		$('#img-carousel3').hide();

		$('#txt-cl1').text('On est plus de 40 membres, merci !');
		$('#p-cl1').text('Le serveur a atteint plus de 40 membres, si vous voulez rejoindre le discord, cliquez sur l\'image');

		/*Ajouter ou supprimer les les classes correspondantes aux elements*/
		$('#cl1').addClass('color-cl');
		$('#cl2').removeClass('color-cl');
		$('#cl3').removeClass('color-cl');
	}


	/*Afficher ou disparaitre les images correspondantes*/
		function carousel2() {
		$('#img-carousel1').hide();
		$('#img-carousel2').fadeIn(300);
		$('#img-carousel3').hide();

		$('#txt-cl1').text('Mis a jour du site web');
		$('#p-cl1').text('Quelques mis a jours ont été faites, cliquez sur l\'image pour en savoir plus');
		
		/*Ajouter ou supprimer les les classes correspondantes aux elements*/
		$('#cl2').addClass('color-cl');
		$('#cl1').removeClass('color-cl');
		$('#cl3').removeClass('color-cl');
	}


	/*Afficher ou disparaitre les images correspondantes*/
		function carousel3() {
		$('#img-carousel1').hide();
		$('#img-carousel2').hide();
		$('#img-carousel3').fadeIn(300);

		$('#txt-cl1').text('Github de MisterRobotFr');
		$('#p-cl1').text('Pour consulter le github de MisterRobotFr , cliquez sur l\'image');

		/*Ajouter ou supprimer les les classes correspondantes aux elements*/
		$('#cl3').addClass('color-cl');
		$('#cl1').removeClass('color-cl');
		$('#cl2').removeClass('color-cl');
	}
	

	




});
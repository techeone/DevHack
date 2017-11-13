$(document).ready(function() {

		$('#btn-edit').on('click', function() {

			//Rempalacement des elements par des input
			$('.input-text').html('<input type="text" value="" name="newpseudo" placeholder="Entrez un nouveau pseudo..." class="form-control">').fadeIn(300);

			$('.input-email').html('<input type="email" value="" name="newmail" placeholder="Entrez une nouvelle adresse mail..." class="form-control">').fadeIn(300);

			$('.input-mdp').html('<input type="password" value="" name="newmdp" placeholder="Entrez un nouveu mot de passe..." class="form-control">').fadeIn(300);

			$('#btn-submit-update').fadeIn(300);

		});


});
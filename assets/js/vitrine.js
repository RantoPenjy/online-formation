$(document).ready(function () {
	$("#retour").hide();
	$(".spinner-border").hide();
	$("#btn-conn").click(function () {
		$("#btn-conn").hide();
		$(".spinner-border").show();

		var $mail = $("#email1").val().trim();
		var $password = $("#password1").val();
		var donnee = "email=" + $mail + "&password=" + $password;

		$.ajax({
			type: "POST",
			// url: "../../application/controllers/EtudiantController::login",
			url: "<?php echo site_url(); ?>/connexion",
			data: donnee,
			success: function (miverina) {
				if (miverina != "success") {
					$(".spinner-border").hide();
					$("#btn-conn").show();
					$("#retour").show().text("Adresse email ou mot de passe incorrect");
				} else if (miverina == "success") {
					location.href = "<?= base_url() ?>";
				}
			},
			error: function () {
				$(".spinner-border").hide();
				$("#btn-conn").show();
				$("#retour").show().text("Erreur de connexion au serveur");
			},
		});
		return false;
	});
});

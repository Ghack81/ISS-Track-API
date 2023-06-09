<!DOCTYPE html>
<html>
<head>
	<title>Localisation des astres</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#search-form').on('submit', function(e) {
				e.preventDefault();
				var searchQuery = $('#search-query').val();
				$.ajax({
					url: 'https://api.nasa.gov/planetary/search',
					data: {
						q: searchQuery,
						api_key: 'Key-API-Nasa'
					},
					success: function(result) {
						// Ici, vous pouvez afficher les résultats de la recherche
						console.log(result);
					},
					error: function() {
						alert("Erreur lors de la recherche");
					}
				});
			});
		});
	</script>
</head>
<body>
	<h1>Recherche d'astres et d'objets astronomiques</h1>
	<form id="search-form">
		<label for="search-query">Nom de l'objet astronomique:</label>
		<input type="text" id="search-query">
		<button type="submit">Rechercher</button>
	</form>

</body>
</html>

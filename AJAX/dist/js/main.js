$(document).ready(function() {
	$.ajax({
		url:'server.php',
		method: 'GET',
		success: function(data) {
			var playlists = data;

			var source = $('#card-template').html();
			var template = Handlebars.compile(source);

			for (var i = 0; i < playlists.length; i++) {
				var playlist = playlists[i];
				console.log(playlist.Album);
				var context = {album:playlist.Album, artist:playlist.Artist,year:playlist.Year,poster:playlist.Poster };
				var cardTemplate = template(context);

				$('.card-container').append(cardTemplate);


			};

		},
		error: function(error) {
			alert('API Issue');
		}

	});
});

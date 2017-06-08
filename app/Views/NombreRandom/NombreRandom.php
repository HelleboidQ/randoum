<div class="container">
	<div class="row">

		<label for="nombre_mini">Nombre minimum</label>
		<input type="text" id="nombre_mini" name="nombre_mini" />
		<label for="nombre_maxi">Nombre maximum</label>
		<input type="text" id="nombre_maxi" name="nombre_maxi" />

		<input type="button" class="btn btn-success" value="Trouve moi un nombre !!! " onclick="findNumber();" />


		<br /><br />
		<div id="resultat_nombre">

		</div>
	</div>
</div>

<script>
function findNumber(){
	 $.ajax({
                type: 'POST',
                url: 'app/Templates/Default/Assets/ajax/nombreRandom.php',
                data: {
                    nombre_mini : $('#nombre_mini').val(),
                    nombre_maxi : $('#nombre_maxi').val() 
                },
                success: function (data) {
                    $('#resultat_nombre').html(data);
                }
            });
}
</script>
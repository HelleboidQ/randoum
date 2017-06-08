<?php
$result_piece = rand(0,1);
?>

<div id="piece" class="col-xs-12">
	<img src="app/Templates/Default/Assets/images/pile.png" id="pile" width="200"  height="200" onclick="toto();" />
	<!--<ul class="fc-slides">
		<li>
		</li>
		<li><img src="app/Templates/Default/Assets/images/face.jpg" /></li>
	</ul>-->
</div>


<script>
	/*console.log(<?= $result_piece?>);
	var temps_piece = 10 + <?= $result_piece ?> ; */
	function toto(){
		temps_piece = 10 + (Math.floor(Math.random() * (1 - 0 + 1) + 0));
		console.log(temps_piece);
		for(var i=0; i<= temps_piece; i++){
			rotate(i);
		}
		
	}

	function rotate(i){
		setTimeout(function(){
	//$('#'+id).animate('transform: rotate3d(0,1,0,60deg);');
	var source = "";
	var degree = 0;
	if(i === temps_piece){
		degree=0
	}else{
		degree = -180;
	}
	$('#pile').animate({  borderSpacing: degree }, {
		step: function(now,fx) {
			$(this).css('transform' ,'rotate3d(0,1,0,'+now+'deg)');
		},
		duration:300
	},'linear');
	if(i%2 === 0){
		source = "app/Templates/Default/Assets/images/face.jpg";
	}else{
		source = "app/Templates/Default/Assets/images/pile.png";
	}
	$('#pile').attr('src', source);
}, 300*i);
	}

</script>

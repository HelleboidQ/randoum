</div>
 
<?php
Assets::js([
	'https://code.jquery.com/jquery-1.12.1.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
     Url::templatePath().'js/jquery-1.11.1.min.js',
     Url::templatePath().'js/owl.carousel.min.js',
     Url::templatePath().'js/wow.min.js',
     Url::templatePath().'js/typewriter.js',
     Url::templatePath().'js/jquery.onepagenav.js',
     Url::templatePath().'js/main.js', 
]);
echo $js; //place to pass data / plugable hook zone
echo $footer; //place to pass data / plugable hook zone
?>

</body>
</html>

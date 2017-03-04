$(document).foundation();

(function(){
	$('.thumbimg img').on('click', function () {
		$.getJSON('admin/phpscripts/ajaxQuery.php',{ photo:this.id}, function(data){
			//console.log(data);
			
			$('.imageName').text(data.gallery_title);
			$('.photoGallery img').attr('src', 'images/gallerypics/'+ data.gallery_img);
			$('.photoDesc p').text(data.gallery_desc);
			$('.photoCred').text('Photo by: '+data.gallery_photographer);
		});
	});

	$fade = $('.thumbimg');
	
	$fade.click(function(){
		$(this).fadeTo(1,0.5);
		$fade.not($(this)).fadeTo(1,1);
	});

})();
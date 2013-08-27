var $j = jQuery.noConflict();
//set section height
$j(function() {
	$j('ul.navbar-nav li.dropdown > a').addClass('dropdown-toggle');
	$j('a.dropdown-toggle').attr('data-toggle', 'dropdown').append('<b class="caret"></b>');
	$j('ul.sub-menu').removeClass('sub-menu').addClass('dropdown-menu');
});


/*Bootstrap component script - TBD on how to load these separately as needed */
//Offcanvas Script
$j(document).ready(function() {
  $j('[data-toggle=offcanvas]').click(function() {
    $j('.row-offcanvas').toggleClass('active');
  });
});



/* Wedding Site Child Theme Scripts - to be removed and placed into Child Theme scripts file once theme issues resolved */
//RSVP AJAX
/*$j('form#rsvp').submit(function(e){
	e.preventDefault();
	var url = this.href;

	console.log( $j(this).serialize() );
	
	$j.ajax({
			url: '../../../../../wp-admin/admin-ajax.php',
			data: {
				'action': 'vidRefresh',
				'vidID': postID
			},
			dataType: 'json',
			success: function(data){
				console.log( data );
			},
			error: function(MLHttpRequest, textStatus, errorThrown){
				alert(errorThrown);
			}
		});

});*/
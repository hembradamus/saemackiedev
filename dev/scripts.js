var $j = jQuery.noConflict();
//set section height
$j(function() {
	$j('ul.navbar-nav li.dropdown > a').addClass('dropdown-toggle');
	$j('a.dropdown-toggle').attr('data-toggle', 'dropdown').append('<b class="caret"></b>');
	$j('ul.sub-menu').removeClass('sub-menu').addClass('dropdown-menu');
});
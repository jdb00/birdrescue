var $news = $('.news-main').isotope({
    // options
    itemSelector: '.news-item',
    layoutMode: 'fitRows'
});

$news.isotope({ filter: '.seabirds' });
$news.isotope({ filter: '.birds' });
$news.isotope({ filter: '.archive' });
$news.isotope({ filter: '.hazards' });
$news.isotope({ filter: '.sponsors' });

$('.news-filters').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    $news.isotope({ filter: filterValue });
});

$(function() {
    // Isotope stuff...
    $news.isotope({filter: '*'});
    // more Isotope stuff...
});



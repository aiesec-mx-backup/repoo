require.config({
    paths: {
        'jquery': 'dependencies/jquery-1.11.0.min',
        'jqueryvalidate': 'dependencies/jquery.validate.min',
        'bootstrap': 'dependencies/bootstrap.min',
        'modernizr': 'dependencies/modernizr.min',
        'async': 'async',
    },

    shim: {
        'bootstrap': ['jquery'],
        'twitter': ['jquery'],
        'setup': ['jquery', 'modernizr'],
        'portfolio': ['jquery', 'jquery.colorbox-min'],
        'testimonials': ['jquery'],
        'blog': ['jquery', 'modernizr'],
        'jqueryvalidate': ['jquery'],
        'paginated-items': ['jquery'],
        'contact': ['jquery'],
        'mailchimp-form': ['jquery'],
        'jquery.colorbox-min': ['jquery'],
        'google-maps': ['jquery', 'async!https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false']
    }
});

requirejs(['js/index.js']);


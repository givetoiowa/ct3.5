(function() {

    require({
        urlArgs: "b=" + ((new Date()).getTime()),
        paths: {
            jquery: 'vendor/jquery/jquery',
            fancybox: 'vendor/jquery.fancybox',
            bxslider: 'vendor/jquery.bxslider',
            underscore: 'vendor/underscore/underscore',
            progressChart: 'app/progressChart'
        },
        shim: {
            'jquery': {
                exports: '$'
            },
            'fancybox': {
                deps: ['jquery']
            },
            'bxslider': {
                deps: ['jquery']
            },
            'underscore': {
                exports: '_'
            }
        }
    }, ['app/iowa', 'app/campaign'], function(IOWA) {

    });

}).call(this);
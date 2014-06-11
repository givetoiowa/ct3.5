define(['jquery', 'app/iowa', 'underscore', 'fancybox', 'bxslider', 'progressChart'], function($, IOWA, _) {

    // Run jQuery in no conflict to prevent clashing with other libs
    $.noConflict();
    console.log(IOWA);
    var campaign = {
        campaign: function() {
           document.write(monthlyProgress.getPercent());

           document.write(monthlyProgress.getGoal());

           document.write(monthlyProgress.getCurrent());
        },
        startup: function() {
        }
    };
    _.extend(IOWA, campaign);

    IOWA.startup();
});
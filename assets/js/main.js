jQuery(document).ready(function($) {
    // Click to top
    $("#go-to-top i").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });
});
var blockchains = {
    // INITIALIZE
    init: function()
    {
        blockchains.forms();
        $('body').on('click', '.ga-track', function(e)
        {
            e.preventDefault();
            var href = $(this).attr('href');
            var action = $(this).attr('data-action');
            var place = $(this).attr('data-place');
            blockchains.track(e, href, action, place);
        });
    },
    forms: function()
    {
        $('#main-content table').each(function(i)
        {
            $(this).addClass('table table-striped');
        });
    },
    track: function(e, href, action, place)
    {
        e.preventDefault();
        _gaq.push(
            [
                '_trackEvent',
                action,
                place,
                href
            ]
        );
        setTimeout(function()
        {
            location.href = href;
        }, 200);
        return false;
    }
};

$(document).ready(function()
{
    blockchains.init();
});
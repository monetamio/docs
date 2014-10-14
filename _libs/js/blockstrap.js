var blockchains = {
    // INITIALIZE
    init: function()
    {
        blockchains.forms();
    },
    forms: function()
    {
        $('#main-content table').each(function(i)
        {
            $(this).addClass('table table-striped');
        });
    }
};

$(document).ready(function()
{
    blockchains.init();
});
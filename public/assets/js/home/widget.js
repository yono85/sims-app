function createNewModal(el)
{
    $('body').find('.modal-new-view').remove();

    var inModal = $('body').find('#'+el.attr('data-widget')).html();

    var modal = '<div class="prover-modal-view modal-new-view white">';
    modal += inModal;
    modal += '</div>';

    $('body').append(modal);
}

$(document).ready(function()
{
    $('body').on('click', '.cmdNewModal', function(e)
    {
        e.preventDefault();

        if( $(this).attr('role') === 'off')
        {
            $(this).attr('role', 'on');
            if($(this).attr('aria-dropdown') === 'true' )
            {
                $(this).parents('div.open').find('button[role="on"]').attr('role','off');
                $(this).parents('div.open').removeClass('open');
            }
            createNewModal($(this));
        }
    });

    return false;
});
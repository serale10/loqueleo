$(document).ready(function() {
    $('#button-menu').on('click', function() {
        var buttonsContainer = $('.buttons');
        
        if (buttonsContainer.height() === 0) {
            var fullHeight = buttonsContainer.get(0).scrollHeight;
            buttonsContainer.css('height', fullHeight + 'px');
        } else {
            buttonsContainer.css('height', '0');
        }
    });
});
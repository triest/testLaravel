$( document ).ready(function(e) {
    function get_data() {
        $.ajax({
            url: "test.html",
            context: document.body
        }).done(function() {
            $( this ).addClass( "done" );
        });
    }
    get_data();
});


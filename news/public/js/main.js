$( document ).ready(function(e) {
    function get_data() {
        console.log("test");
        $.get("http://news/public/dataformain", function(data){
            console.log(data)

        });
    }

    get_data();
});


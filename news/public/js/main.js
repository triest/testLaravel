$(document).ready(function (e) {
    function get_data() {
        console.log("test");
        $.getJSON("http://news/public/dataformain", function (data) {
            console.log(data);
            var central = new Array();
            $.each(data, function (index, element) {
                //console.log('title: '+element.title);
                // console.log('position: '+element.position)
                if (element.position == 'central') {
                    //  console.log('central')
                    $("test").append('<div class="col-md-4">');
                    $("test").append('<h4>' + element.title + '</h4>');
                    $("test").append('<h6>' + element.created_at + '</h6>');
                    $("test").append('<p>' + element.description + '</p>');
                    $("test").append('</div>');
                }
                if (element.position == 'header') {
                    console.log('header')
                }
                if (element.position == 'down') {
                    console.log('down')
                }
                if (element.position == 'side') {
                    console.log('side')
                }
            });
        });
    }

    get_data();

});

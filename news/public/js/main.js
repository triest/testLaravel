$(document).ready(function (e) {
    function get_data() {
        console.log("test");
        $.getJSON("http://news/public/dataformain", function (data) {
          //  console.log(data);
            var central = new Array();
            $.each(data, function (index, element) {
                //console.log('title: '+element.title);
                // console.log('position: '+element.position)
                if (element.position == 'central') {
                  //  console.log('central')
                     central.push('<H2>'+element.title+'</H2>')
                   // $('#main_div').append('<div class="col-sm">');
                  //  $('#main_div').append('<h2>' + element.title+ '</h2>');
                //    $('#main_div').append('</div>');
                   // $('#main_div.description').append('<p>' + element.description+ '</p>');
                     $("ol").append('<h4>' + element.title+ '</h4>');
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
            //   $('<select id="date"/>').append(options.join('')).appendTo('#central');
        });
    }

    get_data();
});

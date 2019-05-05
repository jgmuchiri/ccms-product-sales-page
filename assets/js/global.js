$(document).ready(function () {
    $('.btn-data').click(function (e) {
        // e.preventDefault();
        // if (confirm('Please save your progress before adding new data')) {
        //
        // }
        var modal = $(this).attr('id');
        $(modal).modal('show');

    });

    // Toggle Function
    $('.toggle').click(function () {
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms
        $('.form').animate({
            height: "toggle",
            'padding-top': 'toggle',
            'padding-bottom': 'toggle',
            opacity: "toggle"
        }, "slow");
    });
    $('[data-toggle="tooltip"]').tooltip();

    //
    //$('.editor').summernote({
    //  toolbar: [
    //    // [groupName, [list of button]]
    //    ['style', ['bold', 'italic', 'underline', 'clear']],
    //    ['font', ['strikethrough', 'superscript', 'subscript']],
    //    ['fontsize', ['fontsize']],
    //    ['color', ['color']],
    //    ['para', ['ul', 'ol', 'paragraph']],
    //    ['height', ['height']]
    //  ]
    //});

    // show active tab on reload
    if (location.hash !== '') $('a[href="' + location.hash + '"]').tab('show');

    // remember the hash in the URL without jumping
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        if (history.pushState) {
            history.pushState(null, null, '#' + $(e.target).attr('href').substr(1));
            $('.cv-edit-form').find('input[name=curPage]').val(location.hash);
        } else {
            location.hash = '#' + $(e.target).attr('href').substr(1);
            $('.cv-edit-form').find('input[name=curPage]').val(location.hash);
        }
    });

    $('.nav-item').on('click', function (e) {
        //store hash
        var target = this.hash;
        // e.preventDefault();
        $('body').scrollTo(target, 800, {offset: -70, 'axis': 'y'});
    });

    $('input[type=text],input[type=time],input[type=date],input[type=password],input[type=email],textarea,select').addClass('form-control');

});

//fix youtube embeding
function yoube(url) {
    var regExp = /^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);
    if (match && match[2].length == 11) {
        return 'https://www.youtube.com/embed/'+match[2];
    } else {
        return url;
    }
}
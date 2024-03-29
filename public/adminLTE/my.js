$('.delete').click(function () {
    var res = confirm('Confirm action');
    if (!res) return false;
});

$('.del-item').on('click', function () {
    var res = confirm('Confirm action');
    if (!res) return false;
    var $this = $(this),
        id = $this.data('id'),
        src = $this.data('src');
    $.ajax({
        url: adminPath + '/product/delete-gallery',
        data: {id: id, src: src},
        type: 'POST',
        success: function (res) {
            if (res == 1) {
                $this.fadeOut();
            }
        },
        error: function () {
            alert("Error!");
        }
    })
});

$('.del-image').on('click', function () {
    var res = confirm('Confirm action');
    if (!res) return false;
    var $this = $(this),
        id = $this.data('id'),
        src = $this.data('src');
    $.ajax({
        url: adminPath + '/product/delete-image',
        data: {id: id, src: src},
        type: 'POST',
        success: function (res) {
            if (res == 1) {
                $this.fadeOut();
            }
        },
        error: function () {
            alert("Error!");
        }
    })
});

/* Search */
var products = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        wildcard: '%QUERY',
        url: adminPath + '/search/typeahead?query=%QUERY'
    }
});

products.initialize();

$("#typeahead").typeahead({
    //hint: false,
    highlight: true
},{
    name: 'products',
    display: 'title',
    limit: 9,
    source: products
});

$('#typeahead').bind('typeahead:select', function (ev, suggestion) {
    //console.log(suggestion);
    window.location = adminPath + '/search?s=' + encodeURIComponent(suggestion.title);
});

// SummerNote editor
$(function () {
    // SummerNote
    $('.textarea').summernote({
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['fullscreen', 'codeview', 'help']],
        ],
        disableDragAndDrop: true
    })
})

// Reset filters
$('#reset-filter').click(function() {
    $('#filter input[type=radio]').prop('checked', false);
    return false;
});

// Reset size
$('#reset-size').click(function() {
    $('#reset select').prop('selectedIndex', 0);
    return false;
});

// Select2
$(".select2").select2({
    placeholder: 'Enter product name',
    minimumInputLength: 2,
    cache: true,
    ajax: {
        url: adminPath + "/product/related-product",
        delay: 250,
        dataType: 'json',
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            return {
                results: data.items,
            }
        }
    }
});

// Upload images
if ($('div').is('#single')) {
    var buttonSingle = $('#single'),
        buttonMulti = $('#multi'),
        file;
}
if (buttonSingle){
    new AjaxUpload(buttonSingle, {
        action: adminPath + buttonSingle.data('url') + '?upload=1',
        data: {name: buttonSingle.data('name')},
        name: buttonSingle.data('name'),
        onSubmit: function (file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif)$/i.test(ext))) {
                alert('Error!');
                return false;
            }
        },
        onComplete: function(file, response) {
            response = JSON.parse(response);
                $('.' + buttonSingle.data('name')).html(
                    '<img src="images/' + response.file + '" style="max-height: 150px;">');
        }
    });
}
if (buttonMulti) {
    new AjaxUpload(buttonMulti, {
        action: adminPath + buttonMulti.data('url') + '?upload=1',
        data: {name: buttonMulti.data('name')},
        name: buttonMulti.data('name'),
        onSubmit: function (file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif)$/i.test(ext))) {
                alert('Error!');
                return false;
            }
        },
        onComplete: function(file, response) {
            response = JSON.parse(response);
                $('.' + buttonMulti.data('name')).append(
                    '<img src="images/' + response.file + '" style="max-height: 150px;">');
        }
    });
}

$('#add').on('submit', function () {
    if (!isNumeric($('#category_id').val())) {
        alert('Choose category!');
        return false;
    }
});

$('#details').on('submit', function () {
    if (!isNumeric($('#size').val())) {
        alert('Choose size!');
        return false;
    }
    if (!isNumeric($('#quantity').val())) {
        alert('Choose quantity!');
        return false;
    }
});

function isNumeric(n) {
 return !isNaN(parseFloat(n)) && isFinite(n);
}



"use strict";
// Class definition

var KTSummernoteDemo = function () {
    // Private functions
    var demos = function () {
        $('.summernote').summernote({
            // height: 200,
            tabsize: 2,
            placeholder: 'Enter Product Description ',
            // // toolbar: [
            // //     // ['style', ['style']],
            // //     // ['font', ['bold', 'italic', 'underline', 'clear']],
            // //     // ['fontname', ['fontname']],
            // //     // ['color', ['color']],
            // //     // ['para', ['ul', 'ol', 'paragraph']],
            // //     // ['height', ['height']],
            // //     // ['table', ['table']],
            // //     // ['insert', ['link', 'picture', 'hr']],
            // //     // ['view', ['fullscreen', 'codeview']],
            // //     ['view', ['fullscreen', ]],
            // //     ['help', ['help']]
            // ],

        });
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

// Initialization
jQuery(document).ready(function() {
    KTSummernoteDemo.init();
});

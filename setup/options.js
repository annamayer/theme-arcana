var ipDesignOptions = {
    textColor: function (value) {
        $('.ipPreviewWidget').css('color', value);
        $('.ipPreviewWidget .note').css('color', value);
        $('.ipPreviewWidget .signature').css('color', value);
        $('.ipPreviewWidget .caption').css('color', value);

        ipDesign.reloadLessFiles(['theme']);
    },
    linkColor: function (value) {
        $('.ipPreviewWidget a').css('color', value);
        $('.ipPreviewWidget .button').css('background-color', value);
        $('.ipModuleForm .ipmControlSubmit').css('background-color', value);
        ipDesign.reloadLessFiles(['theme']);
    },
    backgroundColor: function (value) {
        'use strict';
        $('#main-wrapper').css('background-color', value);
        $('#features-wrapper section').css('background-color', value);
    },
    headingColor: function (value) {
        'use strict';
        $('.ipwTitle').css('color', value);
    },
    headingBackgroundColor: function (value) {
        'use strict';
        $('#site-header').css('background-color', value);
    },
    footerColor: function (value){
        'use strict';
        $('footer .ipPreviewWidget').css('color', value);
    }
};

var Login = function() {
    var logininit = function() {
        var form = $('#login-forms');
        var rules = {
            email: { required: true, email: true },
            password: { required: true },
        };

        handleFormValidate(form, rules, function(form) {
            handleAjaxFormSubmit(form, true);
        });
    };
    return {
        init: function() {
            logininit();
        },
    }
}();
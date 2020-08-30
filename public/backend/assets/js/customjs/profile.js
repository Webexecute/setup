var Profile = function() {

    var validateForm = function() {
        var form = $('#editadminprofile');
        var rules = {
            firstname: { required: true },
            lastname: { required: true },

            email: { required: true, email: true, },
        };
        var messages = {
            firstname: {
                required: "કૃપા કરીને પ્રથમ નામ દાખલ કરો!",
            },
            lastname: {
                required: "કૃપા કરીને છેલ્લું નામ દાખલ કરો!",
            },
            email: {
                required: "કૃપા કરીને ઇમેઇલ દાખલ કરો!",
                email: "કૃપા કરીને ઇમેઇલ માન્ય દાખલ કરો!"
            },

        };
        handleFormValidateWithMsg(form, rules, messages, function(form) {
            handleAjaxFormSubmit(form, true);
        });

    };

    var passwordForm = function() {
        var form = $('#editadminpassword');
        var rules = {
            oldpassword: { required: true },
            newpassword: { required: true },

            cpassword: { required: true, equalTo: "#newpassword" },
        };
        var messages = {
            oldpassword: {
                required: "કૃપા કરીને જૂનો સુરક્ષા શબ્દ દાખલ કરો!",
            },
            newpassword: {
                required: "કૃપા કરીને નવો સુરક્ષા શબ્દ દાખલ કરો!",
            },
            cpassword: {
                required: "કૃપા કરીને બીજી વાર સુરક્ષા શબ્દ દાખલ કરો!",
                equalTo: "કૃપા કરીને સમાન સુરક્ષા શબ્દ દાખલ કરો!"
            },

        };
        handleFormValidateWithMsg(form, rules, messages, function(form) {
            handleAjaxFormSubmit(form, true);
        });

    };

    return {
        edit: function() {
            validateForm();
        },
        editpassword: function() {
            passwordForm();
        },
    }
}();
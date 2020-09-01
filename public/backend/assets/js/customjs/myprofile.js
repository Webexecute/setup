var Myprofile = function(){
    var editProfile = function(){
        var form = $('#edit-profile');
        var rules = {
            username: {required: true},
            email: {required: true,email:true},
            

        };
        var messages = {
            username: {
                required: "Please enter category name",
            },
            email: {
                required: "Please enter category name",
            },
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form,true);
        });
    }
    return{
        init:function(){
           editProfile();
        }
    }
}();
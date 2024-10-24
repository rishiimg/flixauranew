$(document).ready(function () {
    //social form
    $("#socialform").validate({
        rules: {
            instaUrl: {
                required: true,
            },
            facebookUrl: {
                required: true,
            },
            twitterUrl: {
                required: true,
            },
            emailUrl: {
                required: true,
            },
        },
        messages: {
            instaUrl: "Please enter insta url",
            facebookUrl: "Please enter facebook url",
            twitterUrl: "Please enter twitter url",
            emailurl: "Please enter email url",
        },
        submitHandler: function (socialform) {
            form.submit();
        },
    });

    //youtube form 
    $("#youtubeform").validate({
        rules:{
            tittle: {
                required: true,
                minlength: 3,
                maxlength: 200
            },
            status: {
                required: true,
            },
            link: {
                required: true,
                minlength: 3,
                maxlength: 200
            },
        },
        messages: {
            tittle: {
                required: "tittle field is required",
                maxlenngth: "tittle field cannot be more than 200 characters",
                minlength: "tittle field cannot be less than 3 characters",
            },
            status: "Please select status",
            link : {
                required : "link filed is required",
                maxlenngth: "tittle field cannot be more than 200 characters",
                minlength: "tittle field cannot be less than 3 characters",
            },
        },
        submitHandler: function (youtubeform) {
            form.submit();
        }
    })

    //contact form 
    $("#contactfrontpage").validate({
        rules:{
            name: {
                required: true,
            },
            email: {
                required: true,
            },
            phone: {
                required: true,
            },
            city: {
                required: true,
            },
            service: {
                required: true,
            },
            budget: {
                required: true,
            },
            message: {
                required: true,
            },

        },
        messages: {
            name: {
                required: "Name field is required",
            },
            email: {
                required: "email field is required",
                email : "Enter valid email address",
            },
            phone: {
                required : "phone filed is required",
            },
            city: {
                required: "City field is required",
            },
            service: {
                required: "service field is required",
            },
            budget:{
                required: "Budget field is required",
            },
            message: {
                required: "Message field is required",
            },
        },
        submitHandler: function (youtubeform) {
            form.submit();
        }
    })
});

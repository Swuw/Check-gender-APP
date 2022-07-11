$(document).ready(function() {

    $(document).on('click', '.button-form', function (event) {
        event.preventDefault();
console.dir('click');
        let firstName = $('.firstName').val();
        let country = $('.country').val();
        console.dir(firstName);
        console.dir(country);

        let data = {
            firstName: firstName,
            country: country
        }

        $.ajax({
            // url: "/?FirstName=" + firstName + "&country=" + country,
            url: "/result",
            type: "GET",
            data: data,
            success: function (data) {
                console.dir(data);
                $('.result-field').html(data);
            }
        });
    });
});

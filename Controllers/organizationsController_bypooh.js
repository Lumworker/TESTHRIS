$(document).ready(function() {
    welcome();
    // getOrganizations();
});

function welcome() {
    var openEnderContent = '&lt;p&gt;&lt;span style="color: #ff0000;"&gt;DDD&lt;/span&gt;!!!!!&lt;strong&gt;666666666666&lt;/strong&gt;&lt;/p&gt;';

    $('#open_ender_output').html(
        // create an element where the html content as the string
        $('<div/>', {
            html: openEnderContent
                // get text content from element for decoded text  
        }).text()
    )
}

function myFunction() {
    var openEnderContent = '&lt;p&gt;&lt;span style="color: #1a1d52;"&gt;DDD&lt;/span&gt;!!!!!&lt;strong&gt;aong&lt;/strong&gt;&lt;/p&gt;';

    $('#a').html(
        // create an element where the html content as the string
        $('<div/>', {
            html: openEnderContent
                // get text content from element for decoded text  
        }).text()
    )
}

function getOrganizations() {
    
}



function addOrganizations() {

    //alert("getOrganizations");
    $('form').submit(function(event) { //Trigger on form submit
        $('#name + .throw_error').empty(); //Clear the messages first
        $('#success').empty();

        //Validate fields if required using jQuery

        var postForm = { //Fetch form data
            'name': $('input[name=name]').val() //Store name fields value
        };

        $.ajax({ //Process the form using $.ajax()
            type: 'POST', //Method type
            url: '../../Model/organizationsModel.php', //Your form processing file URL
            data: postForm, //Forms name
            dataType: 'json',
            success: function(data) {
                if (!data.success) { //If fails
                    if (data.errors.name) { //Returned if any error from process.php
                        $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                    }
                } else {
                    $('#success').fadeIn(1000).append('<p>' + data.posted + '</p>'); //If successful, than throw a success message
                    console.log("success");

                }
            }
        });


        // $.post("../../Model/organizationsModel.php", { postForm: postForm }).done(function(data) {
        //     $('#success').fadeIn(1000).append('<p>' + data.posted + '</p>'); //If successful, than throw a success message

        // }).fail(
        //     function(err) {
        //         $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
        //     });


        event.preventDefault(); //Prevent the default submit
    });
}



function editOrganizations() {}

function deleteOrganizations() {}

// ยังมีในส่วนที่เกี่ยวข้องกับหน้า Organizations ในหน้าอื่นๆ อ้างอื่นจากไฟล์ Organizations
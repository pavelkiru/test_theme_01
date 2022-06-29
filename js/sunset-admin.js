
jQuery(document).ready(function($){

    const defaultImage = `${window.location.origin}/wp-content/uploads/2022/06/person_icon.png`

    if($('img.url_picture').attr('src') == "") {
        $('.url_picture').attr('src',defaultImage)
    }

    $('#upload_profile_picture').on('click', e => {
        e.preventDefault();
        console.log('hi')
        let image = wp.media({
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
            .on('select', function(e){
            let uploaded_image = image.state().get('selection').first();
            let image_url = uploaded_image.toJSON().url;

            $('.url_picture').attr("src",image_url);
            $('#get_url_picture').val(image_url);



            if ( !$("#button_upload_description")[0]) {
                $('#upload_profile_picture').after( "<p class='description'id='button_upload_description'>Don't forget to save!</p>" );
            }
        });
    })

    $('#delete_image').on('click', () => {
        $('.url_picture').attr('src',defaultImage)

        if ( !$("#button_delete_description")[0]) {
            $('#delete_image').after( "<p class='description' id='button_delete_description'>Don't forget to save!</p>" );
        }

    })

    //
    // if ($("#setting-error-settings_updated")[0]){
    //
    //     console.log('have')
    // } else {
    //     console.log('nothing')
    //
    // }



    console.log('ready')

});
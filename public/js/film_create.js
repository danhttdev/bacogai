$(document).ready(function () {
    var base64;
    $("#photo").change(function(){
        var file = this.files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
          base64=reader.result;
        }
        reader.readAsDataURL(file);
    });
    $("#film-create-ajax").submit(function(e) {
        e.preventDefault(); 
        var url = "/api/films"; 
        var name = $('#film-create-ajax').find('input[name="name"]').val();
        var description = $('#film-create-ajax').find('input[name="description"]').val();
        var realease_date = $('#film-create-ajax').find('input[name="realease_date"]').val();
        var rating = $('#film-create-ajax').find('input[name="rating"]').val();
        var ticket_price = $('#film-create-ajax').find('input[name="ticket_price"]').val();
        var country = $('#film-create-ajax').find('input[name="country"]').val();
        var photo = $('#film-create-ajax').find('input[name="photo"]').val();
        genre=[];
        var cboxes = document.getElementsByName('genre[]');
           var len = cboxes.length;
           for (var i=0; i<len; i++) {
               if (cboxes[i].checked) genre.push(cboxes[i].value);
        }
        
        dataform = {name,
            description,
            realease_date,
            rating,
            ticket_price,
            country,
            'genre':JSON.stringify(genre),
            'photo':base64}
            console.log(dataform)
        $('#error-create-name').html('');
        $('#error-create-description').html('');
        $('#error-create-realease_date').html('');
        $('#error-create-rating').html('');
        $('#error-create-ticket_price').html('');
        $('#error-create-genre').html('');
        $('#error-create-country').html('');
        var formData = new FormData( );
        formData.append('name',name);
        formData.append('description',description);
        formData.append('realease_date',realease_date);
        formData.append('rating',base64);
        formData.append('photo',base64);

        if(JSON.stringify(genre).length == 2 ){
            alert('The film must be at least one genre');
        }else{
            $.ajax({
                type: "POST",
                url: url,
                data: dataform, 
                success: function(data)
                {
                    alert('Created successfully')
                    $(location).attr('href', '/films');
                },
                error:function(err){
                    Object.keys(err.responseJSON.msg).map(item=>{
                        $('#error-create-'+item).html(err.responseJSON.msg[item][0]);
                    })
                }
                });
            }
        e.preventDefault();
    });
    function base64ToBlob(base64, mime) 
    {
        mime = mime || '';
        var sliceSize = 1024;
        var byteChars = window.atob(base64);
        var byteArrays = [];

        for (var offset = 0, len = byteChars.length; offset < len; offset += sliceSize) {
            var slice = byteChars.slice(offset, offset + sliceSize);
            var byteNumbers = new Array(slice.length);
            for (var i = 0; i < slice.length; i++) {
                byteNumbers[i] = slice.charCodeAt(i);
            }
            var byteArray = new Uint8Array(byteNumbers);
            byteArrays.push(byteArray);
        }
        return new Blob(byteArrays, {type: mime});
    }
});
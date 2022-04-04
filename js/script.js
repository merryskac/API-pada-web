function getMovies(){
    $.ajax({
        url:'http://omdbapi.com',
        type:'get',
        datatype:'json',
        data:{
            'apikey':'b6661edf',
            's':$('#search-input').val()
        },
        success: function(result){
            if(result.Response=="True"){
                 let movies = result.Search;
                 
                 $.each(movies, function(i, data){
                    $('#movie-list').append(`
                    <div class="col-md-3 mt-3">
                        <div class="card mb-3 h-100"  >
                        <img src="`+data.Poster+`" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">`+data.Title+`</h5>
                        <p class="card-text">(`+data.Year+`)</p>
                        <a href="#" class="btn btn-primary see-detail" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+data.imdbID+`">Details</a>
                        </div>
                    </div>
                  <div>
                    `)
                    $('#search-input').val('')
                 });
 
            }else{
                $('#movie-list').append('<h2>'+result.Error+'</h2>')
                $('#search-input').val('')
            }
        }
    });
}

$(document).ready(function(){
   $.ajax({
       url:'http://omdbapi.com',
       type:'get',
       datatype:'json',
       data:{
           'apikey':'b6661edf',
           's':'marvel'
       },
       success: function(result){
           if(result.Response=="True"){
                let movies = result.Search;
                
                $.each(movies, function(i, data){
                    $('#movie-list').append(`
                    <div class="col-md-3 mt-3">
                        <div class="card mb-3 h-100"  >
                        <img src="`+data.Poster+`" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">`+data.Title+`</h5>
                        <p class="card-text">(`+data.Year+`)</p>
                        <a href="#" class="btn btn-primary see-detail" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+data.imdbID+`">Details</a>
                        </div>
                    </div>
                  <div>
                    `)
                    $('#search-input').html('')

                    
                });

           }else{
            $('#movie-list').append('<p>'+result.Error+'</p>')
           }
       }
   });

   $('#search-button').on('click',function(){
    $('#movie-list').html('');
    getMovies();
    });

    $('#search-input').on('keyup',function(e){
        if(e.keyCode===13){
            $('#movie-list').html('');
            getMovies();
        }
    });

    $('#movie-list').on('click','.see-detail',function(data){
        console.log($(this).data('id'))

        $.ajax({
            url:'http://omdbapi.com',
            type:'get',
            datatype:'json',
            data:{
                'apikey':'b6661edf',
                'i':$(this).data('id')
            },
            success: function(mov){
                if(mov.Response=="True"){
                    $('.modal-title').html(`
                        `+mov.Title+`
                    `)

                    $('.modal-body').html(`
                        <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="`+mov.Poster+`" class="img-fluid">
                            </div>

                            <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item">Released : `+mov.Released+`</li>
                                <li class="list-group-item">Genre : `+mov.Genre+`</li>
                                <li class="list-group-item">Rated : `+mov.Rated+`</li>
                                <li class="list-group-item">Actors : `+mov.Actors+`</li>
                                <li class="list-group-item">Country : `+mov.Country+`</li>
                                
                            </ul>
                            </div>
                        </div>
                        </div>
                    `)

                }
            }
        });
    });

});



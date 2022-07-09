<html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Specification manager</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{  asset('sweetalert2/sweetalert2.min.css') }}">
        <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}
</style>
        @livewireStyles
        </head>
        <body>
        <ul>
  <li><a href="users" >Users</a></li>
  <li><a href="specifications" class="active">Specification</a></li>
  <li><a href="contact.asp">About</a></li>
  <li style="float:right"><a class="active" href="{{ route('profile.show')}}">Profile</a></li>
</ul>
        
            <div class="container">
                <div class="row" style="margin-top: 45px; margin-right:500px">
                    <div class="col-md-6 offset-md-3">
                      <h4>Specification Manager</h4>
                   
                 @livewire('specifications')
                    </div>
                </div>
            </div>


            <script src="{{ asset('jquery-3.4.1.min.js')}}" ></script>
            <script src="{{ asset('bootstrap\js\bootstrap.min.js')}}"></script>
            <script src="{{ asset('bootstrap\js\bootstrap.bundle.min.js')}}"></script>
            <script src="{{ asset('sweetalert2/sweetalert2.min.js')}}"></script>
            @livewireScripts
            <script>
                window.addEventListener('openAddspecificationModal',function(){
                    $('.addSpecification').find('span').html('');
                    $('.addSpecification').find('form')[0].reset();
                    $('.addSpecification').modal('show');
                })

                window.addEventListener('closeAddSpecificationModal',function(){
                      $('.addSpecification').find('span').html('');
                      $('.addSpecification').find('form')[0].reset();
                      $('.addSpecification').modal('hide');
                      alert('New Specification Has been saved Succesfully');
                });

                window.addEventListener('openEditspecificationModal',function(event){
                    
                  $('.editSpecification').find('span').html();
                  $('.editSpecification').modal('show');
                  console.log('test');
                });

                window.addEventListener('closeEditUserModal',function(event){
                    $('.editSpecification').find('span').html();
                    $('.editSpecification').modal('hide');
                })


                

                window.addEventListener('SwalConfirm',function(event){
             swal.fire({
                 title:event.detail.title,
                 imageWidth:48,
                 imageHeight:48,
                 html:event.detail.html,
                 showCloseButton:true,
                 showCancelButton:true,
                 cancelButtonText:'Cancel',
                 confirmButtonText:'Yes,Delete',
                 cancelButtonColor:'#d33',
                 confirmButtonColor:'#3085d6',
                 width:300,
                 allowOutsideClick:false
             }).then(function (result) {
                 if(result.value){
                     window.livewire.emit('delete',event.detail.id);
                 }
               })
                });

             window.addEventListener('deleted',function(event){
                alert("specification data has been deleted");
             });   
                
            </script>
        </body>
</html>
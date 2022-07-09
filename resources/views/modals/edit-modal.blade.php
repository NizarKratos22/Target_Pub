<div class="modal fade editUser"  wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
 
   <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
       </button>         
    </div>
     <div class="modal-body">
        <form wire:submit.prevent="update">
            <input type="hidden" wire:model="uid">
           <div class="form-group">
                <div class="form-group"> 
                   <label for="">Full name</label>
                   <input type="text" class="form-control" placeholder="Full name" wire:model="upd_name">
                   <span class="text-danger">@error('upd_name'){{$message}}@enderror</span>
                </div>
              
                <div class="form-group">
                   <label for="">Email</label>
                   <input type="email" class="form-control" placeholder="Email" wire:model="upd_email" >
                   <span class="text-danger">@error('upd_email'){{$message}}@enderror</span>
                </div>
               

                <div class="form-group">
                   <label for="">Phone Number</label>
                   <input type="number" class="form-control" placeholder="Phone Number" wire:model="upd_phone" >
                   <span class="text-danger">@error('upd_phone'){{$message}}@enderror</span>
                </div>
                
                <div class="form-group">
                   <label for="">Address</label>
                   <input type="text" class="form-control" placeholder="address" wire:model="upd_adress" >
                   <span class="text-danger">@error('upd_adress'){{$message}}@enderror</span>
                </div>
                       
                <div class="form-group">
                   <label for="">Password</label>
                   <input type="password" class="form-control" placeholder="Password" wire:model="upd_password" >
                   <span class="text-danger">@error('upd_password'){{$message}}@enderror</span>
                </div>
               
                <div class="form-group">
                   <label for="">Confirm Password</label>
                   <input type="password" class="form-control" placeholder="Confirm Password" wire:model="upd_password" >
                </div>
                
                
                <div class="form-group">       
                   <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>           
                   <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div>

           </div>
        </form>
     </div>

   </div>  
  
  </div>
</div>
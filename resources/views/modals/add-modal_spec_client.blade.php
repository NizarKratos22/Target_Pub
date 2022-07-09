<div class="modal fade addReservation"  wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
 
   <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">ADD new Reservation</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
       </button>         
    </div>
     <div class="modal-body">
            <form wire:submit.prevent="save">

            
             <div class="form-group">

              <label for="category">Category</label>
              <input type="text" class="form-control" placeholder="Categorie name" wire:model="category">
              <span class="text-danger">@error('category'){{ $message }}@enderror</span>
             </div>

               <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" placeholder="title"  wire:model="title">
              <span class="text-danger">@error('title'){{ $message }}@enderror</span>
             </div>

             <div class="form-group">
              <label for="tasks">Tasks</label>
              <input type="text" class="form-control" placeholder="some tasks"  wire:model="tasks">
              <span class="text-danger">@error('tasks'){{ $message }}@enderror</span>
             </div>

             <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" placeholder="Description"  wire:model="description">
              <span class="text-danger">@error('description'){{ $message }}@enderror</span>
             </div>

       
   
             <div class="form-group">
                 <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary btn-sm">Save</button>
             </div>
            </form>
     
     </div>

   </div>  
  
  </div>
</div>
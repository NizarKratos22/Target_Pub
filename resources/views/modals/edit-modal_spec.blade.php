<div class="modal fade editSpecification"  wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
 
   <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Edit Specification</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
       </button>         
    </div>
     <div class="modal-body">
            <form wire:submit.prevent="update">

            <input type="hidden" wire:model="uid">
             <div class="form-group">

              <label for="upd_category">Category</label>
              <input type="text" class="form-control" placeholder="Categorie name" wire:model="upd_category">
              <span class="text-danger">@error('upd_category'){{ $message }}@enderror</span>
             </div>

               <div class="form-group">
              <label for="upd_title">Title</label>
              <input type="text" class="form-control" placeholder="title"  wire:model="upd_title">
              <span class="text-danger">@error('upd_title'){{ $message }}@enderror</span>
             </div>

             <div class="form-group">
              <label for="upd_tasks">Tasks</label>
              <input type="text" class="form-control" placeholder="some tasks"  wire:model="upd_tasks">
              <span class="text-danger">@error('upd_tasks'){{ $message }}@enderror</span>
             </div>

             <div class="form-group">
              <label for="upd_description">Description</label>
              <input type="text" class="form-control" placeholder="Description"  wire:model="upd_description">
              <span class="text-danger">@error('upd_description'){{ $message }}@enderror</span>
             </div>

       
   
             <div class="form-group">
                 <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
             </div>
            </form>
     
     </div>

   </div>  
  
  </div>
</div>
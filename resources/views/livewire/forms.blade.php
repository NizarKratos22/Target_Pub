<div>
  <button class="btn btn-primary btn sm mb-3" wire:click="openAddUserModal()">
    Add new user
  </button>
<table class="table table-hover table-inverse ">
                                    <thead class="thead-inverse">
                                     <tr>
                                       <th>ID</th>
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Phone</th>
                                         <th>Address</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @forelse ($users as $User)
                                       <tr>
                                         <td>{{ $User->id }}s</td>
                                          <td>{{ $User->name }}</td>
                                            <td>{{ $User->email }}</td>
                                            <td>{{ $User->phone }}</td>
                                            <td>{{ $User->adress }}</td>
                                             <td>
                                               <div class="btn-group">
                                                 <button class="btn btn-danger btn-sm" wire:click="deleteConfirm({{$User->id}})">Delete</button>
                                                 <button class="btn btn-success btn-sm" wire:click="openEditUserModal({{$User->id}})">Edit</button>
                                               </div>
                                             </td>                                         
                                        </tr>
                                        @empty
                                        <code>No users Found</code>
                                        @endforelse
                                    </tbody>
                                 </table>   
                                 @include('modals.add-modal')
                                 @include('modals.edit-modal')
</div>
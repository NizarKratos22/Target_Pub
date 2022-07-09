<div>
<button class="btn btn-primary btn sm mb-3" wire:click="openAddspecificationModal()">
    Add new Specification
  </button>
<table class="table table-hover table-inverse">
                          <thead class="thead-inverse">
                              <tr>
                                  <th>Id</th>
                                  <th>category</th>
                                  <th>title</th>
                                  <th style="width: 55px;">description</th>
                                  <th>tasks</th>                                  
                              </tr>
                          </thead>
                          <tbody>
                           @forelse ($specifications as $specification)
                          <tr>
                               <td>{{ $specification->id}}</td>
                               <td>{{ $specification->category}}</td>
                               <td>{{ $specification->title}}</td>
                               <td style="width: 55px;">{{ $specification->description}}</td>
                               <td>{{ $specification->tasks}}</td>
                               <td>
                               <div class="btn-group">
                                                 <button class="btn btn-danger btn-sm" wire:click="deletespecConfirm({{$specification->id}})">Delete</button>
                                                 <button class="btn btn-success btn-sm" wire:click="openEditspecificationModal({{$specification->id}})">Edit</button>
                                               </div>
                               </td>
                              
                          </tr>
                          @empty
                          
                          <code>No Specification Found !</code>
                          @endforelse
                          </tbody>
                      </table>
                      @include('modals.add-modal_spec')
                      @include('modals.edit-modal_spec')
                      </div>
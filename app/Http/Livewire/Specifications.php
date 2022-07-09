<?php

namespace App\Http\Livewire;
use App\Models\Specification;
use App\Models\specifications as ModelsSpecifications;
use Livewire\Component;

class Specifications extends Component
{
public $upd_category,$upd_title,$upd_description,$upd_tasks,$uid ;
public $category , $price , $description ,$title,$tasks;
protected $listeners = ['delete'];

    public function render()
    {
        return view('livewire.specifications',['specifications'=>Specification::orderBy('id','asc')->get()]);
    }
    public function openAddspecificationModal(){
          $this->category = '';
          $this->title='';
          $this->tasks='';
          $this->description='';
         $this->dispatchBrowserEvent('openAddspecificationModal');
    }
    //function add user data to database
    public function save(){
            $this->validate([
                'category'=>'required',
                'title'=>'required',
                'description'=>'required',
                'tasks'=>'required',                            
            ]);
            $save = Specification::insert([
                'category'=>$this->category,
                'title'=>$this->title,
                'description'=>$this->description,
                'tasks'=>$this->tasks
            ]);
            if($save){
                $this->dispatchBrowserEvent('closeAddSpecificationModal');
            }
    }


     //function open pop-up edit forms
  public function openEditspecificationModal($id){
    $info =Specification::find($id);
    $this->upd_category = $info->category;
    $this->upd_title = $info->title;
    $this->upd_description = $info->description;
    $this->upd_tasks = $info->tasks;
    $this->uid = $info->id;
    $this->dispatchBrowserEvent('openEditspecificationModal',[
      'id'=>$id
    ]);
  }

//function update on click 
public function update (){
  $uid= $this->uid;
  
   $update= Specification::find($uid)->update([
              'category'=>$this->upd_category,
              'title'=>$this->upd_title,
              'description'=>$this->upd_description,
              'tasks'=>$this->upd_tasks,
              
   ]);
     if($update){
       $this->dispatchBrowserEvent('closeEditUserModal');
       
     }

}





//function delete data 
public function deletespecConfirm($id){
    $info= Specification::find($id);
    $this->dispatchBrowserEvent('SwalConfirm',[
      'title'=>'Are you sure',
      'html'=>'You want to delete <strong>'.$info->title.'</strong>',
      'id'=>$id
    ]);
}

//function delete data 
public function delete($id){
  $del = Specification::find($id)->delete();
  if($del){
    $this->dispatchBrowserEvent('deleted');
  }
}

}

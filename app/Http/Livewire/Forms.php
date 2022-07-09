<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class Forms extends Component
{
 
  public $name,$email,$phone,$adress,$password;
  public $upd_name,$upd_email,$upd_phone,$upd_adress,$upd_password,$uid;
  protected $listeners = ['delete'];
    
    public function render()
    {
        return view('livewire.forms',[
          'users'=>User::orderBy('id','asc')->get()
        ]);
    }

    //function open pop-up create forms
  public function openAddUserModal(){

      $this->dispatchBrowserEvent('openAddUserModal');
  }

  //function insert data 
  public function save(){
    // dd('hh');
    
     $this->validate([
        'name'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'adress'=>'required',
        'password'=>'required',
     ]);

   $save = User::insert([
       'name'=>$this->name,
       'email'=>$this->email,
       'phone'=>$this->phone,
       'adress'=>$this->adress,
       'password'=>$this->password,
   ]);
   if($save){
       $this->dispatchBrowserEvent('CloseAddUserModal');
   }
  }

  //function open pop-up edit forms
  public function openEditUserModal($id){
    $info =User::find($id);
    $this->upd_name = $info->name;
    $this->upd_email = $info->email;
    $this->upd_phone = $info->phone;
    $this->upd_adress = $info->adress;
    $this->upd_password = $info->password;
    $this->uid = $info->id;
    $this->dispatchBrowserEvent('openEditUserModal',[
      'id'=>$id
    ]);
  }

  //function update data

  public function update (){
    $uid= $this->uid;
     $this->validate([
      'upd_name'=>'required',
      'upd_email'=>'required|unique:users,email,'.$uid,
      'upd_phone'=>'required',
      'upd_adress'=>'required',
      'upd_password'=>'required'
     ],[
       'upd_adress.required'=>'you must enter the adress of this user',
       'upd_name.required'=>'you must enter the name of the user ',       
       'upd_email.required'=>'you must enter the email of the user ',
       'upd_email.unique'=>'User email already exists',
       //'upd_phone.required'=>'you must enter the phone number of the user ',
       'upd_phone.unique'=>'User phone number already exists',
       'upd_password.required'=>'you must enter the password of this user'
     ]);
     $update= User::find($uid)->update([
                'name'=>$this->upd_name,
                'email'=>$this->upd_email,
                'phone'=>$this->upd_phone,
                'adress'=>$this->upd_adress,
                'password'=>$this->upd_password,
                
     ]);
       if($update){
         $this->dispatchBrowserEvent('closeEditUserModal');
       }

  }

  //function delete data alert
  public function deleteConfirm($id){
      $info= User::find($id);
      $this->dispatchBrowserEvent('SwalConfirm',[
        'title'=>'Are you sure',
        'html'=>'You want to delete <strong>'.$info->email.'</strong>',
        'id'=>$id
      ]);
  }

  //function delete data 
  public function delete($id){
    $del = User::find($id)->delete();
    if($del){
      $this->dispatchBrowserEvent('deleted');
    }
  }

}

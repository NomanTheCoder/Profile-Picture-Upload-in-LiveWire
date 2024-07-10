<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public $name;
    public $search;
    public $editTodoID;
    public $editTodoName;
    

    public function create(){
        $validated =$this->validate([
            'name'=>'required|min:2',
        ]);
        Todo::create($validated);
        $this->reset('name');
        session()->flash('success','Created');

    }
    public function delete($TodoId){
        Todo::find($TodoId)->delete();
    }

    public function edit($TodoId){
        $this->editTodoID=$TodoId;
        $this->editTodoName=Todo::find($TodoId)->name;
    }

    public function toggle($TodoId){
        $todo=Todo::find($TodoId);
        $todo->completed = !$todo->completed;
        $todo->save();
    }
    public function cancel() {
        // Resetting the editing variables
        $this->editTodoID = null;
        $this->editTodoName = null;
    }

    public function update(){
        $this->validate([
            'editTodoName' => 'required|min:2'
        ]);
        Todo::find($this->editTodoID)->update([
            'name' => $this->editTodoName
        ]);
        $this->cancel();
    }

    public function render()
    {
        return view('livewire.dashboard',[
            'todos'=>Todo::latest()->where('name','like',"%{$this->search}%")->paginate(3)
        ]);
    }
}

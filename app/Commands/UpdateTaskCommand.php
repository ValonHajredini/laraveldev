<?php

namespace App\Commands;

use App\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;
use App\Task;

class UpdateTaskCommand extends Command implements SelfHandling{
    public $id;
    public $name;
    public function __construct($id, $name){
        $this->id   = $id;
        $this->name = $name;
    }
    public function handle(){
        return Task::where('id', $this->id)->update(array(
           'name'=> $this->name
        ));
    }
}
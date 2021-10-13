<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    public $message = null;
    public $user = 0;
    public $datetime = 0;

    public function __construct ($message, $user, $datetime){
       
        $this->message = $message;
        $this->user = $user;
        $this->datatime = $datetime;

    }
}

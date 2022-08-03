<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * @var string aponta para a tabela que será referenciada
     */
    protected $table = 'posts';

    protected $primaryKey = 'id_post';

    /**
     * @var string[] indica os nomes dos atributos
     */
    protected $fillable = [
        'id_post',
        'id_user',
        'title',
        'content',
        'published',

    ];

    /**
     * @var string[] indica o tipo dos atributos
     */
    protected $casts = [
        'published' => 'boolean'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use App\Answer;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes'; // テーブル名を指定

    public function answer()
    {
        return $this->hasOne('App\Answer', 'id', 'answers_id');
    }
    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'categories_id');
    }

    /**
     * boot()は登録や削除の際に実行されるメソッド
     * LaravelのModelに標準で定義済みであるdeletingメソッドを追加し、リレーションで紐づいたAnswerを削除するように設置
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($answer_model) {
            $answer_model->answer()->delete();
        });
    }
}

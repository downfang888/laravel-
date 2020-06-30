<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('')->comment('测试标题');
            $table->mediumText('content')->comment('测试内容');
            $table->timestamps();
        });
    }
}

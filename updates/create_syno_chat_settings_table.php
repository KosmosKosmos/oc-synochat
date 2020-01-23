<?php namespace KosmosKosmos\SynoChat\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSynoChatSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('kosmoskosmos_synochat_syno_chat_settings', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kosmoskosmos_synochat_syno_chat_settings');
    }
}

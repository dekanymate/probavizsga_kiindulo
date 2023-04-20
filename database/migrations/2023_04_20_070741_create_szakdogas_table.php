<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Szakdoga;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('szakdogas', function (Blueprint $table) {
            $table->id();
            $table->string('szakdoga_nev');
            $table->string('github_link');
            $table->string('oldal_link');
            $table->string('tagok_neve');
            $table->timestamps();
        });

        Szakdoga::create(['szakdoga_nev'=>'Autókölcsönző','github_link'=>"link", 'oldal_link'=>"oldallink", 'tagok_neve'=>'Kiss István, Nagy Péter']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('szakdogas');
    }
};

<?php
use Illuminate\Database\Migrations\Migration;use Illuminate\Database\Schema\Blueprint;use Illuminate\Support\Facades\Schema;
return new class extends Migration{public function up():void{Schema::create('daftars',function(Blueprint $t){$t->id();$t->string('nama');$t->string('asal_sekolah');$t->string('prodi_tujuan');$t->string('email')->unique();$t->string('no_hp',20);$t->timestamps();});}public function down():void{Schema::dropIfExists('daftars');}};

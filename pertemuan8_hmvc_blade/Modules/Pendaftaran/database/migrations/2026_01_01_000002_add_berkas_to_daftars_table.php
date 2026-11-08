<?php
use Illuminate\Database\Migrations\Migration;use Illuminate\Database\Schema\Blueprint;use Illuminate\Support\Facades\Schema;
return new class extends Migration{public function up():void{Schema::table('daftars',function(Blueprint $t){$t->string('berkas')->nullable()->after('no_hp');$t->string('nama_berkas')->nullable()->after('berkas');});}public function down():void{Schema::table('daftars',fn(Blueprint $t)=>$t->dropColumn(['berkas','nama_berkas']));}};

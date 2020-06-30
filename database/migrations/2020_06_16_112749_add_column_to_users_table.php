<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('bookbank_url')->nullable()->after('id_verified_at');
            $table->enum('bookbank_verified_status', ['pending', 'approve', 'reject'])->nullable()->after('bookbank_url');
            $table->timestamp('bookbank_verified_at')->nullable()->after('bookbank_verified_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('bookbank_url');
            $table->dropColumn('bookbank_verified_status');
            $table->dropColumn('bookbank_verified_at');
        });
    }
}

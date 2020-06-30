<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique()->after('id');
            $table->string('lastname')->nullable()->after('name');
            $table->string('phone', 15)->nullable()->after('email_verified_at');
            $table->text('description')->nullable()->after('phone');
            $table->date('birthdate')->nullable()->after('description');
            $table->string('address')->nullable()->after('birthdate');
            $table->string('country', 3)->nullable()->after('address');
            $table->string('portal_code', 10)->nullable()->after('country');
            $table->string('website')->nullable()->after('portal_code');
            $table->string('video_intro')->nullable()->after('website');
            $table->string('id_card_url')->nullable()->after('video_intro');
            $table->string('id_card_selfie_url')->nullable()->after('id_card_url');
            $table->enum('id_verified_status', ['pending', 'approve', 'reject'])->nullable()->after('id_card_selfie_url');
            $table->string('id_verified_reason')->nullable()->after('id_verified_status');
            $table->timestamp('id_verified_at', 0)->nullable()->after('id_verified_reason');
            $table->enum('status', ['active', 'inactive'])->after('bookbank_verified_at');
            $table->timestamp('last_active_at', 0)->nullable()->after('status');
            $table->softDeletes('deleted_at', 0);
            $table->string('name')->nullable()->change();
            $table->renameColumn('name', 'firstname');
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
            
            $table->dropColumn('username');
            $table->dropColumn('lastname');
            $table->dropColumn('phone');
            $table->dropColumn('description');
            $table->dropColumn('birthdate');
            $table->dropColumn('address');
            $table->dropColumn('country');
            $table->dropColumn('portal_code');
            $table->dropColumn('website');
            $table->dropColumn('video_intro');
            $table->dropColumn('id_card_url');
            $table->dropColumn('id_card_selfie_url');
            $table->dropColumn('id_verified_status');
            $table->dropColumn('id_verified_reason');
            $table->dropColumn('id_verified_at');
            $table->dropSoftDeletes();
            $table->string('name')->change();
            $table->renameColumn('firstname', 'name');
        });
    }
}

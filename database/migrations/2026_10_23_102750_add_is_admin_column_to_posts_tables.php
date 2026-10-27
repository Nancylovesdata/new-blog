<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // unsigned means it cannot be a negative number formysql.
            $table->tinyInteger('is_admin')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //

            $table->dropColumn('is_admin');
        });
    }
};



// Rollback the migration using the command: php artisan migrate:rollback: This usedd to delete the immediate last migration that was run. It will not delete all the migrations, just the last one. If you want to delete all the migrations, you can use the command: php artisan migrate:reset. This will delete all the migrations and you will have to run them again..


// migrate:refresh: This command is used to rollback all the migrations and then run them again. It is useful when you want to start fresh with your database schema. You can use the command: php artisan migrate:refresh.
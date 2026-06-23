<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('beneficiarios') && !Schema::hasColumn('beneficiarios', 'deleted_at')) {
            Schema::table('beneficiarios', function (Blueprint $table) {
                $table->softDeletes();
            });
        }
        if (Schema::hasTable('productos') && !Schema::hasColumn('productos', 'deleted_at')) {
            Schema::table('productos', function (Blueprint $table) {
                $table->softDeletes();
            });
        }
        if (Schema::hasTable('entregas') && !Schema::hasColumn('entregas', 'deleted_at')) {
            Schema::table('entregas', function (Blueprint $table) {
                $table->softDeletes();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('beneficiarios') && Schema::hasColumn('beneficiarios', 'deleted_at')) {
            Schema::table('beneficiarios', function (Blueprint $table) {
                $table->dropSoftDeletes();
            });
        }
        if (Schema::hasTable('productos') && Schema::hasColumn('productos', 'deleted_at')) {
            Schema::table('productos', function (Blueprint $table) {
                $table->dropSoftDeletes();
            });
        }
        if (Schema::hasTable('entregas') && Schema::hasColumn('entregas', 'deleted_at')) {
            Schema::table('entregas', function (Blueprint $table) {
                $table->dropSoftDeletes();
            });
        }
    }
};

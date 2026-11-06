
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->unsignedTinyInteger('age')->after('full_name');
            $table->string('parish')->nullable()->after('age');
            $table->boolean('belongs_to_group')->default(false)->after('phone');
            $table->string('group_name')->nullable()->after('belongs_to_group');

            // El correo deja de ser obligatorio.
            // Conservamos los datos históricos.
            $table->string('email')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn([
                'age',
                'parish',
                'belongs_to_group',
                'group_name',
            ]);

            $table->string('email')->nullable(false)->change();
        });
    }
};

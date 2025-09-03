<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Make emails optional for persons
        DB::table('attributes')
            ->where('code', 'emails')
            ->where('entity_type', 'persons')
            ->update([
                    'is_required' => 0,
                    'is_unique' => 0
                ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Make emails required again for persons
        DB::table('attributes')
            ->where('code', 'emails')
            ->where('entity_type', 'persons')
            ->update([
                    'is_required' => 1,
                    'is_unique' => 1
                ]);
    }
};

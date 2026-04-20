<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['partner_id']);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignIdFor(Category::class)
                ->nullable()
                ->after('partner_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('code')->nullable()->after('category_id')->unique();
            $table->string('overview')->nullable()->after('name');
            $table->foreignId('partner_id')->nullable()->change();
            $table->string('thumbnail')->nullable()->change();
            $table->string('slug')->nullable()->change();
        });

        DB::table('products')
            ->select(['id'])
            ->orderBy('id')
            ->get()
            ->each(function (object $product): void {
                do {
                    $code = 'PRD-'.Str::upper(Str::random(8));
                } while (DB::table('products')->where('code', $code)->exists());

                DB::table('products')
                    ->where('id', $product->id)
                    ->update(['code' => $code]);
            });

        Schema::table('products', function (Blueprint $table) {
            $table->string('code')->nullable(false)->change();
            $table->foreign('partner_id')->references('id')->on('partners')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['partner_id']);
            $table->dropUnique('products_code_unique');
            $table->dropColumn(['category_id', 'code', 'overview']);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('partner_id')->nullable(false)->change();
            $table->text('thumbnail')->nullable()->change();
            $table->string('slug')->nullable(false)->change();
            $table->foreign('partner_id')->references('id')->on('partners')->cascadeOnDelete();
        });
    }
};

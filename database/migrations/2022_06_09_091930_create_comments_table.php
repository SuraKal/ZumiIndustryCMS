<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->morphs('commentable');
            $table->text('title')->nullable();
            $table->text('content')->nullable();
            $table->boolean('is_visible')->default(false);
            $table->unsignedTinyInteger('rating')->default(5); // Added: Rating column for stars (1-5 scale)

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
};

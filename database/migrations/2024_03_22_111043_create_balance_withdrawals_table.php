<?php

use App\Enums\WithdrawalEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_withdrawals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('via', [WithdrawalEnum::BLUEBCA->value, WithdrawalEnum::DANA->value, WithdrawalEnum::GOPAY->value, WithdrawalEnum::OVO->value]);
            $table->string('rekening_number', 25);
            $table->integer('balance');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balance_withdrawals');
    }
};
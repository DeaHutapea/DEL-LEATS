<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

    Schema::create('loan_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id')->constrained('equipments')->cascadeOnDelete();
            $table->string('borrower_name', 100);
            $table->string('borrower_nim', 10);
            $table->string('borrower_emai', 100);
            $table->date('loan_date');
            $table->date('expected_return_date');
            $table->text('purpose');
            $table->enum('status', diajukan, disetujui, ditolak, selesai)->default('diajukan');
            $table->integer('total_estimated_fee');
            $table->text('user_agent')->nullable();
            $table->timestamps();
        });



<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->string('asset_code', 20)->unique();
            $table->string('name', 150);
            $table->text('specification');
            $table->enum('condition', baik, rusak_ringan, rusak_berat)->default('baik');
            $table->enum('status', tersedia, dipinjam, dalam_perbaikan)->default('tersedia');
            $table->integer('daily_rental_fee');
            $table->string('image_path', 255)->nullable();
            $table->timestamps();
        });

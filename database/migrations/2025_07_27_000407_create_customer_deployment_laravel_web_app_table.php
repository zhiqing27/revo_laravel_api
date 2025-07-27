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
    Schema::create('CustomerDeploymentLaravelWebApp', function (Blueprint $table) {
        $table->id();
        $table->string('ClientName');
        $table->string('ArtifactVersion');
        $table->string('HostingPath'); // Deployment directory
        $table->string('CommitID');
        $table->date('ReleaseDate');
        $table->timestamps(); // created_at, updated_at
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CustomerDeploymentLaravelWebApp');
    }
};

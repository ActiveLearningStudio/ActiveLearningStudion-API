<?php

declare(strict_types=1);

use ElasticAdapter\Indices\Mapping;
use ElasticAdapter\Indices\Settings;
use ElasticMigrations\Facades\Index;
use ElasticMigrations\MigrationInterface;

final class CreatePlaylistsIndex implements MigrationInterface
{
    /**
     * Run the migration.
     */
    public function up(): void
    {
        Index::create('playlists', function (Mapping $mapping, Settings $settings) {
            $mapping->keyword('organisation_id');
            $mapping->keyword('organisation_visibility_type_id');
            $mapping->text('title');
            $mapping->keyword('project_id');
            $mapping->boolean('is_public');
            $mapping->boolean('elasticsearch');
            $mapping->date('created_at');
            $mapping->date('updated_at');
        });
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {
        Index::dropIfExists('playlists');
    }
}

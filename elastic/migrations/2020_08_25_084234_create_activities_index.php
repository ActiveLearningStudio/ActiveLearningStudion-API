<?php

declare(strict_types=1);

use ElasticAdapter\Indices\Mapping;
use ElasticAdapter\Indices\Settings;
use ElasticMigrations\Facades\Index;
use ElasticMigrations\MigrationInterface;

final class CreateActivitiesIndex implements MigrationInterface
{
    /**
     * Run the migration.
     */
    public function up(): void
    {
        Index::create('activities', function (Mapping $mapping, Settings $settings) {
            $mapping->keyword('organisation_id');
            $mapping->keyword('organisation_visibility_type_id');
            $mapping->keyword('playlist_id');
            $mapping->text('title');
            $mapping->keyword('type');
            $mapping->text('content');
            $mapping->keyword('h5p_content_id');
            $mapping->keyword('subject_id');
            $mapping->keyword('education_level_id');
            $mapping->boolean('is_public');
            $mapping->boolean('elasticsearch');
            $mapping->date('created_at');
            $mapping->date('updated_at');
            $mapping->keyword('project_id');
        });
    }

    /**
     * Reverse the migration.
     */
    public function down(): void
    {
        Index::dropIfExists('activities');
    }
}

<?php

namespace App\Repositories\H5pContent;

use Djoudi\LaravelH5p\Eloquents\H5pContent;
use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface H5pContentRepositoryInterface extends EloquentRepositoryInterface
{

    /**
     * Get the libraries's fields semantics.
     *
     * @param Object $h5pContentObject
     * @return array
     */
    public function getBrightcoveVideo($accountId, $videoId);
}

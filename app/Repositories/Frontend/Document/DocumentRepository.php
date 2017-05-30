<?php

namespace App\Repositories\Frontend\Document;

use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use App\Events\Frontend\Document\DocumentCreated;


/**
 * Class DocumentRepository.
 */
class DocumentRepository extends BaseRepository
{
    public function download()
    {
        //event(new DocumentCreated($document));

        //return true;
    }
}

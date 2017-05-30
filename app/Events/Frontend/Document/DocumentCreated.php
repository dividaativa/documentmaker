<?php

namespace App\Events\Frontend\Document;

use Illuminate\Queue\SerializesModels;

/**
 * Class DocumentCreated.
 */
class DocumentCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $document;

    /**
     * @param $role
     */
    public function __construct($document)
    {
        $this->document = $document;
    }
}

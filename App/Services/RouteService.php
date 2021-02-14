<?php

namespace lumilock\lumilock\App\Services;

use lumilock\lumilock\App\Traits\ConsumeExternalService;

class RouteService
{
    use ConsumeExternalService;

    /**
     * The base uri to consume authors service
     * @var string
     */
    public $baseUri;

    /**
     * Authorization secret to pass to author api
     * @var string
     */
    public $secret;

    public function __construct()
    {
        // $this->baseUri = config('services.authors.base_uri');
        // $this->secret = config('services.authors.secret');
    }

    public function setUri($uri)
    {
        $this->baseUri = $uri;
    }

    public function setSecret($secret)
    {
        $this->secret = $secret;
    }

    /**
     * Obtain the full list of author from the author service
     */
    public function route($methode, $path, $data=[], $headers=[])
    {
        dd('Auth perfom');
        return $this->performRequest($methode, $path, $data, $headers);
    }

    // /**
    //  * Create Author
    //  */
    // public function createAuthor($data)
    // {
    //     return $this->performRequest('POST', '/authors', $data);
    // }

    // /**
    //  * Get a single author data
    //  */
    // public function obtainAuthor($author)
    // {
    //     return $this->performRequest('GET', "/authors/{$author}");
    // }

    // /**
    //  * Edit a single author data
    //  */
    // public function editAuthor($data, $author)
    // {
    //     return $this->performRequest('PUT', "/authors/{$author}", $data);
    // }

    // /**
    //  * Delete an Author
    //  */
    // public function deleteAuthor($author)
    // {
    //     return $this->performRequest('DELETE', "/authors/{$author}");
    // }
}
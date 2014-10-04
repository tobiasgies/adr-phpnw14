<?php

namespace Stage03;

use Common\BlogRepository;
use Common\Request;
use Common\BlogException;

class BlogCreateAction {

    /**
     * @var Request
     */
    private $request;

    /**
     * @var BlogRepository
     */
    private $domain;

    /**
     * @var BlogCreateResponder
     */
    private $responder;

    public function __construct(
        Request $request,
        BlogRepository $domain,
        BlogCreateResponder $responder
    ) { /* ... */ }

    public function __invoke() {
        try {
            $data = $this->request->getParameters(Request::SOURCE_POST);
            $post = $this->domain->createPost($data);
        } catch (BlogException $ex) {
            $post = $this->domain->getDefault();
        }
        $this->responder->__invoke($post);
    }
} 
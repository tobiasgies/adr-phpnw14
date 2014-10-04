<?php

namespace Stage03;

use Common\BlogRepository;

class BlogAddAction {

    /**
     * @var BlogRepository
     */
    private $domain;

    /**
     * @var BlogCreateResponder
     */
    private $responder;

    public function __construct(
        BlogRepository $domain,
        BlogCreateResponder $responder
    ) { /* ... */ }

    public function __invoke() {
        $post = $this->domain->getDefault();
        $this->responder->__invoke($post);
    }
} 
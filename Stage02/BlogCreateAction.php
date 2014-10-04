<?php

namespace Stage02;

use Common\BlogRepository;
use Common\Request;

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
        if ($this->request->isPost()) {
            $data = $this->request->getParameters(Request::SOURCE_POST);
            $post = $this->domain->createPost($data);

            if ($post->isValid()) {
                $post->save();
            }
        } else {
            $post = $this->domain->getDefault();
        }

        $this->responder->__invoke($post);
    }
} 
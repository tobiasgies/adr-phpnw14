<?php

namespace Stage02;

use Common\BlogPost;
use Common\Response;
use Common\TemplateSystem;

class BlogCreateResponder {

    /**
     * @var Response
     */
    private $response;

    /**
     * @var TemplateSystem
     */
    private $view;

    public function __construct(Response $response, TemplateSystem $view) { /* ... */ }

    public function __invoke(BlogPost $post) {
        if (!empty($post->getId())) {
            $this->response->redirect('/blog/edit/' . $post->getId());
        } else {
            $this->response->setContent(
                $this->view->render('create.tpl', array('post' => $post))
            );
        }
    }

} 
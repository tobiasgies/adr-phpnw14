<?php

namespace Stage01;

use Common\Request;
use Common\Response;
use Common\BlogRepository;
use Common\TemplateSystem;

class BlogController {
    /**
     * @var Request
     */
    private $request;

    /**
     * @var Response
     */
    private $response;

    /**
     * @var BlogRepository
     */
    private $model;

    /**
     * @var TemplateSystem
     */
    private $view;

    public function __construct(
        Request $request,
        Response $response,
        BlogRepository $model,
        TemplateSystem $view
    ) { /* ... */ }

    public function indexAction() { /* ... */ }

    public function createAction() {
        if ($this->request->isPost()) {
            $data = $this->request->getParameters(Request::SOURCE_POST);
            $post = $this->model->createPost($data);

            if ($post->isValid()) {
                $post->save();
                $this->response->redirect('/blog/edit/' . $post->getId());
            } else {
                $this->response->setContent(
                    $this->view->render('create.tpl', array('post' => $post))
                );
            }
        } else {
            $this->response->setContent(
                $this->view->render('create.tpl', array('blog' => $this->model->getDefault()))
            );
        }
    }

    public function editAction() { /* ... */ }

    public function deleteAction() { /* ... */ }
} 
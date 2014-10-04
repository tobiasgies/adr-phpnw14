<?php

namespace Common;

/**
 * Class BlogRepository
 */
class BlogRepository {

    /**
     * creates a new blog post for given data
     *
     * @param array $data
     * @return BlogPost
     */
    public function createPost(array $data) {
        return new BlogPost();
    }

    /**
     * creates a default blog post
     *
     * @return BlogPost
     */
    public function getDefault()
    {
        return new BlogPost();
    }
} 
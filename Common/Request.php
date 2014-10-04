<?php

namespace Common;

class Request {

    const SOURCE_GET = 'get';
    const SOURCE_POST = 'post';
    const SOURCE_ALL = 'all';

    /**
     * Returns request parameters
     *
     * @param $source
     * @return array
     */
    public function getParameters($source = Request::SOURCE_ALL) {
        return array();
    }

    /**
     * Returns whether the request is a POST request
     *
     * @return bool
     */
    public function isPost() {
        return true;
    }
} 
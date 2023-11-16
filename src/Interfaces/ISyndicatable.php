<?php
    namespace PossePublish\PosseSpec\Interfaces;

    use PossePublish\PosseSpec\Models\Content;

    interface ISyndicatable
    {
        public function post(Content $content);
    }
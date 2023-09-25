<?php
    namespace Theothernic\PosseSpec\Interfaces;

    use Theothernic\PosseSpec\Models\Content;

    interface ISyndicatable
    {
        public function post(Content $content);
    }
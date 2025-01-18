<?php

namespace Turnierclient\v1\Core;

class Build {

    public function url() {
        return "http://localhost/turnierclient/public/"; // Change!
    }

    public function loadTemplate($string) {
        $tc = $this;
        require_once TEMPLATES . $string . '.php';
    }

}
<?php
    class Project {
        public $name;
        public $square_img_url;
        public $large_img_url;
        public $alt;
        public $description;
        public $tags; 
        public $project_url;

        public function __construct($props = []) {
            $this->name = $props['name'] ?? null;
            $this->square_img_url = $props['square_img_url'] ?? null;
            $this->large_img_url = $props['large_img_url'] ?? null;
            $this->alt = $props['alt'] ?? null;
            $this->description = $props['description'] ?? null;
            $this->tags = $props['tags'] ?? null;
            $this->project_url = $props['project_url'] ?? null;
        }
    }
?>
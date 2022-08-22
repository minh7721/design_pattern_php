<?php

namespace App\Facade;

class FFMpegVideo
{
    public function filters(): self {
//        return "Filters";
        echo "123\n";
        return $this;
    }

    public function resize(): self {
        echo "Resize\n";
        return $this;
    }

    public function synchronize(): self {
        echo "Synchronize\n";
        return $this;
    }

    public function frame(): self {
        echo "Frame\n";
        return $this;
    }

    public function save(string $path): self {
        echo "Save: ".$path."\n";
        return $this;
    }
}
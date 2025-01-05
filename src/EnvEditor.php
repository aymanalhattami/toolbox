<?php

namespace AymanAlhattami\Toolbox;

use AymanAlhattami\Toolbox\Interfaces\MakeInterface;
use AymanAlhattami\Toolbox\Traits\HasMake;

class EnvEditor implements MakeInterface
{
    use HasMake;

    public function set($key, $value): static
    {
        $path = base_path('.env');

        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                $key.'='.env($key),
                $key.'='.$value,
                file_get_contents($path)
            ));
        }

        return $this;
    }
}

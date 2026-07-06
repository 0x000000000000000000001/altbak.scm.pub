<?php

namespace Effect\Uncurried;

require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Uncurried/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {

      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Effect_Uncurried_semigroupEffectFn9
function Effect_Uncurried_semigroupEffectFn9($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn9';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_semigroupEffect = ($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect'));
  $__global_Effect_Uncurried_mkEffectFn9 = ($GLOBALS['Effect_Uncurried_mkEffectFn9'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn9'));
  $__global_Effect_Uncurried_runEffectFn9 = ($GLOBALS['Effect_Uncurried_runEffectFn9'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn9'));
  $append = (($__global_Effect_semigroupEffect)($dictSemigroup))->append;
  $__res = (object)["append" => (function() use ($__global_Effect_Uncurried_mkEffectFn9, $append, $__global_Effect_Uncurried_runEffectFn9, &$__fn) {
  $__fn = function($f1, $f2 = null) use ($__global_Effect_Uncurried_mkEffectFn9, $append, $__global_Effect_Uncurried_runEffectFn9, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Effect_Uncurried_mkEffectFn9)((function() use ($append, $__global_Effect_Uncurried_runEffectFn9, $f1, $f2, &$__fn) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use ($append, $__global_Effect_Uncurried_runEffectFn9, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, func_get_args(), 9);
  }
  $__res = ($append)(($__global_Effect_Uncurried_runEffectFn9)($f1, $a, $b, $c, $d, $e, $f, $g, $h, $i), ($__global_Effect_Uncurried_runEffectFn9)($f2, $a, $b, $c, $d, $e, $f, $g, $h, $i));
  goto __end;;
  __end:
  return $__num > 9 ? $__res(...array_slice(func_get_args(), 9)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn9'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn9';

// Effect_Uncurried_semigroupEffectFn8
function Effect_Uncurried_semigroupEffectFn8($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn8';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_semigroupEffect = ($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect'));
  $__global_Effect_Uncurried_mkEffectFn8 = ($GLOBALS['Effect_Uncurried_mkEffectFn8'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn8'));
  $__global_Effect_Uncurried_runEffectFn8 = ($GLOBALS['Effect_Uncurried_runEffectFn8'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn8'));
  $append = (($__global_Effect_semigroupEffect)($dictSemigroup))->append;
  $__res = (object)["append" => (function() use ($__global_Effect_Uncurried_mkEffectFn8, $append, $__global_Effect_Uncurried_runEffectFn8, &$__fn) {
  $__fn = function($f1, $f2 = null) use ($__global_Effect_Uncurried_mkEffectFn8, $append, $__global_Effect_Uncurried_runEffectFn8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Effect_Uncurried_mkEffectFn8)((function() use ($append, $__global_Effect_Uncurried_runEffectFn8, $f1, $f2, &$__fn) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use ($append, $__global_Effect_Uncurried_runEffectFn8, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, func_get_args(), 8);
  }
  $__res = ($append)(($__global_Effect_Uncurried_runEffectFn8)($f1, $a, $b, $c, $d, $e, $f, $g, $h), ($__global_Effect_Uncurried_runEffectFn8)($f2, $a, $b, $c, $d, $e, $f, $g, $h));
  goto __end;;
  __end:
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn8'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn8';

// Effect_Uncurried_semigroupEffectFn7
function Effect_Uncurried_semigroupEffectFn7($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn7';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_semigroupEffect = ($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect'));
  $__global_Effect_Uncurried_mkEffectFn7 = ($GLOBALS['Effect_Uncurried_mkEffectFn7'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn7'));
  $__global_Effect_Uncurried_runEffectFn7 = ($GLOBALS['Effect_Uncurried_runEffectFn7'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn7'));
  $append = (($__global_Effect_semigroupEffect)($dictSemigroup))->append;
  $__res = (object)["append" => (function() use ($__global_Effect_Uncurried_mkEffectFn7, $append, $__global_Effect_Uncurried_runEffectFn7, &$__fn) {
  $__fn = function($f1, $f2 = null) use ($__global_Effect_Uncurried_mkEffectFn7, $append, $__global_Effect_Uncurried_runEffectFn7, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Effect_Uncurried_mkEffectFn7)((function() use ($append, $__global_Effect_Uncurried_runEffectFn7, $f1, $f2, &$__fn) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use ($append, $__global_Effect_Uncurried_runEffectFn7, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
  $__res = ($append)(($__global_Effect_Uncurried_runEffectFn7)($f1, $a, $b, $c, $d, $e, $f, $g), ($__global_Effect_Uncurried_runEffectFn7)($f2, $a, $b, $c, $d, $e, $f, $g));
  goto __end;;
  __end:
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn7'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn7';

// Effect_Uncurried_semigroupEffectFn6
function Effect_Uncurried_semigroupEffectFn6($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn6';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_semigroupEffect = ($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect'));
  $__global_Effect_Uncurried_mkEffectFn6 = ($GLOBALS['Effect_Uncurried_mkEffectFn6'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn6'));
  $__global_Effect_Uncurried_runEffectFn6 = ($GLOBALS['Effect_Uncurried_runEffectFn6'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn6'));
  $append = (($__global_Effect_semigroupEffect)($dictSemigroup))->append;
  $__res = (object)["append" => (function() use ($__global_Effect_Uncurried_mkEffectFn6, $append, $__global_Effect_Uncurried_runEffectFn6, &$__fn) {
  $__fn = function($f1, $f2 = null) use ($__global_Effect_Uncurried_mkEffectFn6, $append, $__global_Effect_Uncurried_runEffectFn6, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Effect_Uncurried_mkEffectFn6)((function() use ($append, $__global_Effect_Uncurried_runEffectFn6, $f1, $f2, &$__fn) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null) use ($append, $__global_Effect_Uncurried_runEffectFn6, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
  $__res = ($append)(($__global_Effect_Uncurried_runEffectFn6)($f1, $a, $b, $c, $d, $e, $f), ($__global_Effect_Uncurried_runEffectFn6)($f2, $a, $b, $c, $d, $e, $f));
  goto __end;;
  __end:
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn6'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn6';

// Effect_Uncurried_semigroupEffectFn5
function Effect_Uncurried_semigroupEffectFn5($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn5';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_semigroupEffect = ($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect'));
  $__global_Effect_Uncurried_mkEffectFn5 = ($GLOBALS['Effect_Uncurried_mkEffectFn5'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn5'));
  $__global_Effect_Uncurried_runEffectFn5 = ($GLOBALS['Effect_Uncurried_runEffectFn5'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn5'));
  $append = (($__global_Effect_semigroupEffect)($dictSemigroup))->append;
  $__res = (object)["append" => (function() use ($__global_Effect_Uncurried_mkEffectFn5, $append, $__global_Effect_Uncurried_runEffectFn5, &$__fn) {
  $__fn = function($f1, $f2 = null) use ($__global_Effect_Uncurried_mkEffectFn5, $append, $__global_Effect_Uncurried_runEffectFn5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Effect_Uncurried_mkEffectFn5)((function() use ($append, $__global_Effect_Uncurried_runEffectFn5, $f1, $f2, &$__fn) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null) use ($append, $__global_Effect_Uncurried_runEffectFn5, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__res = ($append)(($__global_Effect_Uncurried_runEffectFn5)($f1, $a, $b, $c, $d, $e), ($__global_Effect_Uncurried_runEffectFn5)($f2, $a, $b, $c, $d, $e));
  goto __end;;
  __end:
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn5'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn5';

// Effect_Uncurried_semigroupEffectFn4
function Effect_Uncurried_semigroupEffectFn4($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn4';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_semigroupEffect = ($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect'));
  $__global_Effect_Uncurried_mkEffectFn4 = ($GLOBALS['Effect_Uncurried_mkEffectFn4'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn4'));
  $__global_Effect_Uncurried_runEffectFn4 = ($GLOBALS['Effect_Uncurried_runEffectFn4'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn4'));
  $append = (($__global_Effect_semigroupEffect)($dictSemigroup))->append;
  $__res = (object)["append" => (function() use ($__global_Effect_Uncurried_mkEffectFn4, $append, $__global_Effect_Uncurried_runEffectFn4, &$__fn) {
  $__fn = function($f1, $f2 = null) use ($__global_Effect_Uncurried_mkEffectFn4, $append, $__global_Effect_Uncurried_runEffectFn4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Effect_Uncurried_mkEffectFn4)((function() use ($append, $__global_Effect_Uncurried_runEffectFn4, $f1, $f2, &$__fn) {
  $__fn = function($a, $b = null, $c = null, $d = null) use ($append, $__global_Effect_Uncurried_runEffectFn4, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($d) use ($a, $b, $c, &$__fn) { return $__fn($a, $b, $c, $d); };
    if ($__num === 2) return function($c, $d = null) use ($a, $b, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $b, $c, $d);
      if ($__num2 === 1) return function($d) use ($a, $b, $c, &$__fn) { return $__fn($a, $b, $c, $d); };
      return phpurs_curry_fallback($__fn, [$a, $b], 4);
    };
    if ($__num === 1) return function($b, $c = null, $d = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($a, $b, $c, $d);
      if ($__num2 === 2) return function($d) use ($a, $b, $c, &$__fn) { return $__fn($a, $b, $c, $d); };
      if ($__num2 === 1) return function($c, $d = null) use ($a, $b, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($a, $b, $c, $d);
        if ($__num3 === 1) return function($d) use ($a, $b, $c, &$__fn) { return $__fn($a, $b, $c, $d); };
        return phpurs_curry_fallback($__fn, [$a, $b], 4);
      };
      return phpurs_curry_fallback($__fn, [$a], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = ($append)(($__global_Effect_Uncurried_runEffectFn4)($f1, $a, $b, $c, $d), ($__global_Effect_Uncurried_runEffectFn4)($f2, $a, $b, $c, $d));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn4'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn4';

// Effect_Uncurried_semigroupEffectFn3
function Effect_Uncurried_semigroupEffectFn3($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_semigroupEffect = ($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect'));
  $__global_Effect_Uncurried_mkEffectFn3 = ($GLOBALS['Effect_Uncurried_mkEffectFn3'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn3'));
  $__global_Effect_Uncurried_runEffectFn3 = ($GLOBALS['Effect_Uncurried_runEffectFn3'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn3'));
  $append = (($__global_Effect_semigroupEffect)($dictSemigroup))->append;
  $__res = (object)["append" => (function() use ($__global_Effect_Uncurried_mkEffectFn3, $append, $__global_Effect_Uncurried_runEffectFn3, &$__fn) {
  $__fn = function($f1, $f2 = null) use ($__global_Effect_Uncurried_mkEffectFn3, $append, $__global_Effect_Uncurried_runEffectFn3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Effect_Uncurried_mkEffectFn3)((function() use ($append, $__global_Effect_Uncurried_runEffectFn3, $f1, $f2, &$__fn) {
  $__fn = function($a, $b = null, $c = null) use ($append, $__global_Effect_Uncurried_runEffectFn3, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($c) use ($a, $b, &$__fn) { return $__fn($a, $b, $c); };
    if ($__num === 1) return function($b, $c = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $b, $c);
      if ($__num2 === 1) return function($c) use ($a, $b, &$__fn) { return $__fn($a, $b, $c); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($append)(($__global_Effect_Uncurried_runEffectFn3)($f1, $a, $b, $c), ($__global_Effect_Uncurried_runEffectFn3)($f2, $a, $b, $c));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn3'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn3';

// Effect_Uncurried_semigroupEffectFn2
function Effect_Uncurried_semigroupEffectFn2($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_semigroupEffect = ($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect'));
  $__global_Effect_Uncurried_mkEffectFn2 = ($GLOBALS['Effect_Uncurried_mkEffectFn2'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn2'));
  $__global_Effect_Uncurried_runEffectFn2 = ($GLOBALS['Effect_Uncurried_runEffectFn2'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn2'));
  $append = (($__global_Effect_semigroupEffect)($dictSemigroup))->append;
  $__res = (object)["append" => (function() use ($__global_Effect_Uncurried_mkEffectFn2, $append, $__global_Effect_Uncurried_runEffectFn2, &$__fn) {
  $__fn = function($f1, $f2 = null) use ($__global_Effect_Uncurried_mkEffectFn2, $append, $__global_Effect_Uncurried_runEffectFn2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Effect_Uncurried_mkEffectFn2)((function() use ($append, $__global_Effect_Uncurried_runEffectFn2, $f1, $f2, &$__fn) {
  $__fn = function($a, $b = null) use ($append, $__global_Effect_Uncurried_runEffectFn2, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($append)(($__global_Effect_Uncurried_runEffectFn2)($f1, $a, $b), ($__global_Effect_Uncurried_runEffectFn2)($f2, $a, $b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn2'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn2';

// Effect_Uncurried_semigroupEffectFn10
function Effect_Uncurried_semigroupEffectFn10($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn10';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_semigroupEffect = ($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect'));
  $__global_Effect_Uncurried_mkEffectFn10 = ($GLOBALS['Effect_Uncurried_mkEffectFn10'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn10'));
  $__global_Effect_Uncurried_runEffectFn10 = ($GLOBALS['Effect_Uncurried_runEffectFn10'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn10'));
  $append = (($__global_Effect_semigroupEffect)($dictSemigroup))->append;
  $__res = (object)["append" => (function() use ($__global_Effect_Uncurried_mkEffectFn10, $append, $__global_Effect_Uncurried_runEffectFn10, &$__fn) {
  $__fn = function($f1, $f2 = null) use ($__global_Effect_Uncurried_mkEffectFn10, $append, $__global_Effect_Uncurried_runEffectFn10, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Effect_Uncurried_mkEffectFn10)((function() use ($append, $__global_Effect_Uncurried_runEffectFn10, $f1, $f2, &$__fn) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use ($append, $__global_Effect_Uncurried_runEffectFn10, $f1, $f2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, func_get_args(), 10);
  }
  $__res = ($append)(($__global_Effect_Uncurried_runEffectFn10)($f1, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j), ($__global_Effect_Uncurried_runEffectFn10)($f2, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j));
  goto __end;;
  __end:
  return $__num > 10 ? $__res(...array_slice(func_get_args(), 10)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn10'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn10';

// Effect_Uncurried_semigroupEffectFn1
function Effect_Uncurried_semigroupEffectFn1($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_semigroupEffectFn1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_semigroupEffect = ($GLOBALS['Effect_semigroupEffect'] ?? \Effect\phpurs_eval_thunk('Effect_semigroupEffect'));
  $__global_Effect_Uncurried_mkEffectFn1 = ($GLOBALS['Effect_Uncurried_mkEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn1'));
  $__global_Effect_Uncurried_runEffectFn1 = ($GLOBALS['Effect_Uncurried_runEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn1'));
  $append = (($__global_Effect_semigroupEffect)($dictSemigroup))->append;
  $__res = (object)["append" => (function() use ($__global_Effect_Uncurried_mkEffectFn1, $append, $__global_Effect_Uncurried_runEffectFn1, &$__fn) {
  $__fn = function($f1, $f2 = null) use ($__global_Effect_Uncurried_mkEffectFn1, $append, $__global_Effect_Uncurried_runEffectFn1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f2) use ($f1, &$__fn) { return $__fn($f1, $f2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Effect_Uncurried_mkEffectFn1)(function($a) use ($append, $__global_Effect_Uncurried_runEffectFn1, $f1, $f2) {
  $__num = func_num_args();
  $__res = ($append)(($__global_Effect_Uncurried_runEffectFn1)($f1, $a), ($__global_Effect_Uncurried_runEffectFn1)($f2, $a));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_semigroupEffectFn1'] = __NAMESPACE__ . '\\Effect_Uncurried_semigroupEffectFn1';

// Effect_Uncurried_monoidEffectFn9
function Effect_Uncurried_monoidEffectFn9($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn9';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_monoidEffect = ($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect'));
  $__global_Effect_Uncurried_semigroupEffectFn9 = ($GLOBALS['Effect_Uncurried_semigroupEffectFn9'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn9'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Effect_Uncurried_mkEffectFn9 = ($GLOBALS['Effect_Uncurried_mkEffectFn9'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn9'));
  $mempty = (($__global_Effect_monoidEffect)($dictMonoid))->mempty;
  $semigroupEffectFn91 = ($__global_Effect_Uncurried_semigroupEffectFn9)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($__global_Effect_Uncurried_mkEffectFn9)((function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null, $v8 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, func_get_args(), 9);
  }
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 9 ? $__res(...array_slice(func_get_args(), 9)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($__dollar____unused) use ($semigroupEffectFn91) {
  $__num = func_num_args();
  $__res = $semigroupEffectFn91;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn9'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn9';

// Effect_Uncurried_monoidEffectFn8
function Effect_Uncurried_monoidEffectFn8($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn8';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_monoidEffect = ($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect'));
  $__global_Effect_Uncurried_semigroupEffectFn8 = ($GLOBALS['Effect_Uncurried_semigroupEffectFn8'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn8'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Effect_Uncurried_mkEffectFn8 = ($GLOBALS['Effect_Uncurried_mkEffectFn8'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn8'));
  $mempty = (($__global_Effect_monoidEffect)($dictMonoid))->mempty;
  $semigroupEffectFn81 = ($__global_Effect_Uncurried_semigroupEffectFn8)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($__global_Effect_Uncurried_mkEffectFn8)((function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, func_get_args(), 8);
  }
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($__dollar____unused) use ($semigroupEffectFn81) {
  $__num = func_num_args();
  $__res = $semigroupEffectFn81;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn8'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn8';

// Effect_Uncurried_monoidEffectFn7
function Effect_Uncurried_monoidEffectFn7($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn7';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_monoidEffect = ($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect'));
  $__global_Effect_Uncurried_semigroupEffectFn7 = ($GLOBALS['Effect_Uncurried_semigroupEffectFn7'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn7'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Effect_Uncurried_mkEffectFn7 = ($GLOBALS['Effect_Uncurried_mkEffectFn7'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn7'));
  $mempty = (($__global_Effect_monoidEffect)($dictMonoid))->mempty;
  $semigroupEffectFn71 = ($__global_Effect_Uncurried_semigroupEffectFn7)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($__global_Effect_Uncurried_mkEffectFn7)((function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($__dollar____unused) use ($semigroupEffectFn71) {
  $__num = func_num_args();
  $__res = $semigroupEffectFn71;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn7'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn7';

// Effect_Uncurried_monoidEffectFn6
function Effect_Uncurried_monoidEffectFn6($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn6';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_monoidEffect = ($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect'));
  $__global_Effect_Uncurried_semigroupEffectFn6 = ($GLOBALS['Effect_Uncurried_semigroupEffectFn6'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn6'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Effect_Uncurried_mkEffectFn6 = ($GLOBALS['Effect_Uncurried_mkEffectFn6'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn6'));
  $mempty = (($__global_Effect_monoidEffect)($dictMonoid))->mempty;
  $semigroupEffectFn61 = ($__global_Effect_Uncurried_semigroupEffectFn6)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($__global_Effect_Uncurried_mkEffectFn6)((function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($__dollar____unused) use ($semigroupEffectFn61) {
  $__num = func_num_args();
  $__res = $semigroupEffectFn61;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn6'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn6';

// Effect_Uncurried_monoidEffectFn5
function Effect_Uncurried_monoidEffectFn5($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn5';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_monoidEffect = ($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect'));
  $__global_Effect_Uncurried_semigroupEffectFn5 = ($GLOBALS['Effect_Uncurried_semigroupEffectFn5'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn5'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Effect_Uncurried_mkEffectFn5 = ($GLOBALS['Effect_Uncurried_mkEffectFn5'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn5'));
  $mempty = (($__global_Effect_monoidEffect)($dictMonoid))->mempty;
  $semigroupEffectFn51 = ($__global_Effect_Uncurried_semigroupEffectFn5)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($__global_Effect_Uncurried_mkEffectFn5)((function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($__dollar____unused) use ($semigroupEffectFn51) {
  $__num = func_num_args();
  $__res = $semigroupEffectFn51;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn5'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn5';

// Effect_Uncurried_monoidEffectFn4
function Effect_Uncurried_monoidEffectFn4($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn4';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_monoidEffect = ($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect'));
  $__global_Effect_Uncurried_semigroupEffectFn4 = ($GLOBALS['Effect_Uncurried_semigroupEffectFn4'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn4'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Effect_Uncurried_mkEffectFn4 = ($GLOBALS['Effect_Uncurried_mkEffectFn4'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn4'));
  $mempty = (($__global_Effect_monoidEffect)($dictMonoid))->mempty;
  $semigroupEffectFn41 = ($__global_Effect_Uncurried_semigroupEffectFn4)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($__global_Effect_Uncurried_mkEffectFn4)((function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
    if ($__num === 2) return function($v2, $v3 = null) use ($v, $v1, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 1) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
      return phpurs_curry_fallback($__fn, [$v, $v1], 4);
    };
    if ($__num === 1) return function($v1, $v2 = null, $v3 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 2) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
      if ($__num2 === 1) return function($v2, $v3 = null) use ($v, $v1, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $v1, $v2, $v3);
        if ($__num3 === 1) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
        return phpurs_curry_fallback($__fn, [$v, $v1], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($__dollar____unused) use ($semigroupEffectFn41) {
  $__num = func_num_args();
  $__res = $semigroupEffectFn41;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn4'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn4';

// Effect_Uncurried_monoidEffectFn3
function Effect_Uncurried_monoidEffectFn3($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_monoidEffect = ($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect'));
  $__global_Effect_Uncurried_semigroupEffectFn3 = ($GLOBALS['Effect_Uncurried_semigroupEffectFn3'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn3'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Effect_Uncurried_mkEffectFn3 = ($GLOBALS['Effect_Uncurried_mkEffectFn3'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn3'));
  $mempty = (($__global_Effect_monoidEffect)($dictMonoid))->mempty;
  $semigroupEffectFn31 = ($__global_Effect_Uncurried_semigroupEffectFn3)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($__global_Effect_Uncurried_mkEffectFn3)((function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($__dollar____unused) use ($semigroupEffectFn31) {
  $__num = func_num_args();
  $__res = $semigroupEffectFn31;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn3'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn3';

// Effect_Uncurried_monoidEffectFn2
function Effect_Uncurried_monoidEffectFn2($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_monoidEffect = ($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect'));
  $__global_Effect_Uncurried_semigroupEffectFn2 = ($GLOBALS['Effect_Uncurried_semigroupEffectFn2'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn2'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Effect_Uncurried_mkEffectFn2 = ($GLOBALS['Effect_Uncurried_mkEffectFn2'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn2'));
  $mempty = (($__global_Effect_monoidEffect)($dictMonoid))->mempty;
  $semigroupEffectFn21 = ($__global_Effect_Uncurried_semigroupEffectFn2)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($__global_Effect_Uncurried_mkEffectFn2)((function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($__dollar____unused) use ($semigroupEffectFn21) {
  $__num = func_num_args();
  $__res = $semigroupEffectFn21;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn2'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn2';

// Effect_Uncurried_monoidEffectFn10
function Effect_Uncurried_monoidEffectFn10($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn10';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_monoidEffect = ($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect'));
  $__global_Effect_Uncurried_semigroupEffectFn10 = ($GLOBALS['Effect_Uncurried_semigroupEffectFn10'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn10'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Effect_Uncurried_mkEffectFn10 = ($GLOBALS['Effect_Uncurried_mkEffectFn10'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn10'));
  $mempty = (($__global_Effect_monoidEffect)($dictMonoid))->mempty;
  $semigroupEffectFn101 = ($__global_Effect_Uncurried_semigroupEffectFn10)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($__global_Effect_Uncurried_mkEffectFn10)((function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null, $v8 = null, $v9 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, func_get_args(), 10);
  }
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 10 ? $__res(...array_slice(func_get_args(), 10)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($__dollar____unused) use ($semigroupEffectFn101) {
  $__num = func_num_args();
  $__res = $semigroupEffectFn101;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn10'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn10';

// Effect_Uncurried_monoidEffectFn1
function Effect_Uncurried_monoidEffectFn1($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Uncurried_monoidEffectFn1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_monoidEffect = ($GLOBALS['Effect_monoidEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monoidEffect'));
  $__global_Effect_Uncurried_semigroupEffectFn1 = ($GLOBALS['Effect_Uncurried_semigroupEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_semigroupEffectFn1'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Effect_Uncurried_mkEffectFn1 = ($GLOBALS['Effect_Uncurried_mkEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn1'));
  $mempty = (($__global_Effect_monoidEffect)($dictMonoid))->mempty;
  $semigroupEffectFn11 = ($__global_Effect_Uncurried_semigroupEffectFn1)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($__global_Effect_Uncurried_mkEffectFn1)(function($v) use ($mempty) {
  $__num = func_num_args();
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), "Semigroup0" => function($__dollar____unused) use ($semigroupEffectFn11) {
  $__num = func_num_args();
  $__res = $semigroupEffectFn11;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Uncurried_monoidEffectFn1'] = __NAMESPACE__ . '\\Effect_Uncurried_monoidEffectFn1';


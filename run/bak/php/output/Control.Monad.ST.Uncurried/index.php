<?php

namespace Control\Monad\ST\Uncurried;

require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';

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
$ffi_Control_Monad_ST_Uncurried = \call_user_func(function() {
$mkSTFn1 = function($fn) use (&$mkSTFn1) {
    return function($x) use ($fn) { return $fn($x)(); };
};
$mkSTFn2 = function($fn) use (&$mkSTFn2) {
    return function($a, $b) use ($fn) { return $fn($a)($b)(); };
};
$mkSTFn3 = function($fn) use (&$mkSTFn3) {
    return function($a, $b, $c) use ($fn) { return $fn($a)($b)($c)(); };
};
$mkSTFn4 = function($fn) use (&$mkSTFn4) {
    return function($a, $b, $c, $d) use ($fn) { return $fn($a)($b)($c)($d)(); };
};
$mkSTFn5 = function($fn) use (&$mkSTFn5) {
    return function($a, $b, $c, $d, $e) use ($fn) { return $fn($a)($b)($c)($d)($e)(); };
};
$mkSTFn6 = function($fn) use (&$mkSTFn6) {
    return function($a, $b, $c, $d, $e, $f) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)(); };
};
$mkSTFn7 = function($fn) use (&$mkSTFn7) {
    return function($a, $b, $c, $d, $e, $f, $g) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)(); };
};
$mkSTFn8 = function($fn) use (&$mkSTFn8) {
    return function($a, $b, $c, $d, $e, $f, $g, $h) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)(); };
};
$mkSTFn9 = function($fn) use (&$mkSTFn9) {
    return function($a, $b, $c, $d, $e, $f, $g, $h, $i) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)($i)(); };
};
$mkSTFn10 = function($fn) use (&$mkSTFn10) {
    return function($a, $b, $c, $d, $e, $f, $g, $h, $i, $j) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)($i)($j)(); };
};

$runSTFn1 = function($fn, $a = null) use (&$runSTFn1) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn1) {

            return $runSTFn1(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a) { return $fn($a); };
};
$runSTFn2 = function($fn, $a = null, $b = null) use (&$runSTFn2) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn2) {

            return $runSTFn2(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b) { return $fn($a, $b); };
};
$runSTFn3 = function($fn, $a = null, $b = null, $c = null) use (&$runSTFn3) {
    if (\func_num_args() < 4) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn3) {

            return $runSTFn3(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c) { return $fn($a, $b, $c); };
};
$runSTFn4 = function($fn, $a = null, $b = null, $c = null, $d = null) use (&$runSTFn4) {
    if (\func_num_args() < 5) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn4) {

            return $runSTFn4(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d) { return $fn($a, $b, $c, $d); };
};
$runSTFn5 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null) use (&$runSTFn5) {
    if (\func_num_args() < 6) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn5) {

            return $runSTFn5(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e) { return $fn($a, $b, $c, $d, $e); };
};
$runSTFn6 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null) use (&$runSTFn6) {
    if (\func_num_args() < 7) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn6) {

            return $runSTFn6(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f) { return $fn($a, $b, $c, $d, $e, $f); };
};
$runSTFn7 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use (&$runSTFn7) {
    if (\func_num_args() < 8) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn7) {

            return $runSTFn7(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g) { return $fn($a, $b, $c, $d, $e, $f, $g); };
};
$runSTFn8 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use (&$runSTFn8) {
    if (\func_num_args() < 9) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn8) {

            return $runSTFn8(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h) { return $fn($a, $b, $c, $d, $e, $f, $g, $h); };
};
$runSTFn9 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use (&$runSTFn9) {
    if (\func_num_args() < 10) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn9) {

            return $runSTFn9(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i); };
};
$runSTFn10 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use (&$runSTFn10) {
    if (\func_num_args() < 11) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$runSTFn10) {

            return $runSTFn10(...\array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i, $j); };
};

$exports['mkSTFn1'] = $mkSTFn1;
$exports['mkSTFn2'] = $mkSTFn2;
$exports['mkSTFn3'] = $mkSTFn3;
$exports['mkSTFn4'] = $mkSTFn4;
$exports['mkSTFn5'] = $mkSTFn5;
$exports['mkSTFn6'] = $mkSTFn6;
$exports['mkSTFn7'] = $mkSTFn7;
$exports['mkSTFn8'] = $mkSTFn8;
$exports['mkSTFn9'] = $mkSTFn9;
$exports['mkSTFn10'] = $mkSTFn10;
$exports['runSTFn1'] = $runSTFn1;
$exports['runSTFn2'] = $runSTFn2;
$exports['runSTFn3'] = $runSTFn3;
$exports['runSTFn4'] = $runSTFn4;
$exports['runSTFn5'] = $runSTFn5;
$exports['runSTFn6'] = $runSTFn6;
$exports['runSTFn7'] = $runSTFn7;
$exports['runSTFn8'] = $runSTFn8;
$exports['runSTFn9'] = $runSTFn9;
$exports['runSTFn10'] = $runSTFn10;
return $exports;
});
$GLOBALS['Control_Monad_ST_Uncurried_mkSTFn1'] = $ffi_Control_Monad_ST_Uncurried['mkSTFn1'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_mkSTFn2'] = $ffi_Control_Monad_ST_Uncurried['mkSTFn2'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_mkSTFn3'] = $ffi_Control_Monad_ST_Uncurried['mkSTFn3'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_mkSTFn4'] = $ffi_Control_Monad_ST_Uncurried['mkSTFn4'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_mkSTFn5'] = $ffi_Control_Monad_ST_Uncurried['mkSTFn5'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_mkSTFn6'] = $ffi_Control_Monad_ST_Uncurried['mkSTFn6'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_mkSTFn7'] = $ffi_Control_Monad_ST_Uncurried['mkSTFn7'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_mkSTFn8'] = $ffi_Control_Monad_ST_Uncurried['mkSTFn8'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_mkSTFn9'] = $ffi_Control_Monad_ST_Uncurried['mkSTFn9'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_mkSTFn10'] = $ffi_Control_Monad_ST_Uncurried['mkSTFn10'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'] = $ffi_Control_Monad_ST_Uncurried['runSTFn1'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_runSTFn2'] = $ffi_Control_Monad_ST_Uncurried['runSTFn2'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_runSTFn3'] = $ffi_Control_Monad_ST_Uncurried['runSTFn3'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_runSTFn4'] = $ffi_Control_Monad_ST_Uncurried['runSTFn4'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_runSTFn5'] = $ffi_Control_Monad_ST_Uncurried['runSTFn5'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_runSTFn6'] = $ffi_Control_Monad_ST_Uncurried['runSTFn6'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_runSTFn7'] = $ffi_Control_Monad_ST_Uncurried['runSTFn7'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_runSTFn8'] = $ffi_Control_Monad_ST_Uncurried['runSTFn8'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_runSTFn9'] = $ffi_Control_Monad_ST_Uncurried['runSTFn9'] ?? null;
$GLOBALS['Control_Monad_ST_Uncurried_runSTFn10'] = $ffi_Control_Monad_ST_Uncurried['runSTFn10'] ?? null;




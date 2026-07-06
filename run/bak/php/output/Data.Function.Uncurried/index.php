<?php

namespace Data\Function\Uncurried;

require_once __DIR__ . '/../Data.Unit/index.php';

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
$ffi_Data_Function_Uncurried = \call_user_func(function() {
$runFn2 = function($fn, $a = null, $b = null) use (&$runFn2) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn2) {

            return $runFn2(...array_merge($__args, $more));
        };
    }
    return $fn($a, $b);
};
$runFn3 = function($fn, $a = null, $b = null, $c = null) use (&$runFn3) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$runFn3) {

            return $runFn3(...array_merge($__args, $more));
        };
    }
    return $fn($a, $b, $c);
};

$exports['runFn2'] = $runFn2;
$exports['runFn3'] = $runFn3;
return $exports;
});
$GLOBALS['Data_Function_Uncurried_mkFn0'] = $ffi_Data_Function_Uncurried['mkFn0'] ?? null;
$GLOBALS['Data_Function_Uncurried_mkFn2'] = $ffi_Data_Function_Uncurried['mkFn2'] ?? null;
$GLOBALS['Data_Function_Uncurried_mkFn3'] = $ffi_Data_Function_Uncurried['mkFn3'] ?? null;
$GLOBALS['Data_Function_Uncurried_mkFn4'] = $ffi_Data_Function_Uncurried['mkFn4'] ?? null;
$GLOBALS['Data_Function_Uncurried_mkFn5'] = $ffi_Data_Function_Uncurried['mkFn5'] ?? null;
$GLOBALS['Data_Function_Uncurried_mkFn6'] = $ffi_Data_Function_Uncurried['mkFn6'] ?? null;
$GLOBALS['Data_Function_Uncurried_mkFn7'] = $ffi_Data_Function_Uncurried['mkFn7'] ?? null;
$GLOBALS['Data_Function_Uncurried_mkFn8'] = $ffi_Data_Function_Uncurried['mkFn8'] ?? null;
$GLOBALS['Data_Function_Uncurried_mkFn9'] = $ffi_Data_Function_Uncurried['mkFn9'] ?? null;
$GLOBALS['Data_Function_Uncurried_mkFn10'] = $ffi_Data_Function_Uncurried['mkFn10'] ?? null;
$GLOBALS['Data_Function_Uncurried_runFn0'] = $ffi_Data_Function_Uncurried['runFn0'] ?? null;
$GLOBALS['Data_Function_Uncurried_runFn2'] = $ffi_Data_Function_Uncurried['runFn2'] ?? null;
$GLOBALS['Data_Function_Uncurried_runFn3'] = $ffi_Data_Function_Uncurried['runFn3'] ?? null;
$GLOBALS['Data_Function_Uncurried_runFn4'] = $ffi_Data_Function_Uncurried['runFn4'] ?? null;
$GLOBALS['Data_Function_Uncurried_runFn5'] = $ffi_Data_Function_Uncurried['runFn5'] ?? null;
$GLOBALS['Data_Function_Uncurried_runFn6'] = $ffi_Data_Function_Uncurried['runFn6'] ?? null;
$GLOBALS['Data_Function_Uncurried_runFn7'] = $ffi_Data_Function_Uncurried['runFn7'] ?? null;
$GLOBALS['Data_Function_Uncurried_runFn8'] = $ffi_Data_Function_Uncurried['runFn8'] ?? null;
$GLOBALS['Data_Function_Uncurried_runFn9'] = $ffi_Data_Function_Uncurried['runFn9'] ?? null;
$GLOBALS['Data_Function_Uncurried_runFn10'] = $ffi_Data_Function_Uncurried['runFn10'] ?? null;




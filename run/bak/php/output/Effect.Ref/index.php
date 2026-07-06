<?php

namespace Effect\Ref;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
require_once __DIR__ . '/../Prelude/index.php';

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
      case 'Effect_Ref_void': $v = \Data\Functor\Data_Functor_void(($GLOBALS['Effect_functorEffect'] ?? \Effect\phpurs_eval_thunk('Effect_functorEffect'))); break;
      case 'Effect_Ref_new': $v = ($GLOBALS['Effect_Ref__new'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref__new')); break;
      case 'Effect_Ref_modify__prime__': $v = ($GLOBALS['Effect_Ref_modifyImpl'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_modifyImpl')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };
$ffi_Effect_Ref = \call_user_func(function() {
$_new = function($val) use (&$_new) { return function() use(&$val) { return (object)['value' => $val]; }; };
$read = function($ref) use (&$read) { return function() use(&$ref) { return $ref->value; }; };
$modifyImpl = function($f, $ref = null) use (&$modifyImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_new) {

            return $modifyImpl(...array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$ref) { $t = $f($ref->value); $ref->value = $t->state; return $t->value; };
};
$write = function($val, $ref = null) use (&$write) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$read) {

            return $write(...array_merge($__args, $more));
        };
    }
    return function() use(&$val, &$ref) { $ref->value = $val; return null; };
};

$exports['_new'] = $_new;
$exports['read'] = $read;
$exports['modifyImpl'] = $modifyImpl;
$exports['write'] = $write;
return $exports;
});
$GLOBALS['Effect_Ref__new'] = $ffi_Effect_Ref['_new'] ?? null;
$GLOBALS['Effect_Ref_newWithSelf'] = $ffi_Effect_Ref['newWithSelf'] ?? null;
$GLOBALS['Effect_Ref_read'] = $ffi_Effect_Ref['read'] ?? null;
$GLOBALS['Effect_Ref_modifyImpl'] = $ffi_Effect_Ref['modifyImpl'] ?? null;
$GLOBALS['Effect_Ref_write'] = $ffi_Effect_Ref['write'] ?? null;





// Effect_Ref_modify
function Effect_Ref_modify($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Ref_modify';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Ref_modifyImpl = ($GLOBALS['Effect_Ref_modifyImpl'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_modifyImpl'));
  $__res = ($__global_Effect_Ref_modifyImpl)(function($s) use ($f) {
  $__num = func_num_args();
  $s__prime__ = ($f)($s);
  $__res = (object)["state" => $s__prime__, "value" => $s__prime__];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Ref_modify'] = __NAMESPACE__ . '\\Effect_Ref_modify';

// Effect_Ref_modify_
function Effect_Ref_modify_($f, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Ref_modify_';
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($f, $__fn) { return $__fn($f, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Effect_Ref_void = ($GLOBALS['Effect_Ref_void'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_void'));
  $__global_Effect_Ref_modify = ($GLOBALS['Effect_Ref_modify'] ?? \Effect\Ref\phpurs_eval_thunk('Effect_Ref_modify'));
  $__res = ($__global_Effect_Ref_void)(($__global_Effect_Ref_modify)($f, $s));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Effect_Ref_modify_'] = __NAMESPACE__ . '\\Effect_Ref_modify_';


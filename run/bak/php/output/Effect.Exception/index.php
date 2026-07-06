<?php

namespace Effect\Exception;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
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
      case 'Effect_Exception_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Effect_Exception_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Effect_Exception_map': $v = (($GLOBALS['Effect_functorEffect'] ?? \Effect\phpurs_eval_thunk('Effect_functorEffect')))->map; break;
      case 'Effect_Exception_throw': $v = (($GLOBALS['Effect_Exception_compose'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_compose')))(($GLOBALS['Effect_Exception_throwException'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_throwException')), ($GLOBALS['Effect_Exception_error'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_error'))); break;
      case 'Effect_Exception_stack': $v = (($GLOBALS['Effect_Exception_stackImpl'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_stackImpl')))(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Effect_Exception_showError': $v = (object)["show" => ($GLOBALS['Effect_Exception_showErrorImpl'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_showErrorImpl'))]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };
$ffi_Effect_Exception = \call_user_func(function() {
$error = function($msg) use (&$error) { return new \Exception($msg); };
$message = function($e) use (&$message) { return $e->getMessage(); };
$name = function($e) use (&$name) { return get_class($e); };
$stackImpl = function($just) use (&$stackImpl) { return function($nothing) { return function($e) use(&$just, &$nothing) { return $just($e->getTraceAsString()); }; }; };
$throwException = function($e) use (&$throwException) { return function() use(&$e) { throw $e; }; };
$catchException = function($c, $t = null) use (&$catchException) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$error) {

            return $catchException(...array_merge($__args, $more));
        };
    }
    return function() use(&$c, &$t) { try { return $t(); } catch (\Throwable $e) { return $c($e)(); } };
};
$showErrorImpl = function($e) use (&$showErrorImpl) { return (string)$e; };

$exports['error'] = $error;
$exports['message'] = $message;
$exports['name'] = $name;
$exports['stackImpl'] = $stackImpl;
$exports['throwException'] = $throwException;
$exports['catchException'] = $catchException;
$exports['showErrorImpl'] = $showErrorImpl;
return $exports;
});
$GLOBALS['Effect_Exception_showErrorImpl'] = $ffi_Effect_Exception['showErrorImpl'] ?? null;
$GLOBALS['Effect_Exception_error'] = $ffi_Effect_Exception['error'] ?? null;
$GLOBALS['Effect_Exception_errorWithCause'] = $ffi_Effect_Exception['errorWithCause'] ?? null;
$GLOBALS['Effect_Exception_errorWithName'] = $ffi_Effect_Exception['errorWithName'] ?? null;
$GLOBALS['Effect_Exception_message'] = $ffi_Effect_Exception['message'] ?? null;
$GLOBALS['Effect_Exception_name'] = $ffi_Effect_Exception['name'] ?? null;
$GLOBALS['Effect_Exception_stackImpl'] = $ffi_Effect_Exception['stackImpl'] ?? null;
$GLOBALS['Effect_Exception_throwException'] = $ffi_Effect_Exception['throwException'] ?? null;
$GLOBALS['Effect_Exception_catchException'] = $ffi_Effect_Exception['catchException'] ?? null;





// Effect_Exception_try
function Effect_Exception_try($action) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Exception_try';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Exception_catchException = ($GLOBALS['Effect_Exception_catchException'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_catchException'));
  $__global_Effect_Exception_compose = ($GLOBALS['Effect_Exception_compose'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_compose'));
  $__global_Effect_pureE = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE'));
  $__global_Effect_Exception_map = ($GLOBALS['Effect_Exception_map'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_map'));
  $__res = ($__global_Effect_Exception_catchException)(($__global_Effect_Exception_compose)($__global_Effect_pureE, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), ($__global_Effect_Exception_map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $action));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Exception_try'] = __NAMESPACE__ . '\\Effect_Exception_try';





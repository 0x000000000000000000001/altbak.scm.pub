<?php

namespace Effect\Aff\Compat;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Aff.Compat/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Effect.Uncurried/index.php';
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
      case 'Effect_Aff_Compat_bind': $v = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE')); break;
      case 'Effect_Aff_Compat_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Effect_Aff_Compat_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Effect_Aff_Compat_discard': $v = ((($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard)(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };






// Effect_Aff_Compat_EffectFnCanceler
function Effect_Aff_Compat_EffectFnCanceler($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Compat_EffectFnCanceler';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Compat_EffectFnCanceler'] = __NAMESPACE__ . '\\Effect_Aff_Compat_EffectFnCanceler';

// Effect_Aff_Compat_EffectFnAff
function Effect_Aff_Compat_EffectFnAff($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Compat_EffectFnAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Compat_EffectFnAff'] = __NAMESPACE__ . '\\Effect_Aff_Compat_EffectFnAff';

// Effect_Aff_Compat_fromEffectFnAff
function Effect_Aff_Compat_fromEffectFnAff($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_Compat_fromEffectFnAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_Aff_makeAff = ($GLOBALS['Effect_Aff_makeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeAff'));
  $__global_Effect_bindE = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE'));
  $__global_Effect_Uncurried_runEffectFn2 = ($GLOBALS['Effect_Uncurried_runEffectFn2'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn2'));
  $__global_Effect_Uncurried_mkEffectFn1 = ($GLOBALS['Effect_Uncurried_mkEffectFn1'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_mkEffectFn1'));
  $__global_Effect_Aff_Compat_compose = ($GLOBALS['Effect_Aff_Compat_compose'] ?? \Effect\Aff\Compat\phpurs_eval_thunk('Effect_Aff_Compat_compose'));
  $__global_Effect_pureE = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE'));
  $__global_Effect_Aff_Compat_discard = ($GLOBALS['Effect_Aff_Compat_discard'] ?? \Effect\Aff\Compat\phpurs_eval_thunk('Effect_Aff_Compat_discard'));
  $__global_Effect_Uncurried_runEffectFn3 = ($GLOBALS['Effect_Uncurried_runEffectFn3'] ?? \Effect\Uncurried\phpurs_eval_thunk('Effect_Uncurried_runEffectFn3'));
  $__global_Effect_Aff_nonCanceler = ($GLOBALS['Effect_Aff_nonCanceler'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_nonCanceler'));
  $__case_0 = $v;
  if (true) {
$eff = $__case_0;
$__res = ($__global_Effect_Aff_makeAff)(function($k) use ($__global_Effect_bindE, $__global_Effect_Uncurried_runEffectFn2, $eff, $__global_Effect_Uncurried_mkEffectFn1, $__global_Effect_Aff_Compat_compose, $__global_Effect_pureE, $__global_Effect_Aff_makeAff, $__global_Effect_Aff_Compat_discard, $__global_Effect_Uncurried_runEffectFn3, $__global_Effect_Aff_nonCanceler) {
  $__num = func_num_args();
  $__res = ($__global_Effect_bindE)(($__global_Effect_Uncurried_runEffectFn2)($eff, ($__global_Effect_Uncurried_mkEffectFn1)(($__global_Effect_Aff_Compat_compose)($k, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), ($__global_Effect_Uncurried_mkEffectFn1)(($__global_Effect_Aff_Compat_compose)($k, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}))), function($v1) use ($__global_Effect_pureE, $__global_Effect_Aff_makeAff, $__global_Effect_Aff_Compat_discard, $__global_Effect_Uncurried_runEffectFn3, $__global_Effect_Uncurried_mkEffectFn1, $__global_Effect_Aff_Compat_compose, $__global_Effect_Aff_nonCanceler) {
  $__num = func_num_args();
  $__case_0 = $v1;
  if (true) {
$canceler = $__case_0;
$__res = ($__global_Effect_pureE)(function($e) use ($__global_Effect_Aff_makeAff, $__global_Effect_Aff_Compat_discard, $__global_Effect_Uncurried_runEffectFn3, $canceler, $__global_Effect_Uncurried_mkEffectFn1, $__global_Effect_Aff_Compat_compose, $__global_Effect_pureE, $__global_Effect_Aff_nonCanceler) {
  $__num = func_num_args();
  $__res = ($__global_Effect_Aff_makeAff)(function($k2) use ($__global_Effect_Aff_Compat_discard, $__global_Effect_Uncurried_runEffectFn3, $canceler, $e, $__global_Effect_Uncurried_mkEffectFn1, $__global_Effect_Aff_Compat_compose, $__global_Effect_pureE, $__global_Effect_Aff_nonCanceler) {
  $__num = func_num_args();
  $__res = ($__global_Effect_Aff_Compat_discard)(($__global_Effect_Uncurried_runEffectFn3)($canceler, $e, ($__global_Effect_Uncurried_mkEffectFn1)(($__global_Effect_Aff_Compat_compose)($k2, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), ($__global_Effect_Uncurried_mkEffectFn1)(($__global_Effect_Aff_Compat_compose)($k2, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}))), function($__dollar____unused) use ($__global_Effect_pureE, $__global_Effect_Aff_nonCanceler) {
  $__num = func_num_args();
  $__res = ($__global_Effect_pureE)($__global_Effect_Aff_nonCanceler);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_Compat_fromEffectFnAff'] = __NAMESPACE__ . '\\Effect_Aff_Compat_fromEffectFnAff';


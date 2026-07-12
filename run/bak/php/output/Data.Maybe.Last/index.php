<?php

namespace Data\Maybe\Last;

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!\function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - \count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num > 1) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = \array_merge($args, $more);
      if (\count($merged) >= $expected) {
        $res = $fn(...\array_slice($merged, 0, $expected));
        if (\count($merged) > $expected) {
          return $res(...\array_slice($merged, $expected));
        }
        return $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!\function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (isset($cache[$id]) || array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Data_Maybe_Last_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Maybe_Last_semigroupLast': $v = (object)["append" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_1)->tag) {
case "Just":
$last = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = $last;
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
switch (($__case_1)->tag) {
case "Nothing":
$last = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = $last;
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Maybe_Last_ord1Last': $v = ($GLOBALS['Data_Maybe_ord1Maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_ord1Maybe')); break;
      case 'Data_Maybe_Last_newtypeLast': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Maybe_Last_monoidLast': $v = (object)["mempty" => ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), "Semigroup0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_Last_semigroupLast = ($GLOBALS['Data_Maybe_Last_semigroupLast'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_semigroupLast'));
  $__res = $__global_Data_Maybe_Last_semigroupLast;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Maybe_Last_monadLast': $v = ($GLOBALS['Data_Maybe_monadMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_monadMaybe')); break;
      case 'Data_Maybe_Last_invariantLast': $v = ($GLOBALS['Data_Maybe_invariantMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_invariantMaybe')); break;
      case 'Data_Maybe_Last_functorLast': $v = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')); break;
      case 'Data_Maybe_Last_extendLast': $v = ($GLOBALS['Data_Maybe_extendMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_extendMaybe')); break;
      case 'Data_Maybe_Last_eq1Last': $v = ($GLOBALS['Data_Maybe_eq1Maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_eq1Maybe')); break;
      case 'Data_Maybe_Last_bindLast': $v = ($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe')); break;
      case 'Data_Maybe_Last_applyLast': $v = ($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe')); break;
      case 'Data_Maybe_Last_applicativeLast': $v = ($GLOBALS['Data_Maybe_applicativeMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applicativeMaybe')); break;
      case 'Data_Maybe_Last_altLast': $v = (object)["alt" => (($GLOBALS['Data_Maybe_Last_semigroupLast'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_semigroupLast')))->append, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_functorMaybe = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__res = $__global_Data_Maybe_functorMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Maybe_Last_plusLast': $v = (object)["empty" => (($GLOBALS['Data_Maybe_Last_monoidLast'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_monoidLast')))->mempty, "Alt0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_Last_altLast = ($GLOBALS['Data_Maybe_Last_altLast'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_altLast'));
  $__res = $__global_Data_Maybe_Last_altLast;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Maybe_Last_alternativeLast': $v = (object)["Applicative0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_applicativeMaybe = ($GLOBALS['Data_Maybe_applicativeMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applicativeMaybe'));
  $__res = $__global_Data_Maybe_applicativeMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_Last_plusLast = ($GLOBALS['Data_Maybe_Last_plusLast'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_plusLast'));
  $__res = $__global_Data_Maybe_Last_plusLast;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';


// Data_Maybe_Last_Last
function majData_majMaybe_majLast_majLast($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMaybe_majLast_majLast';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_Last_Last'] = __NAMESPACE__ . '\\majData_majMaybe_majLast_majLast';

// Data_Maybe_Last_showLast
function majData_majMaybe_majLast_showmajLast($dictShow) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMaybe_majLast_showmajLast';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Maybe_showMaybe = ($GLOBALS['Data_Maybe_showMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_showMaybe'));
  $__global_Data_Maybe_Last_append = ($GLOBALS['Data_Maybe_Last_append'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_append'));
  $show = (($__global_Data_Maybe_showMaybe)($dictShow))->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Maybe_Last_append, $show) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$a = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Maybe_Last_append)("(Last "))((($__global_Data_Maybe_Last_append)(($show)($a)))(")"));
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_Last_showLast'] = __NAMESPACE__ . '\\majData_majMaybe_majLast_showmajLast';


// Data_Maybe_Last_ordLast
function majData_majMaybe_majLast_ordmajLast($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMaybe_majLast_ordmajLast';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Maybe_ordMaybe = ($GLOBALS['Data_Maybe_ordMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_ordMaybe'));
  $__res = ($__global_Data_Maybe_ordMaybe)($dictOrd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_Last_ordLast'] = __NAMESPACE__ . '\\majData_majMaybe_majLast_ordmajLast';








// Data_Maybe_Last_eqLast
function majData_majMaybe_majLast_eqmajLast($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMaybe_majLast_eqmajLast';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Maybe_eqMaybe = ($GLOBALS['Data_Maybe_eqMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_eqMaybe'));
  $__res = ($__global_Data_Maybe_eqMaybe)($dictEq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_Last_eqLast'] = __NAMESPACE__ . '\\majData_majMaybe_majLast_eqmajLast';


// Data_Maybe_Last_boundedLast
function majData_majMaybe_majLast_boundedmajLast($dictBounded) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMaybe_majLast_boundedmajLast';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Maybe_boundedMaybe = ($GLOBALS['Data_Maybe_boundedMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_boundedMaybe'));
  $__res = ($__global_Data_Maybe_boundedMaybe)($dictBounded);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_Last_boundedLast'] = __NAMESPACE__ . '\\majData_majMaybe_majLast_boundedmajLast';








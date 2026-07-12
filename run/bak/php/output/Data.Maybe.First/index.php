<?php

namespace Data\Maybe\First;

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
      case 'Data_Maybe_First_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Maybe_First_semigroupFirst': $v = (object)["append" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Just":
$first = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = $first;
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
if (true) {
$second = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = $second;
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Maybe_First_ord1First': $v = ($GLOBALS['Data_Maybe_ord1Maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_ord1Maybe')); break;
      case 'Data_Maybe_First_newtypeFirst': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Maybe_First_monoidFirst': $v = (object)["mempty" => ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), "Semigroup0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_First_semigroupFirst = ($GLOBALS['Data_Maybe_First_semigroupFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_semigroupFirst'));
  $__res = $__global_Data_Maybe_First_semigroupFirst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Maybe_First_monadFirst': $v = ($GLOBALS['Data_Maybe_monadMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_monadMaybe')); break;
      case 'Data_Maybe_First_invariantFirst': $v = ($GLOBALS['Data_Maybe_invariantMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_invariantMaybe')); break;
      case 'Data_Maybe_First_functorFirst': $v = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')); break;
      case 'Data_Maybe_First_extendFirst': $v = ($GLOBALS['Data_Maybe_extendMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_extendMaybe')); break;
      case 'Data_Maybe_First_eq1First': $v = ($GLOBALS['Data_Maybe_eq1Maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_eq1Maybe')); break;
      case 'Data_Maybe_First_bindFirst': $v = ($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe')); break;
      case 'Data_Maybe_First_applyFirst': $v = ($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe')); break;
      case 'Data_Maybe_First_applicativeFirst': $v = ($GLOBALS['Data_Maybe_applicativeMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applicativeMaybe')); break;
      case 'Data_Maybe_First_altFirst': $v = (object)["alt" => (($GLOBALS['Data_Maybe_First_semigroupFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_semigroupFirst')))->append, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_functorMaybe = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__res = $__global_Data_Maybe_functorMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Maybe_First_plusFirst': $v = (object)["empty" => (($GLOBALS['Data_Maybe_First_monoidFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_monoidFirst')))->mempty, "Alt0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_First_altFirst = ($GLOBALS['Data_Maybe_First_altFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_altFirst'));
  $__res = $__global_Data_Maybe_First_altFirst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Maybe_First_alternativeFirst': $v = (object)["Applicative0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_applicativeMaybe = ($GLOBALS['Data_Maybe_applicativeMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applicativeMaybe'));
  $__res = $__global_Data_Maybe_applicativeMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_First_plusFirst = ($GLOBALS['Data_Maybe_First_plusFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_plusFirst'));
  $__res = $__global_Data_Maybe_First_plusFirst;
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
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';


// Data_Maybe_First_First
function majData_majMaybe_majFirst_majFirst($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMaybe_majFirst_majFirst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_First_First'] = __NAMESPACE__ . '\\majData_majMaybe_majFirst_majFirst';

// Data_Maybe_First_showFirst
function majData_majMaybe_majFirst_showmajFirst($dictShow) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMaybe_majFirst_showmajFirst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Maybe_showMaybe = ($GLOBALS['Data_Maybe_showMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_showMaybe'));
  $__global_Data_Maybe_First_append = ($GLOBALS['Data_Maybe_First_append'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_append'));
  $show = (($__global_Data_Maybe_showMaybe)($dictShow))->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Maybe_First_append, $show) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$a = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Maybe_First_append)("First ("))((($__global_Data_Maybe_First_append)(($show)($a)))(")"));
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
$GLOBALS['Data_Maybe_First_showFirst'] = __NAMESPACE__ . '\\majData_majMaybe_majFirst_showmajFirst';


// Data_Maybe_First_ordFirst
function majData_majMaybe_majFirst_ordmajFirst($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMaybe_majFirst_ordmajFirst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Maybe_ordMaybe = ($GLOBALS['Data_Maybe_ordMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_ordMaybe'));
  $__res = ($__global_Data_Maybe_ordMaybe)($dictOrd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_First_ordFirst'] = __NAMESPACE__ . '\\majData_majMaybe_majFirst_ordmajFirst';








// Data_Maybe_First_eqFirst
function majData_majMaybe_majFirst_eqmajFirst($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMaybe_majFirst_eqmajFirst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Maybe_eqMaybe = ($GLOBALS['Data_Maybe_eqMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_eqMaybe'));
  $__res = ($__global_Data_Maybe_eqMaybe)($dictEq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_First_eqFirst'] = __NAMESPACE__ . '\\majData_majMaybe_majFirst_eqmajFirst';


// Data_Maybe_First_boundedFirst
function majData_majMaybe_majFirst_boundedmajFirst($dictBounded) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMaybe_majFirst_boundedmajFirst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Maybe_boundedMaybe = ($GLOBALS['Data_Maybe_boundedMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_boundedMaybe'));
  $__res = ($__global_Data_Maybe_boundedMaybe)($dictBounded);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Maybe_First_boundedFirst'] = __NAMESPACE__ . '\\majData_majMaybe_majFirst_boundedmajFirst';








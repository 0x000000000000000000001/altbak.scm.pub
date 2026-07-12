<?php

namespace Data\Semigroup\Foldable;

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
      case 'Data_Semigroup_Foldable_eq': $v = (($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering')))->eq; break;
      case 'Data_Semigroup_Foldable_composeFlipped': $v = \Control\Semigroupoid\majControl_majSemigroupoid_composemajFlipped(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Semigroup_Foldable_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Data_Semigroup_Foldable_alaF': $v = \Data\Newtype\majData_majNewtype_alamajF(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Semigroup_Foldable_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Semigroup_Foldable_ala': $v = \Data\Newtype\majData_majNewtype_ala(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Semigroup_Foldable_mkFoldRight1': $v = ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("FoldRight1", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())("\\Data\\Function\\majData_majFunction_const"); break;
      case 'Data_Semigroup_Foldable_foldableTuple': $v = (object)["foldMap1" => (function() {
  $__fn = function($dictSemigroup, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = ($f1)($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_1 = false;
  if (($__match_1 === false)) {
switch (($__case_1)->tag) {
case "Tuple":
$x = ($__case_1)->v1;
if (($__match_1 === false)) {
if (true) {
$__res = $x;
goto __end;;
$__match_1 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_2 = false;
  if (($__match_2 === false)) {
switch (($__case_1)->tag) {
case "Tuple":
$x = ($__case_1)->v1;
if (($__match_2 === false)) {
if (true) {
$__res = $x;
goto __end;;
$__match_2 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_2 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Foldable_foldableTuple = ($GLOBALS['Data_Foldable_foldableTuple'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableTuple'));
  $__res = $__global_Data_Foldable_foldableTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Semigroup_Foldable_foldableMultiplicative': $v = (object)["foldr1" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$x = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = $x;
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
})(), "foldl1" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$x = $__case_1;
if (($__match_1 === false)) {
if (true) {
$__res = $x;
goto __end;;
$__match_1 = true;
};
};
};
};
  if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap1" => (function() {
  $__fn = function($dictSemigroup, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = ($f1)($x);
goto __end;;
$__match_2 = true;
};
};
};
};
  if (($__match_2 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Foldable_foldableMultiplicative = ($GLOBALS['Data_Foldable_foldableMultiplicative'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMultiplicative'));
  $__res = $__global_Data_Foldable_foldableMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Semigroup_Foldable_foldableIdentity': $v = (object)["foldMap1" => (function() {
  $__fn = function($dictSemigroup, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = ($f1)($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$x = $__case_1;
if (($__match_1 === false)) {
if (true) {
$__res = $x;
goto __end;;
$__match_1 = true;
};
};
};
};
  if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = $x;
goto __end;;
$__match_2 = true;
};
};
};
};
  if (($__match_2 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Foldable_foldableIdentity = ($GLOBALS['Data_Foldable_foldableIdentity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableIdentity'));
  $__res = $__global_Data_Foldable_foldableIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Semigroup_Foldable_foldableDual': $v = (object)["foldr1" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$x = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = $x;
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
})(), "foldl1" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$x = $__case_1;
if (($__match_1 === false)) {
if (true) {
$__res = $x;
goto __end;;
$__match_1 = true;
};
};
};
};
  if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap1" => (function() {
  $__fn = function($dictSemigroup, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = ($f1)($x);
goto __end;;
$__match_2 = true;
};
};
};
};
  if (($__match_2 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Foldable_foldableDual = ($GLOBALS['Data_Foldable_foldableDual'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDual'));
  $__res = $__global_Data_Foldable_foldableDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Semigroup_Foldable_foldRight1Semigroup': $v = (object)["append" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "FoldRight1") && (($__case_1)->tag === "FoldRight1"))) {
$lf = ($__case_0)->v0;
$lr = ($__case_0)->v1;
$rf = ($__case_1)->v0;
$rr = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("FoldRight1", (function() use ($lf, $lr, $rf) {
  $__fn = function($a, $f = null) use ($lf, $lr, $rf, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($lf)((($f)($lr))((($rf)($a))($f))))($f);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $rr);
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
      case 'Data_Semigroup_Foldable_semigroupDual': $v = \Data\Monoid\Dual\majData_majMonoid_majDual_semigroupmajDual(($GLOBALS['Data_Semigroup_Foldable_foldRight1Semigroup'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldRight1Semigroup'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord.Max/index.php';
require_once __DIR__ . '/../Data.Ord.Min/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';







// Data_Semigroup_Foldable_JoinWith
function majData_majSemigroup_majFoldable_majJoinmajWith($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_majJoinmajWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_JoinWith'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_majJoinmajWith';

// Data_Semigroup_Foldable_Foldable1$Dict
function majData_majSemigroup_majFoldable_majFoldable1dollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_majFoldable1dollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_Foldable1dollarDict'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_majFoldable1dollarmajDict';

// Data_Semigroup_Foldable_FoldRight1
function majData_majSemigroup_majFoldable_majFoldmajRight1($value0, $value1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_majFoldmajRight1';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("FoldRight1", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_FoldRight1'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_majFoldmajRight1';

// Data_Semigroup_Foldable_Act
function majData_majSemigroup_majFoldable_majAct($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_majAct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_Act'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_majAct';

// Data_Semigroup_Foldable_semigroupJoinWith
function majData_majSemigroup_majFoldable_semigroupmajJoinmajWith($dictSemigroup) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_semigroupmajJoinmajWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $append = ($dictSemigroup)->append;
  $__res = (object)["append" => (function() use ($append) {
  $__fn = function($v, $v1 = null) use ($append, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$a = $__case_0;
$b = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = function($j) use ($append, $a, $b) {
  $__num = \func_num_args();
  $__res = (($append)(($a)($j)))((($append)($j))(($b)($j)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
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
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_semigroupJoinWith'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_semigroupmajJoinmajWith';

// Data_Semigroup_Foldable_semigroupAct
function majData_majSemigroup_majFoldable_semigroupmajAct($dictApply) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_semigroupmajAct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Control_Apply_applySecond = ($GLOBALS['Control_Apply_applySecond'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applySecond'));
  $applySecond = ($__global_Control_Apply_applySecond)($dictApply);
  $__res = (object)["append" => (function() use ($applySecond) {
  $__fn = function($v, $v1 = null) use ($applySecond, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$a = $__case_0;
$b = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($applySecond)($a))($b);
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
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_semigroupAct'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_semigroupmajAct';

// Data_Semigroup_Foldable_runFoldRight1
function majData_majSemigroup_majFoldable_runmajFoldmajRight1($v) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_runmajFoldmajRight1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "FoldRight1":
$f = ($__case_0)->v0;
$a = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = ($f)($a);
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
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_runFoldRight1'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_runmajFoldmajRight1';


// Data_Semigroup_Foldable_joinee
function majData_majSemigroup_majFoldable_joinee($v) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_joinee';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$x = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = $x;
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
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_joinee'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_joinee';

// Data_Semigroup_Foldable_getAct
function majData_majSemigroup_majFoldable_getmajAct($v) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_getmajAct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = $f;
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
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_getAct'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_getmajAct';

// Data_Semigroup_Foldable_foldr1
function majData_majSemigroup_majFoldable_foldr1($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_foldr1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $dict;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$v = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = ($v)->foldr1;
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
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldr1'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_foldr1';

// Data_Semigroup_Foldable_foldl1
function majData_majSemigroup_majFoldable_foldl1($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_foldl1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $dict;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$v = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = ($v)->foldl1;
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
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldl1'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_foldl1';

// Data_Semigroup_Foldable_maximumBy
function majData_majSemigroup_majFoldable_maximummajBy($dictFoldable1, $cmp = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_maximummajBy';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Semigroup_Foldable_eq = ($GLOBALS['Data_Semigroup_Foldable_eq'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_eq'));
  $foldl11 = ($dictFoldable1)->foldl1;
  $__res = ($foldl11)((function() use ($__global_Data_Semigroup_Foldable_eq, $cmp) {
  $__fn = function($x, $y = null) use ($__global_Data_Semigroup_Foldable_eq, $cmp, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = (($__global_Data_Semigroup_Foldable_eq)((($cmp)($x))($y)))(($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT")));
  $__match_0 = false;
  if (($__match_0 === false)) {
if (($__case_0 === true)) {
if (($__match_0 === false)) {
if (true) {
$__res = $x;
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
if (true) {
if (($__match_0 === false)) {
if (true) {
$__res = $y;
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
})());
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_maximumBy'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_maximummajBy';

// Data_Semigroup_Foldable_minimumBy
function majData_majSemigroup_majFoldable_minimummajBy($dictFoldable1, $cmp = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_minimummajBy';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Semigroup_Foldable_eq = ($GLOBALS['Data_Semigroup_Foldable_eq'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_eq'));
  $foldl11 = ($dictFoldable1)->foldl1;
  $__res = ($foldl11)((function() use ($__global_Data_Semigroup_Foldable_eq, $cmp) {
  $__fn = function($x, $y = null) use ($__global_Data_Semigroup_Foldable_eq, $cmp, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = (($__global_Data_Semigroup_Foldable_eq)((($cmp)($x))($y)))(($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT")));
  $__match_0 = false;
  if (($__match_0 === false)) {
if (($__case_0 === true)) {
if (($__match_0 === false)) {
if (true) {
$__res = $x;
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
if (true) {
if (($__match_0 === false)) {
if (true) {
$__res = $y;
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
})());
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_minimumBy'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_minimummajBy';







// Data_Semigroup_Foldable_foldMap1DefaultR
function majData_majSemigroup_majFoldable_foldmajMap1majDefaultmajR($dictFoldable1, $dictFunctor = null, $dictSemigroup = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_foldmajMap1majDefaultmajR';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $foldr11 = ($dictFoldable1)->foldr1;
  $map = ($dictFunctor)->map;
  $append = ($dictSemigroup)->append;
  $__res = function($__x) use ($map, $f, $foldr11, $append) {
  $__num = \func_num_args();
  $__res = (($foldr11)($append))((($map)($f))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldMap1DefaultR'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_foldmajMap1majDefaultmajR';

// Data_Semigroup_Foldable_foldMap1DefaultL
function majData_majSemigroup_majFoldable_foldmajMap1majDefaultmajL($dictFoldable1, $dictFunctor = null, $dictSemigroup = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_foldmajMap1majDefaultmajL';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $foldl11 = ($dictFoldable1)->foldl1;
  $map = ($dictFunctor)->map;
  $append = ($dictSemigroup)->append;
  $__res = function($__x) use ($map, $f, $foldl11, $append) {
  $__num = \func_num_args();
  $__res = (($foldl11)($append))((($map)($f))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldMap1DefaultL'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_foldmajMap1majDefaultmajL';

// Data_Semigroup_Foldable_foldMap1
function majData_majSemigroup_majFoldable_foldmajMap1($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_foldmajMap1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $dict;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$v = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = ($v)->foldMap1;
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
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldMap1'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_foldmajMap1';

// Data_Semigroup_Foldable_foldl1Default
function majData_majSemigroup_majFoldable_foldl1majDefault($dictFoldable1) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_foldl1majDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_runFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_runFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_runFoldRight1'));
  $__global_Data_Semigroup_Foldable_alaF = ($GLOBALS['Data_Semigroup_Foldable_alaF'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_alaF'));
  $__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
  $__global_Data_Semigroup_Foldable_semigroupDual = ($GLOBALS['Data_Semigroup_Foldable_semigroupDual'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_semigroupDual'));
  $__global_Data_Semigroup_Foldable_mkFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_mkFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_mkFoldRight1'));
  $__res = function($__x) use ($__global_Data_Semigroup_Foldable_runFoldRight1, $__global_Data_Semigroup_Foldable_alaF, $__global_Data_Monoid_Dual_Dual, $dictFoldable1, $__global_Data_Semigroup_Foldable_semigroupDual, $__global_Data_Semigroup_Foldable_mkFoldRight1) {
  $__num = \func_num_args();
  $__res = (\Data\Function\majData_majFunction_flip(function($__x) use ($__global_Data_Semigroup_Foldable_runFoldRight1, $__global_Data_Semigroup_Foldable_alaF, $__global_Data_Monoid_Dual_Dual, $dictFoldable1, $__global_Data_Semigroup_Foldable_semigroupDual, $__global_Data_Semigroup_Foldable_mkFoldRight1) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Semigroup_Foldable_runFoldRight1)((((($__global_Data_Semigroup_Foldable_alaF)($__global_Data_Monoid_Dual_Dual))((($dictFoldable1)->foldMap1)($__global_Data_Semigroup_Foldable_semigroupDual)))($__global_Data_Semigroup_Foldable_mkFoldRight1))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(("\\Data\\Function\\majData_majFunction_flip")($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldl1Default'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_foldl1majDefault';

// Data_Semigroup_Foldable_foldr1Default
function majData_majSemigroup_majFoldable_foldr1majDefault($dictFoldable1) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_foldr1majDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_runFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_runFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_runFoldRight1'));
  $__global_Data_Semigroup_Foldable_foldRight1Semigroup = ($GLOBALS['Data_Semigroup_Foldable_foldRight1Semigroup'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldRight1Semigroup'));
  $__global_Data_Semigroup_Foldable_mkFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_mkFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_mkFoldRight1'));
  $__res = \Data\Function\majData_majFunction_flip(function($__x) use ($__global_Data_Semigroup_Foldable_runFoldRight1, $dictFoldable1, $__global_Data_Semigroup_Foldable_foldRight1Semigroup, $__global_Data_Semigroup_Foldable_mkFoldRight1) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Semigroup_Foldable_runFoldRight1)((((($dictFoldable1)->foldMap1)($__global_Data_Semigroup_Foldable_foldRight1Semigroup))($__global_Data_Semigroup_Foldable_mkFoldRight1))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldr1Default'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_foldr1majDefault';

// Data_Semigroup_Foldable_intercalateMap
function majData_majSemigroup_majFoldable_intercalatemajMap($dictFoldable1, $dictSemigroup = null, $j = null, $f = null, $foldable = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_intercalatemajMap';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__global_Data_Semigroup_Foldable_semigroupJoinWith = ($GLOBALS['Data_Semigroup_Foldable_semigroupJoinWith'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_semigroupJoinWith'));
  $__global_Data_Semigroup_Foldable_joinee = ($GLOBALS['Data_Semigroup_Foldable_joinee'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_joinee'));
  $__global_Data_Semigroup_Foldable_JoinWith = ($GLOBALS['Data_Semigroup_Foldable_JoinWith'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_JoinWith'));
  $foldMap11 = ($dictFoldable1)->foldMap1;
  $foldMap12 = ($foldMap11)(($__global_Data_Semigroup_Foldable_semigroupJoinWith)($dictSemigroup));
  $__res = (($__global_Data_Semigroup_Foldable_joinee)((($foldMap12)(function($__x) use ($__global_Data_Semigroup_Foldable_JoinWith, $f) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Semigroup_Foldable_JoinWith)((function($__x) use ($f) {
  $__num = \func_num_args();
  $__res = ("\\Data\\Function\\majData_majFunction_const")(($f)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($foldable)))($j);
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_intercalateMap'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_intercalatemajMap';

// Data_Semigroup_Foldable_intercalate
function majData_majSemigroup_majFoldable_intercalate($dictFoldable1, $dictSemigroup = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_intercalate';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Semigroup_Foldable_intercalateMap = ($GLOBALS['Data_Semigroup_Foldable_intercalateMap'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_intercalateMap'));
  $__global_Data_Semigroup_Foldable_identity = ($GLOBALS['Data_Semigroup_Foldable_identity'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_identity'));
  $intercalateMap1 = ($__global_Data_Semigroup_Foldable_intercalateMap)($dictFoldable1);
  $__res = \Data\Function\majData_majFunction_flip(($intercalateMap1)($dictSemigroup), $__global_Data_Semigroup_Foldable_identity);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_intercalate'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_intercalate';

// Data_Semigroup_Foldable_maximum
function majData_majSemigroup_majFoldable_maximum($dictOrd, $dictFoldable1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_maximum';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Ord_Max_semigroupMax = ($GLOBALS['Data_Ord_Max_semigroupMax'] ?? \Data\Ord\Max\phpurs_eval_thunk('Data_Ord_Max_semigroupMax'));
  $__global_Data_Semigroup_Foldable_ala = ($GLOBALS['Data_Semigroup_Foldable_ala'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_ala'));
  $__global_Data_Ord_Max_Max = ($GLOBALS['Data_Ord_Max_Max'] ?? \Data\Ord\Max\phpurs_eval_thunk('Data_Ord_Max_Max'));
  $semigroupMax = ($__global_Data_Ord_Max_semigroupMax)($dictOrd);
  $__res = (($__global_Data_Semigroup_Foldable_ala)($__global_Data_Ord_Max_Max))((($dictFoldable1)->foldMap1)($semigroupMax));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_maximum'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_maximum';

// Data_Semigroup_Foldable_minimum
function majData_majSemigroup_majFoldable_minimum($dictOrd, $dictFoldable1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_minimum';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Ord_Min_semigroupMin = ($GLOBALS['Data_Ord_Min_semigroupMin'] ?? \Data\Ord\Min\phpurs_eval_thunk('Data_Ord_Min_semigroupMin'));
  $__global_Data_Semigroup_Foldable_ala = ($GLOBALS['Data_Semigroup_Foldable_ala'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_ala'));
  $__global_Data_Ord_Min_Min = ($GLOBALS['Data_Ord_Min_Min'] ?? \Data\Ord\Min\phpurs_eval_thunk('Data_Ord_Min_Min'));
  $semigroupMin = ($__global_Data_Ord_Min_semigroupMin)($dictOrd);
  $__res = (($__global_Data_Semigroup_Foldable_ala)($__global_Data_Ord_Min_Min))((($dictFoldable1)->foldMap1)($semigroupMin));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_minimum'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_minimum';

// Data_Semigroup_Foldable_traverse1_
function majData_majSemigroup_majFoldable_traverse1_($dictFoldable1, $dictApply = null, $f = null, $t = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_traverse1_';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Data_Functor_voidRight = ($GLOBALS['Data_Functor_voidRight'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_voidRight'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Semigroup_Foldable_semigroupAct = ($GLOBALS['Data_Semigroup_Foldable_semigroupAct'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_semigroupAct'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__global_Data_Semigroup_Foldable_getAct = ($GLOBALS['Data_Semigroup_Foldable_getAct'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_getAct'));
  $__global_Data_Semigroup_Foldable_Act = ($GLOBALS['Data_Semigroup_Foldable_Act'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_Act'));
  $foldMap11 = ($dictFoldable1)->foldMap1;
  $voidRight = ($__global_Data_Functor_voidRight)((($dictApply)->Functor0)($__global_Prim_undefined));
  $foldMap12 = ($foldMap11)(($__global_Data_Semigroup_Foldable_semigroupAct)($dictApply));
  $__res = (($voidRight)($__global_Data_Unit_unit))(($__global_Data_Semigroup_Foldable_getAct)((($foldMap12)(function($__x) use ($__global_Data_Semigroup_Foldable_Act, $f) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Semigroup_Foldable_Act)(($f)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($t)));
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_traverse1_'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_traverse1_';

// Data_Semigroup_Foldable_for1_
function majData_majSemigroup_majFoldable_for1_($dictFoldable1, $dictApply = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_for1_';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Semigroup_Foldable_traverse1_ = ($GLOBALS['Data_Semigroup_Foldable_traverse1_'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_traverse1_'));
  $traverse1_1 = ($__global_Data_Semigroup_Foldable_traverse1_)($dictFoldable1);
  $__res = \Data\Function\majData_majFunction_flip(($traverse1_1)($dictApply));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_for1_'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_for1_';

// Data_Semigroup_Foldable_sequence1_
function majData_majSemigroup_majFoldable_sequence1_($dictFoldable1, $dictApply = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_sequence1_';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Semigroup_Foldable_traverse1_ = ($GLOBALS['Data_Semigroup_Foldable_traverse1_'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_traverse1_'));
  $__global_Data_Semigroup_Foldable_identity = ($GLOBALS['Data_Semigroup_Foldable_identity'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_identity'));
  $traverse1_1 = ($__global_Data_Semigroup_Foldable_traverse1_)($dictFoldable1);
  $__res = (($traverse1_1)($dictApply))($__global_Data_Semigroup_Foldable_identity);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_sequence1_'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_sequence1_';

// Data_Semigroup_Foldable_fold1
function majData_majSemigroup_majFoldable_fold1($dictFoldable1, $dictSemigroup = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majSemigroup_majFoldable_fold1';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Semigroup_Foldable_identity = ($GLOBALS['Data_Semigroup_Foldable_identity'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_identity'));
  $foldMap11 = ($dictFoldable1)->foldMap1;
  $__res = (($foldMap11)($dictSemigroup))($__global_Data_Semigroup_Foldable_identity);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_fold1'] = __NAMESPACE__ . '\\majData_majSemigroup_majFoldable_fold1';


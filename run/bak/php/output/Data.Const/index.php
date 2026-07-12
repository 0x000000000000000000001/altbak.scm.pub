<?php

namespace Data\Const;

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
      case 'Data_Const_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Const_semigroupoidConst': $v = (object)["compose" => (function() {
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
})()]; break;
      case 'Data_Const_newtypeConst': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Const_functorConst': $v = (object)["map" => (function() {
  $__fn = function($f, $m = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $m;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$v = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = $v;
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
      case 'Data_Const_invariantConst': $v = (object)["imap" => \Data\Functor\Invariant\majData_majFunctor_majInvariant_imapmajF(($GLOBALS['Data_Const_functorConst'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_functorConst')))]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';


// Data_Const_Const
function majData_majConst_majConst($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_majConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_Const'] = __NAMESPACE__ . '\\majData_majConst_majConst';

// Data_Const_showConst
function majData_majConst_showmajConst($dictShow) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_showmajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Const_append = ($GLOBALS['Data_Const_append'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_append'));
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Const_append, $show) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$x = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Const_append)("(Const "))((($__global_Data_Const_append)(($show)($x)))(")"));
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
$GLOBALS['Data_Const_showConst'] = __NAMESPACE__ . '\\majData_majConst_showmajConst';

// Data_Const_semiringConst
function majData_majConst_semiringmajConst($dictSemiring) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_semiringmajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictSemiring;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_semiringConst'] = __NAMESPACE__ . '\\majData_majConst_semiringmajConst';


// Data_Const_semigroupConst
function majData_majConst_semigroupmajConst($dictSemigroup) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_semigroupmajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictSemigroup;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_semigroupConst'] = __NAMESPACE__ . '\\majData_majConst_semigroupmajConst';

// Data_Const_ringConst
function majData_majConst_ringmajConst($dictRing) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_ringmajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictRing;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_ringConst'] = __NAMESPACE__ . '\\majData_majConst_ringmajConst';

// Data_Const_ordConst
function majData_majConst_ordmajConst($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_ordmajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictOrd;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_ordConst'] = __NAMESPACE__ . '\\majData_majConst_ordmajConst';


// Data_Const_monoidConst
function majData_majConst_monoidmajConst($dictMonoid) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_monoidmajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictMonoid;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_monoidConst'] = __NAMESPACE__ . '\\majData_majConst_monoidmajConst';

// Data_Const_heytingAlgebraConst
function majData_majConst_heytingmajAlgebramajConst($dictHeytingAlgebra) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_heytingmajAlgebramajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictHeytingAlgebra;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_heytingAlgebraConst'] = __NAMESPACE__ . '\\majData_majConst_heytingmajAlgebramajConst';



// Data_Const_euclideanRingConst
function majData_majConst_euclideanmajRingmajConst($dictEuclideanRing) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_euclideanmajRingmajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictEuclideanRing;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_euclideanRingConst'] = __NAMESPACE__ . '\\majData_majConst_euclideanmajRingmajConst';

// Data_Const_eqConst
function majData_majConst_eqmajConst($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_eqmajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictEq;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_eqConst'] = __NAMESPACE__ . '\\majData_majConst_eqmajConst';

// Data_Const_eq1Const
function majData_majConst_eq1majConst($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_eq1majConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $eq = ($dictEq)->eq;
  $__res = (object)["eq1" => function($dictEq1) use ($eq) {
  $__num = \func_num_args();
  $__res = $eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_eq1Const'] = __NAMESPACE__ . '\\majData_majConst_eq1majConst';

// Data_Const_ord1Const
function majData_majConst_ord1majConst($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_ord1majConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Const_eq1Const = ($GLOBALS['Data_Const_eq1Const'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_eq1Const'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $compare = ($dictOrd)->compare;
  $eq1Const1 = ($__global_Data_Const_eq1Const)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare1" => function($dictOrd1) use ($compare) {
  $__num = \func_num_args();
  $__res = $compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused) use ($eq1Const1) {
  $__num = \func_num_args();
  $__res = $eq1Const1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_ord1Const'] = __NAMESPACE__ . '\\majData_majConst_ord1majConst';

// Data_Const_commutativeRingConst
function majData_majConst_commutativemajRingmajConst($dictCommutativeRing) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_commutativemajRingmajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictCommutativeRing;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_commutativeRingConst'] = __NAMESPACE__ . '\\majData_majConst_commutativemajRingmajConst';

// Data_Const_boundedConst
function majData_majConst_boundedmajConst($dictBounded) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_boundedmajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictBounded;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_boundedConst'] = __NAMESPACE__ . '\\majData_majConst_boundedmajConst';

// Data_Const_booleanAlgebraConst
function majData_majConst_booleanmajAlgebramajConst($dictBooleanAlgebra) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_booleanmajAlgebramajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictBooleanAlgebra;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_booleanAlgebraConst'] = __NAMESPACE__ . '\\majData_majConst_booleanmajAlgebramajConst';

// Data_Const_applyConst
function majData_majConst_applymajConst($dictSemigroup) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_applymajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Const_functorConst = ($GLOBALS['Data_Const_functorConst'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_functorConst'));
  $append1 = ($dictSemigroup)->append;
  $__res = (object)["apply" => (function() use ($append1) {
  $__fn = function($v, $v1 = null) use ($append1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$x = $__case_0;
$y = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($append1)($x))($y);
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
})(), "Functor0" => function($dollar__unused) use ($__global_Data_Const_functorConst) {
  $__num = \func_num_args();
  $__res = $__global_Data_Const_functorConst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_applyConst'] = __NAMESPACE__ . '\\majData_majConst_applymajConst';

// Data_Const_applicativeConst
function majData_majConst_applicativemajConst($dictMonoid) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majConst_applicativemajConst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Const_applyConst = ($GLOBALS['Data_Const_applyConst'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_applyConst'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $mempty = ($dictMonoid)->mempty;
  $applyConst1 = ($__global_Data_Const_applyConst)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["pure" => function($v) use ($mempty) {
  $__num = \func_num_args();
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused) use ($applyConst1) {
  $__num = \func_num_args();
  $__res = $applyConst1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Const_applicativeConst'] = __NAMESPACE__ . '\\majData_majConst_applicativemajConst';


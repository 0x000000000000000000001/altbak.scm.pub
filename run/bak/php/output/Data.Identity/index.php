<?php

namespace Data\Identity;

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
      case 'Data_Identity_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Identity_newtypeIdentity': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Identity_functorIdentity': $v = (object)["map" => (function() {
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
$__res = ($f)($v);
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
      case 'Data_Identity_invariantIdentity': $v = (object)["imap" => \Data\Functor\Invariant\majData_majFunctor_majInvariant_imapmajF(($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity')))]; break;
      case 'Data_Identity_extendIdentity': $v = (object)["extend" => (function() {
  $__fn = function($f, $m = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)($m);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Identity_functorIdentity = ($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity'));
  $__res = $__global_Data_Identity_functorIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Identity_eq1Identity': $v = (object)["eq1" => function($dictEq) {
  $__num = \func_num_args();
  $__res = ($dictEq)->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Identity_ord1Identity': $v = (object)["compare1" => function($dictOrd) {
  $__num = \func_num_args();
  $__res = ($dictOrd)->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Identity_eq1Identity = ($GLOBALS['Data_Identity_eq1Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_eq1Identity'));
  $__res = $__global_Data_Identity_eq1Identity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Identity_comonadIdentity': $v = (object)["extract" => function($v) {
  $__num = \func_num_args();
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
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Extend0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Identity_extendIdentity = ($GLOBALS['Data_Identity_extendIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_extendIdentity'));
  $__res = $__global_Data_Identity_extendIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Identity_applyIdentity': $v = (object)["apply" => (function() {
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
$f = $__case_0;
$x = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = ($f)($x);
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
})(), "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Identity_functorIdentity = ($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity'));
  $__res = $__global_Data_Identity_functorIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Identity_bindIdentity': $v = (object)["bind" => (function() {
  $__fn = function($v, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $f;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$m = $__case_0;
$f1 = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = ($f1)($m);
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
})(), "Apply0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Identity_applyIdentity = ($GLOBALS['Data_Identity_applyIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_applyIdentity'));
  $__res = $__global_Data_Identity_applyIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Identity_applicativeIdentity': $v = (object)["pure" => "\\Data\\Identity\\majData_majIdentity_majIdentity", "Apply0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Identity_applyIdentity = ($GLOBALS['Data_Identity_applyIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_applyIdentity'));
  $__res = $__global_Data_Identity_applyIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Identity_monadIdentity': $v = (object)["Applicative0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Identity_applicativeIdentity = ($GLOBALS['Data_Identity_applicativeIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_applicativeIdentity'));
  $__res = $__global_Data_Identity_applicativeIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Identity_bindIdentity = ($GLOBALS['Data_Identity_bindIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_bindIdentity'));
  $__res = $__global_Data_Identity_bindIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Identity_altIdentity': $v = (object)["alt" => (function() {
  $__fn = function($x, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Identity_functorIdentity = ($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity'));
  $__res = $__global_Data_Identity_functorIdentity;
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
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';


// Data_Identity_Identity
function majData_majIdentity_majIdentity($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_majIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_Identity'] = __NAMESPACE__ . '\\majData_majIdentity_majIdentity';

// Data_Identity_showIdentity
function majData_majIdentity_showmajIdentity($dictShow) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_showmajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Identity_append = ($GLOBALS['Data_Identity_append'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_append'));
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Identity_append, $show) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$x = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Identity_append)("(Identity "))((($__global_Data_Identity_append)(($show)($x)))(")"));
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
$GLOBALS['Data_Identity_showIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_showmajIdentity';

// Data_Identity_semiringIdentity
function majData_majIdentity_semiringmajIdentity($dictSemiring) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_semiringmajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictSemiring;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_semiringIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_semiringmajIdentity';

// Data_Identity_semigroupIdentity
function majData_majIdentity_semigroupmajIdentity($dictSemigroup) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_semigroupmajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictSemigroup;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_semigroupIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_semigroupmajIdentity';

// Data_Identity_ringIdentity
function majData_majIdentity_ringmajIdentity($dictRing) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_ringmajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictRing;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_ringIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_ringmajIdentity';

// Data_Identity_ordIdentity
function majData_majIdentity_ordmajIdentity($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_ordmajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictOrd;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_ordIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_ordmajIdentity';


// Data_Identity_monoidIdentity
function majData_majIdentity_monoidmajIdentity($dictMonoid) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_monoidmajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictMonoid;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_monoidIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_monoidmajIdentity';

// Data_Identity_lazyIdentity
function majData_majIdentity_lazymajIdentity($dictLazy) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_lazymajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictLazy;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_lazyIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_lazymajIdentity';

// Data_Identity_heytingAlgebraIdentity
function majData_majIdentity_heytingmajAlgebramajIdentity($dictHeytingAlgebra) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_heytingmajAlgebramajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictHeytingAlgebra;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_heytingAlgebraIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_heytingmajAlgebramajIdentity';




// Data_Identity_euclideanRingIdentity
function majData_majIdentity_euclideanmajRingmajIdentity($dictEuclideanRing) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_euclideanmajRingmajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictEuclideanRing;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_euclideanRingIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_euclideanmajRingmajIdentity';

// Data_Identity_eqIdentity
function majData_majIdentity_eqmajIdentity($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_eqmajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictEq;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_eqIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_eqmajIdentity';




// Data_Identity_commutativeRingIdentity
function majData_majIdentity_commutativemajRingmajIdentity($dictCommutativeRing) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_commutativemajRingmajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictCommutativeRing;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_commutativeRingIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_commutativemajRingmajIdentity';

// Data_Identity_boundedIdentity
function majData_majIdentity_boundedmajIdentity($dictBounded) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_boundedmajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictBounded;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_boundedIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_boundedmajIdentity';

// Data_Identity_booleanAlgebraIdentity
function majData_majIdentity_booleanmajAlgebramajIdentity($dictBooleanAlgebra) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majIdentity_booleanmajAlgebramajIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictBooleanAlgebra;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Identity_booleanAlgebraIdentity'] = __NAMESPACE__ . '\\majData_majIdentity_booleanmajAlgebramajIdentity';







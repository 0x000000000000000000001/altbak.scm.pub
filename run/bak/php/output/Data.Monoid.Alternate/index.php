<?php

namespace Data\Monoid\Alternate;

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
      case 'Data_Monoid_Alternate_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Monoid_Alternate_newtypeAlternate': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
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
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Alternate/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';


// Data_Monoid_Alternate_Alternate
function majData_majMonoid_majAlternate_majAlternate($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_majAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_Alternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_majAlternate';

// Data_Monoid_Alternate_showAlternate
function majData_majMonoid_majAlternate_showmajAlternate($dictShow) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_showmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Monoid_Alternate_append = ($GLOBALS['Data_Monoid_Alternate_append'] ?? \Data\Monoid\Alternate\phpurs_eval_thunk('Data_Monoid_Alternate_append'));
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Monoid_Alternate_append, $show) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$a = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Monoid_Alternate_append)("(Alternate "))((($__global_Data_Monoid_Alternate_append)(($show)($a)))(")"));
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
$GLOBALS['Data_Monoid_Alternate_showAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_showmajAlternate';

// Data_Monoid_Alternate_semigroupAlternate
function majData_majMonoid_majAlternate_semigroupmajAlternate($dictAlt) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_semigroupmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $alt = ($dictAlt)->alt;
  $__res = (object)["append" => (function() use ($alt) {
  $__fn = function($v, $v1 = null) use ($alt, &$__fn) {
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
$__res = (($alt)($a))($b);
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
$GLOBALS['Data_Monoid_Alternate_semigroupAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_semigroupmajAlternate';

// Data_Monoid_Alternate_plusAlternate
function majData_majMonoid_majAlternate_plusmajAlternate($dictPlus) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_plusmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictPlus;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_plusAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_plusmajAlternate';

// Data_Monoid_Alternate_ordAlternate
function majData_majMonoid_majAlternate_ordmajAlternate($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_ordmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictOrd;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_ordAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_ordmajAlternate';

// Data_Monoid_Alternate_ord1Alternate
function majData_majMonoid_majAlternate_ord1majAlternate($dictOrd1) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_ord1majAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictOrd1;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_ord1Alternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_ord1majAlternate';


// Data_Monoid_Alternate_monoidAlternate
function majData_majMonoid_majAlternate_monoidmajAlternate($dictPlus) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_monoidmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Monoid_Alternate_semigroupAlternate = ($GLOBALS['Data_Monoid_Alternate_semigroupAlternate'] ?? \Data\Monoid\Alternate\phpurs_eval_thunk('Data_Monoid_Alternate_semigroupAlternate'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $semigroupAlternate1 = ($__global_Data_Monoid_Alternate_semigroupAlternate)((($dictPlus)->Alt0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($dictPlus)->empty, "Semigroup0" => function($dollar__unused) use ($semigroupAlternate1) {
  $__num = \func_num_args();
  $__res = $semigroupAlternate1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_monoidAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_monoidmajAlternate';

// Data_Monoid_Alternate_monadAlternate
function majData_majMonoid_majAlternate_monadmajAlternate($dictMonad) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_monadmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictMonad;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_monadAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_monadmajAlternate';

// Data_Monoid_Alternate_functorAlternate
function majData_majMonoid_majAlternate_functormajAlternate($dictFunctor) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_functormajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictFunctor;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_functorAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_functormajAlternate';

// Data_Monoid_Alternate_extendAlternate
function majData_majMonoid_majAlternate_extendmajAlternate($dictExtend) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_extendmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictExtend;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_extendAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_extendmajAlternate';

// Data_Monoid_Alternate_eqAlternate
function majData_majMonoid_majAlternate_eqmajAlternate($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_eqmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictEq;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_eqAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_eqmajAlternate';

// Data_Monoid_Alternate_eq1Alternate
function majData_majMonoid_majAlternate_eq1majAlternate($dictEq1) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_eq1majAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictEq1;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_eq1Alternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_eq1majAlternate';

// Data_Monoid_Alternate_comonadAlternate
function majData_majMonoid_majAlternate_comonadmajAlternate($dictComonad) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_comonadmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictComonad;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_comonadAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_comonadmajAlternate';

// Data_Monoid_Alternate_boundedAlternate
function majData_majMonoid_majAlternate_boundedmajAlternate($dictBounded) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_boundedmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictBounded;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_boundedAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_boundedmajAlternate';

// Data_Monoid_Alternate_bindAlternate
function majData_majMonoid_majAlternate_bindmajAlternate($dictBind) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_bindmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictBind;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_bindAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_bindmajAlternate';

// Data_Monoid_Alternate_applyAlternate
function majData_majMonoid_majAlternate_applymajAlternate($dictApply) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_applymajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictApply;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_applyAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_applymajAlternate';

// Data_Monoid_Alternate_applicativeAlternate
function majData_majMonoid_majAlternate_applicativemajAlternate($dictApplicative) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_applicativemajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictApplicative;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_applicativeAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_applicativemajAlternate';

// Data_Monoid_Alternate_alternativeAlternate
function majData_majMonoid_majAlternate_alternativemajAlternate($dictAlternative) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_alternativemajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictAlternative;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_alternativeAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_alternativemajAlternate';

// Data_Monoid_Alternate_altAlternate
function majData_majMonoid_majAlternate_altmajAlternate($dictAlt) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majAlternate_altmajAlternate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictAlt;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Alternate_altAlternate'] = __NAMESPACE__ . '\\majData_majMonoid_majAlternate_altmajAlternate';


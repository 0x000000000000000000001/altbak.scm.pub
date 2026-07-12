<?php

namespace Data\Monoid\Multiplicative;

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
      case 'Data_Monoid_Multiplicative_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Monoid_Multiplicative_functorMultiplicative': $v = (object)["map" => (function() {
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
      case 'Data_Monoid_Multiplicative_eq1Multiplicative': $v = (object)["eq1" => function($dictEq) {
  $__num = \func_num_args();
  $__res = ($dictEq)->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_Multiplicative_ord1Multiplicative': $v = (object)["compare1" => function($dictOrd) {
  $__num = \func_num_args();
  $__res = ($dictOrd)->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Multiplicative_eq1Multiplicative = ($GLOBALS['Data_Monoid_Multiplicative_eq1Multiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_eq1Multiplicative'));
  $__res = $__global_Data_Monoid_Multiplicative_eq1Multiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_Multiplicative_applyMultiplicative': $v = (object)["apply" => (function() {
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
  $__global_Data_Monoid_Multiplicative_functorMultiplicative = ($GLOBALS['Data_Monoid_Multiplicative_functorMultiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_functorMultiplicative'));
  $__res = $__global_Data_Monoid_Multiplicative_functorMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_Multiplicative_bindMultiplicative': $v = (object)["bind" => (function() {
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
$x = $__case_0;
$f1 = $__case_1;
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Multiplicative_applyMultiplicative = ($GLOBALS['Data_Monoid_Multiplicative_applyMultiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_applyMultiplicative'));
  $__res = $__global_Data_Monoid_Multiplicative_applyMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_Multiplicative_applicativeMultiplicative': $v = (object)["pure" => "\\Data\\Monoid\\Multiplicative\\majData_majMonoid_majMultiplicative_majMultiplicative", "Apply0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Multiplicative_applyMultiplicative = ($GLOBALS['Data_Monoid_Multiplicative_applyMultiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_applyMultiplicative'));
  $__res = $__global_Data_Monoid_Multiplicative_applyMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_Multiplicative_monadMultiplicative': $v = (object)["Applicative0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Multiplicative_applicativeMultiplicative = ($GLOBALS['Data_Monoid_Multiplicative_applicativeMultiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_applicativeMultiplicative'));
  $__res = $__global_Data_Monoid_Multiplicative_applicativeMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Multiplicative_bindMultiplicative = ($GLOBALS['Data_Monoid_Multiplicative_bindMultiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_bindMultiplicative'));
  $__res = $__global_Data_Monoid_Multiplicative_bindMultiplicative;
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


require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';


// Data_Monoid_Multiplicative_Multiplicative
function majData_majMonoid_majMultiplicative_majMultiplicative($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majMultiplicative_majMultiplicative';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Multiplicative_Multiplicative'] = __NAMESPACE__ . '\\majData_majMonoid_majMultiplicative_majMultiplicative';

// Data_Monoid_Multiplicative_showMultiplicative
function majData_majMonoid_majMultiplicative_showmajMultiplicative($dictShow) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majMultiplicative_showmajMultiplicative';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Monoid_Multiplicative_append = ($GLOBALS['Data_Monoid_Multiplicative_append'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_append'));
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Monoid_Multiplicative_append, $show) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$a = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Monoid_Multiplicative_append)("(Multiplicative "))((($__global_Data_Monoid_Multiplicative_append)(($show)($a)))(")"));
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
$GLOBALS['Data_Monoid_Multiplicative_showMultiplicative'] = __NAMESPACE__ . '\\majData_majMonoid_majMultiplicative_showmajMultiplicative';

// Data_Monoid_Multiplicative_semigroupMultiplicative
function majData_majMonoid_majMultiplicative_semigroupmajMultiplicative($dictSemiring) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majMultiplicative_semigroupmajMultiplicative';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $mul = ($dictSemiring)->mul;
  $__res = (object)["append" => (function() use ($mul) {
  $__fn = function($v, $v1 = null) use ($mul, &$__fn) {
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
$__res = (($mul)($a))($b);
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
$GLOBALS['Data_Monoid_Multiplicative_semigroupMultiplicative'] = __NAMESPACE__ . '\\majData_majMonoid_majMultiplicative_semigroupmajMultiplicative';

// Data_Monoid_Multiplicative_ordMultiplicative
function majData_majMonoid_majMultiplicative_ordmajMultiplicative($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majMultiplicative_ordmajMultiplicative';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictOrd;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Multiplicative_ordMultiplicative'] = __NAMESPACE__ . '\\majData_majMonoid_majMultiplicative_ordmajMultiplicative';

// Data_Monoid_Multiplicative_monoidMultiplicative
function majData_majMonoid_majMultiplicative_monoidmajMultiplicative($dictSemiring) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majMultiplicative_monoidmajMultiplicative';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Monoid_Multiplicative_semigroupMultiplicative = ($GLOBALS['Data_Monoid_Multiplicative_semigroupMultiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_semigroupMultiplicative'));
  $semigroupMultiplicative1 = ($__global_Data_Monoid_Multiplicative_semigroupMultiplicative)($dictSemiring);
  $__res = (object)["mempty" => ($dictSemiring)->one, "Semigroup0" => function($dollar__unused) use ($semigroupMultiplicative1) {
  $__num = \func_num_args();
  $__res = $semigroupMultiplicative1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Multiplicative_monoidMultiplicative'] = __NAMESPACE__ . '\\majData_majMonoid_majMultiplicative_monoidmajMultiplicative';


// Data_Monoid_Multiplicative_eqMultiplicative
function majData_majMonoid_majMultiplicative_eqmajMultiplicative($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majMultiplicative_eqmajMultiplicative';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictEq;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Multiplicative_eqMultiplicative'] = __NAMESPACE__ . '\\majData_majMonoid_majMultiplicative_eqmajMultiplicative';



// Data_Monoid_Multiplicative_boundedMultiplicative
function majData_majMonoid_majMultiplicative_boundedmajMultiplicative($dictBounded) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majMultiplicative_boundedmajMultiplicative';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictBounded;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Multiplicative_boundedMultiplicative'] = __NAMESPACE__ . '\\majData_majMonoid_majMultiplicative_boundedmajMultiplicative';






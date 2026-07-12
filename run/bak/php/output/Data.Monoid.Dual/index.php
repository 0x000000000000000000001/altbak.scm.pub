<?php

namespace Data\Monoid\Dual;

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
      case 'Data_Monoid_Dual_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Monoid_Dual_functorDual': $v = (object)["map" => (function() {
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
      case 'Data_Monoid_Dual_eq1Dual': $v = (object)["eq1" => function($dictEq) {
  $__num = \func_num_args();
  $__res = ($dictEq)->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_Dual_ord1Dual': $v = (object)["compare1" => function($dictOrd) {
  $__num = \func_num_args();
  $__res = ($dictOrd)->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Dual_eq1Dual = ($GLOBALS['Data_Monoid_Dual_eq1Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_eq1Dual'));
  $__res = $__global_Data_Monoid_Dual_eq1Dual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_Dual_applyDual': $v = (object)["apply" => (function() {
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
  $__global_Data_Monoid_Dual_functorDual = ($GLOBALS['Data_Monoid_Dual_functorDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_functorDual'));
  $__res = $__global_Data_Monoid_Dual_functorDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_Dual_bindDual': $v = (object)["bind" => (function() {
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
  $__global_Data_Monoid_Dual_applyDual = ($GLOBALS['Data_Monoid_Dual_applyDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_applyDual'));
  $__res = $__global_Data_Monoid_Dual_applyDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_Dual_applicativeDual': $v = (object)["pure" => "\\Data\\Monoid\\Dual\\majData_majMonoid_majDual_majDual", "Apply0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Dual_applyDual = ($GLOBALS['Data_Monoid_Dual_applyDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_applyDual'));
  $__res = $__global_Data_Monoid_Dual_applyDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_Dual_monadDual': $v = (object)["Applicative0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Dual_applicativeDual = ($GLOBALS['Data_Monoid_Dual_applicativeDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_applicativeDual'));
  $__res = $__global_Data_Monoid_Dual_applicativeDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Dual_bindDual = ($GLOBALS['Data_Monoid_Dual_bindDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_bindDual'));
  $__res = $__global_Data_Monoid_Dual_bindDual;
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
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';


// Data_Monoid_Dual_Dual
function majData_majMonoid_majDual_majDual($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majDual_majDual';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Dual_Dual'] = __NAMESPACE__ . '\\majData_majMonoid_majDual_majDual';

// Data_Monoid_Dual_showDual
function majData_majMonoid_majDual_showmajDual($dictShow) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majDual_showmajDual';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Monoid_Dual_append = ($GLOBALS['Data_Monoid_Dual_append'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_append'));
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Monoid_Dual_append, $show) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$a = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Monoid_Dual_append)("(Dual "))((($__global_Data_Monoid_Dual_append)(($show)($a)))(")"));
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
$GLOBALS['Data_Monoid_Dual_showDual'] = __NAMESPACE__ . '\\majData_majMonoid_majDual_showmajDual';

// Data_Monoid_Dual_semigroupDual
function majData_majMonoid_majDual_semigroupmajDual($dictSemigroup) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majDual_semigroupmajDual';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $append1 = ($dictSemigroup)->append;
  $__res = (object)["append" => (function() use ($append1) {
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
$__res = (($append1)($y))($x);
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
$GLOBALS['Data_Monoid_Dual_semigroupDual'] = __NAMESPACE__ . '\\majData_majMonoid_majDual_semigroupmajDual';

// Data_Monoid_Dual_ordDual
function majData_majMonoid_majDual_ordmajDual($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majDual_ordmajDual';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictOrd;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Dual_ordDual'] = __NAMESPACE__ . '\\majData_majMonoid_majDual_ordmajDual';

// Data_Monoid_Dual_monoidDual
function majData_majMonoid_majDual_monoidmajDual($dictMonoid) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majDual_monoidmajDual';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Monoid_Dual_semigroupDual = ($GLOBALS['Data_Monoid_Dual_semigroupDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_semigroupDual'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $semigroupDual1 = ($__global_Data_Monoid_Dual_semigroupDual)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($dictMonoid)->mempty, "Semigroup0" => function($dollar__unused) use ($semigroupDual1) {
  $__num = \func_num_args();
  $__res = $semigroupDual1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Dual_monoidDual'] = __NAMESPACE__ . '\\majData_majMonoid_majDual_monoidmajDual';


// Data_Monoid_Dual_eqDual
function majData_majMonoid_majDual_eqmajDual($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majDual_eqmajDual';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictEq;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Dual_eqDual'] = __NAMESPACE__ . '\\majData_majMonoid_majDual_eqmajDual';



// Data_Monoid_Dual_boundedDual
function majData_majMonoid_majDual_boundedmajDual($dictBounded) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majMonoid_majDual_boundedmajDual';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictBounded;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Dual_boundedDual'] = __NAMESPACE__ . '\\majData_majMonoid_majDual_boundedmajDual';






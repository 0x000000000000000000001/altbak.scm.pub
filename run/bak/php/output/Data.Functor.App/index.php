<?php

namespace Data\Functor\App;

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
      case 'Data_Functor_App_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Functor_App_newtypeApp': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Functor_App_hoistLowerApp': $v = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce')); break;
      case 'Data_Functor_App_hoistLiftApp': $v = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce')); break;
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
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';


// Data_Functor_App_App
function majData_majFunctor_majApp_majApp($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_majApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_App'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_majApp';

// Data_Functor_App_showApp
function majData_majFunctor_majApp_showmajApp($dictShow) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_showmajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Functor_App_append = ($GLOBALS['Data_Functor_App_append'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_append'));
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Functor_App_append, $show) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$fa = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Functor_App_append)("(App "))((($__global_Data_Functor_App_append)(($show)($fa)))(")"));
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
$GLOBALS['Data_Functor_App_showApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_showmajApp';

// Data_Functor_App_semigroupApp
function majData_majFunctor_majApp_semigroupmajApp($dictApply, $dictSemigroup = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_semigroupmajApp';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $lift2 = ($__global_Control_Apply_lift2)($dictApply);
  $append1 = ($dictSemigroup)->append;
  $__res = (object)["append" => (function() use ($lift2, $append1) {
  $__fn = function($v, $v1 = null) use ($lift2, $append1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$fa1 = $__case_0;
$fa2 = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = ((($lift2)($append1))($fa1))($fa2);
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
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_App_semigroupApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_semigroupmajApp';

// Data_Functor_App_plusApp
function majData_majFunctor_majApp_plusmajApp($dictPlus) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_plusmajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictPlus;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_plusApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_plusmajApp';


// Data_Functor_App_monoidApp
function majData_majFunctor_majApp_monoidmajApp($dictApplicative, $dictMonoid = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_monoidmajApp';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_App_semigroupApp = ($GLOBALS['Data_Functor_App_semigroupApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_semigroupApp'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = ($dictApplicative)->pure;
  $semigroupApp1 = ($__global_Data_Functor_App_semigroupApp)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $semigroupApp2 = ($semigroupApp1)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($pure)(($dictMonoid)->mempty), "Semigroup0" => function($dollar__unused) use ($semigroupApp2) {
  $__num = \func_num_args();
  $__res = $semigroupApp2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_App_monoidApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_monoidmajApp';

// Data_Functor_App_monadPlusApp
function majData_majFunctor_majApp_monadmajPlusmajApp($dictMonadPlus) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_monadmajPlusmajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictMonadPlus;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_monadPlusApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_monadmajPlusmajApp';

// Data_Functor_App_monadApp
function majData_majFunctor_majApp_monadmajApp($dictMonad) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_monadmajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictMonad;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_monadApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_monadmajApp';

// Data_Functor_App_lazyApp
function majData_majFunctor_majApp_lazymajApp($dictLazy) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_lazymajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictLazy;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_lazyApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_lazymajApp';



// Data_Functor_App_hoistApp
function majData_majFunctor_majApp_hoistmajApp($f, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_hoistmajApp';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$fa = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = ($f1)($fa);
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
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_App_hoistApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_hoistmajApp';

// Data_Functor_App_functorApp
function majData_majFunctor_majApp_functormajApp($dictFunctor) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_functormajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictFunctor;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_functorApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_functormajApp';

// Data_Functor_App_extendApp
function majData_majFunctor_majApp_extendmajApp($dictExtend) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_extendmajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictExtend;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_extendApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_extendmajApp';

// Data_Functor_App_eqApp
function majData_majFunctor_majApp_eqmajApp($dictEq1, $dictEq = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_eqmajApp';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $eq1 = ($dictEq1)->eq1;
  $eq11 = ($eq1)($dictEq);
  $__res = (object)["eq" => (function() use ($eq11) {
  $__fn = function($x, $y = null) use ($eq11, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$l = $__case_0;
$r = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($eq11)($l))($r);
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
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_App_eqApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_eqmajApp';

// Data_Functor_App_ordApp
function majData_majFunctor_majApp_ordmajApp($dictOrd1, $dictOrd = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_ordmajApp';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_App_eqApp = ($GLOBALS['Data_Functor_App_eqApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_eqApp'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $compare1 = ($dictOrd1)->compare1;
  $eqApp1 = ($__global_Data_Functor_App_eqApp)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $compare11 = ($compare1)($dictOrd);
  $eqApp2 = ($eqApp1)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => (function() use ($compare11) {
  $__fn = function($x, $y = null) use ($compare11, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$l = $__case_0;
$r = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($compare11)($l))($r);
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
})(), "Eq0" => function($dollar__unused) use ($eqApp2) {
  $__num = \func_num_args();
  $__res = $eqApp2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_App_ordApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_ordmajApp';

// Data_Functor_App_eq1App
function majData_majFunctor_majApp_eq1majApp($dictEq1) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_eq1majApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Functor_App_eqApp = ($GLOBALS['Data_Functor_App_eqApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_eqApp'));
  $eqApp1 = ($__global_Data_Functor_App_eqApp)($dictEq1);
  $__res = (object)["eq1" => function($dictEq) use ($eqApp1) {
  $__num = \func_num_args();
  $__res = (($eqApp1)($dictEq))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_eq1App'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_eq1majApp';

// Data_Functor_App_ord1App
function majData_majFunctor_majApp_ord1majApp($dictOrd1) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_ord1majApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Functor_App_ordApp = ($GLOBALS['Data_Functor_App_ordApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_ordApp'));
  $__global_Data_Functor_App_eq1App = ($GLOBALS['Data_Functor_App_eq1App'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_eq1App'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $ordApp1 = ($__global_Data_Functor_App_ordApp)($dictOrd1);
  $eq1App1 = ($__global_Data_Functor_App_eq1App)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $__res = (object)["compare1" => function($dictOrd) use ($ordApp1) {
  $__num = \func_num_args();
  $__res = (($ordApp1)($dictOrd))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused) use ($eq1App1) {
  $__num = \func_num_args();
  $__res = $eq1App1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_ord1App'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_ord1majApp';

// Data_Functor_App_comonadApp
function majData_majFunctor_majApp_comonadmajApp($dictComonad) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_comonadmajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictComonad;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_comonadApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_comonadmajApp';

// Data_Functor_App_bindApp
function majData_majFunctor_majApp_bindmajApp($dictBind) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_bindmajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictBind;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_bindApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_bindmajApp';

// Data_Functor_App_applyApp
function majData_majFunctor_majApp_applymajApp($dictApply) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_applymajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictApply;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_applyApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_applymajApp';

// Data_Functor_App_applicativeApp
function majData_majFunctor_majApp_applicativemajApp($dictApplicative) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_applicativemajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictApplicative;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_applicativeApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_applicativemajApp';

// Data_Functor_App_alternativeApp
function majData_majFunctor_majApp_alternativemajApp($dictAlternative) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_alternativemajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictAlternative;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_alternativeApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_alternativemajApp';

// Data_Functor_App_altApp
function majData_majFunctor_majApp_altmajApp($dictAlt) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majApp_altmajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $dictAlt;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_App_altApp'] = __NAMESPACE__ . '\\majData_majFunctor_majApp_altmajApp';


<?php

namespace Data\Functor\Compose;

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
      case 'Data_Functor_Compose_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Functor_Compose_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Data_Functor_Compose_newtypeCompose': $v = (object)["Coercible0" => function($dollar__unused) {
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
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';



// Data_Functor_Compose_Compose
function majData_majFunctor_majCompose_majCompose($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_majCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_Compose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_majCompose';

// Data_Functor_Compose_showCompose
function majData_majFunctor_majCompose_showmajCompose($dictShow) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_showmajCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Functor_Compose_append = ($GLOBALS['Data_Functor_Compose_append'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_append'));
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Functor_Compose_append, $show) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$fga = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Functor_Compose_append)("(Compose "))((($__global_Data_Functor_Compose_append)(($show)($fga)))(")"));
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
$GLOBALS['Data_Functor_Compose_showCompose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_showmajCompose';


// Data_Functor_Compose_functorCompose
function majData_majFunctor_majCompose_functormajCompose($dictFunctor, $dictFunctor1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_functormajCompose';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $map = ($dictFunctor)->map;
  $map1 = ($dictFunctor1)->map;
  $__res = (object)["map" => (function() use ($map, $map1) {
  $__fn = function($f, $v = null) use ($map, $map1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$fga = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($map)(($map1)($f1)))($fga);
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
$GLOBALS['Data_Functor_Compose_functorCompose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_functormajCompose';

// Data_Functor_Compose_eqCompose
function majData_majFunctor_majCompose_eqmajCompose($dictEq1, $dictEq11 = null, $dictEq = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_eqmajCompose';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Functor_App_eqApp = ($GLOBALS['Data_Functor_App_eqApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_eqApp'));
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $eq1 = ($dictEq1)->eq1;
  $eqApp = ($__global_Data_Functor_App_eqApp)($dictEq11);
  $eq11 = ($eq1)(($eqApp)($dictEq));
  $__res = (object)["eq" => (function() use ($eq11, $__global_Unsafe_Coerce_unsafeCoerce) {
  $__fn = function($v, $v1 = null) use ($eq11, $__global_Unsafe_Coerce_unsafeCoerce, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$fga1 = $__case_0;
$fga2 = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($eq11)(($__global_Unsafe_Coerce_unsafeCoerce)($fga1)))(($__global_Unsafe_Coerce_unsafeCoerce)($fga2));
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
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Compose_eqCompose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_eqmajCompose';

// Data_Functor_Compose_ordCompose
function majData_majFunctor_majCompose_ordmajCompose($dictOrd1, $dictOrd11 = null, $dictOrd = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_ordmajCompose';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Functor_Compose_eqCompose = ($GLOBALS['Data_Functor_Compose_eqCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_eqCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_App_ordApp = ($GLOBALS['Data_Functor_App_ordApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_ordApp'));
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $compare1 = ($dictOrd1)->compare1;
  $eqCompose1 = ($__global_Data_Functor_Compose_eqCompose)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $ordApp = ($__global_Data_Functor_App_ordApp)($dictOrd11);
  $eqCompose2 = ($eqCompose1)((($dictOrd11)->Eq10)($__global_Prim_undefined));
  $compare11 = ($compare1)(($ordApp)($dictOrd));
  $eqCompose3 = ($eqCompose2)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => (function() use ($compare11, $__global_Unsafe_Coerce_unsafeCoerce) {
  $__fn = function($v, $v1 = null) use ($compare11, $__global_Unsafe_Coerce_unsafeCoerce, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$fga1 = $__case_0;
$fga2 = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($compare11)(($__global_Unsafe_Coerce_unsafeCoerce)($fga1)))(($__global_Unsafe_Coerce_unsafeCoerce)($fga2));
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
})(), "Eq0" => function($dollar__unused) use ($eqCompose3) {
  $__num = \func_num_args();
  $__res = $eqCompose3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Compose_ordCompose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_ordmajCompose';

// Data_Functor_Compose_eq1Compose
function majData_majFunctor_majCompose_eq1majCompose($dictEq1, $dictEq11 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_eq1majCompose';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Compose_eqCompose = ($GLOBALS['Data_Functor_Compose_eqCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_eqCompose'));
  $eqCompose1 = ($__global_Data_Functor_Compose_eqCompose)($dictEq1);
  $eqCompose2 = ($eqCompose1)($dictEq11);
  $__res = (object)["eq1" => function($dictEq) use ($eqCompose2) {
  $__num = \func_num_args();
  $__res = (($eqCompose2)($dictEq))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Compose_eq1Compose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_eq1majCompose';

// Data_Functor_Compose_ord1Compose
function majData_majFunctor_majCompose_ord1majCompose($dictOrd1, $dictOrd11 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_ord1majCompose';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Compose_ordCompose = ($GLOBALS['Data_Functor_Compose_ordCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_ordCompose'));
  $__global_Data_Functor_Compose_eq1Compose = ($GLOBALS['Data_Functor_Compose_eq1Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_eq1Compose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $ordCompose1 = ($__global_Data_Functor_Compose_ordCompose)($dictOrd1);
  $eq1Compose1 = ($__global_Data_Functor_Compose_eq1Compose)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $ordCompose2 = ($ordCompose1)($dictOrd11);
  $eq1Compose2 = ($eq1Compose1)((($dictOrd11)->Eq10)($__global_Prim_undefined));
  $__res = (object)["compare1" => function($dictOrd) use ($ordCompose2) {
  $__num = \func_num_args();
  $__res = (($ordCompose2)($dictOrd))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused) use ($eq1Compose2) {
  $__num = \func_num_args();
  $__res = $eq1Compose2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Compose_ord1Compose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_ord1majCompose';

// Data_Functor_Compose_bihoistCompose
function majData_majFunctor_majCompose_bihoistmajCompose($dictFunctor, $natF = null, $natG = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_bihoistmajCompose';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $map = ($dictFunctor)->map;
  $__case_0 = $natF;
  $__case_1 = $natG;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$fga = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = ($natF1)((($map)($natG1))($fga));
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
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Functor_Compose_bihoistCompose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_bihoistmajCompose';

// Data_Functor_Compose_applyCompose
function majData_majFunctor_majCompose_applymajCompose($dictApply, $dictApply1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_applymajCompose';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Compose_functorCompose = ($GLOBALS['Data_Functor_Compose_functorCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_functorCompose'));
  $apply = ($dictApply)->apply;
  $Functor0 = (($dictApply)->Functor0)($__global_Prim_undefined);
  $map = ($Functor0)->map;
  $functorCompose1 = ($__global_Data_Functor_Compose_functorCompose)($Functor0);
  $apply1 = ($dictApply1)->apply;
  $functorCompose2 = ($functorCompose1)((($dictApply1)->Functor0)($__global_Prim_undefined));
  $__res = (object)["apply" => (function() use ($apply, $map, $apply1) {
  $__fn = function($v, $v1 = null) use ($apply, $map, $apply1, &$__fn) {
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
$__res = (($apply)((($map)($apply1))($f)))($x);
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
})(), "Functor0" => function($dollar__unused) use ($functorCompose2) {
  $__num = \func_num_args();
  $__res = $functorCompose2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Compose_applyCompose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_applymajCompose';

// Data_Functor_Compose_applicativeCompose
function majData_majFunctor_majCompose_applicativemajCompose($dictApplicative, $dictApplicative1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_applicativemajCompose';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Compose_applyCompose = ($GLOBALS['Data_Functor_Compose_applyCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_applyCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Compose_Compose = ($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose'));
  $pure = ($dictApplicative)->pure;
  $applyCompose1 = ($__global_Data_Functor_Compose_applyCompose)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $applyCompose2 = ($applyCompose1)((($dictApplicative1)->Apply0)($__global_Prim_undefined));
  $__res = (object)["pure" => function($__x) use ($__global_Data_Functor_Compose_Compose, $pure, $dictApplicative1) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Functor_Compose_Compose)((function($__x) use ($pure, $dictApplicative1) {
  $__num = \func_num_args();
  $__res = ($pure)((($dictApplicative1)->pure)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused) use ($applyCompose2) {
  $__num = \func_num_args();
  $__res = $applyCompose2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Compose_applicativeCompose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_applicativemajCompose';

// Data_Functor_Compose_altCompose
function majData_majFunctor_majCompose_altmajCompose($dictAlt, $dictFunctor = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_altmajCompose';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Compose_functorCompose = ($GLOBALS['Data_Functor_Compose_functorCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_functorCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $alt = ($dictAlt)->alt;
  $functorCompose1 = ($__global_Data_Functor_Compose_functorCompose)((($dictAlt)->Functor0)($__global_Prim_undefined));
  $functorCompose2 = ($functorCompose1)($dictFunctor);
  $__res = (object)["alt" => (function() use ($alt) {
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
})(), "Functor0" => function($dollar__unused) use ($functorCompose2) {
  $__num = \func_num_args();
  $__res = $functorCompose2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Compose_altCompose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_altmajCompose';

// Data_Functor_Compose_plusCompose
function majData_majFunctor_majCompose_plusmajCompose($dictPlus, $dictFunctor = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_plusmajCompose';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Compose_altCompose = ($GLOBALS['Data_Functor_Compose_altCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_altCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $empty = ($dictPlus)->empty;
  $altCompose1 = ($__global_Data_Functor_Compose_altCompose)((($dictPlus)->Alt0)($__global_Prim_undefined));
  $altCompose2 = ($altCompose1)($dictFunctor);
  $__res = (object)["empty" => $empty, "Alt0" => function($dollar__unused) use ($altCompose2) {
  $__num = \func_num_args();
  $__res = $altCompose2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Compose_plusCompose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_plusmajCompose';

// Data_Functor_Compose_alternativeCompose
function majData_majFunctor_majCompose_alternativemajCompose($dictAlternative, $dictApplicative = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCompose_alternativemajCompose';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Compose_applicativeCompose = ($GLOBALS['Data_Functor_Compose_applicativeCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_applicativeCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Compose_plusCompose = ($GLOBALS['Data_Functor_Compose_plusCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_plusCompose'));
  $applicativeCompose1 = ($__global_Data_Functor_Compose_applicativeCompose)((($dictAlternative)->Applicative0)($__global_Prim_undefined));
  $plusCompose1 = ($__global_Data_Functor_Compose_plusCompose)((($dictAlternative)->Plus1)($__global_Prim_undefined));
  $applicativeCompose2 = ($applicativeCompose1)($dictApplicative);
  $plusCompose2 = ($plusCompose1)((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $__res = (object)["Applicative0" => function($dollar__unused) use ($applicativeCompose2) {
  $__num = \func_num_args();
  $__res = $applicativeCompose2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused) use ($plusCompose2) {
  $__num = \func_num_args();
  $__res = $plusCompose2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Compose_alternativeCompose'] = __NAMESPACE__ . '\\majData_majFunctor_majCompose_alternativemajCompose';


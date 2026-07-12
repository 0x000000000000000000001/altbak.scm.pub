<?php

namespace Data\Distributive;

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
      case 'Data_Distributive_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Data_Distributive_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Distributive_distributiveIdentity': $v = (object)["distribute" => function($dictFunctor) {
  $__num = \func_num_args();
  $__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
  $__global_Data_Distributive_unwrap = ($GLOBALS['Data_Distributive_unwrap'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_unwrap'));
  $__res = function($__x) use ($__global_Data_Identity_Identity, $dictFunctor, $__global_Data_Distributive_unwrap) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Identity_Identity)(((($dictFunctor)->map)($__global_Data_Distributive_unwrap))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "collect" => (function() {
  $__fn = function($dictFunctor, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
  $__global_Data_Distributive_unwrap = ($GLOBALS['Data_Distributive_unwrap'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_unwrap'));
  $map = ($dictFunctor)->map;
  $__res = function($__x) use ($__global_Data_Identity_Identity, $map, $__global_Data_Distributive_unwrap, $f) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Identity_Identity)((($map)(function($__x) use ($__global_Data_Distributive_unwrap, $f) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Distributive_unwrap)(($f)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
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
      case 'Data_Distributive_distributiveFunction': $v = (object)["distribute" => (function() {
  $__fn = function($dictFunctor, $a = null, $e = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $map = ($dictFunctor)->map;
  $__res = (($map)(function($v) use ($e) {
  $__num = \func_num_args();
  $__res = ($v)($e);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($a);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "collect" => (function() {
  $__fn = function($dictFunctor, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Distributive_distributiveFunction = ($GLOBALS['Data_Distributive_distributiveFunction'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_distributiveFunction'));
  $map = ($dictFunctor)->map;
  $__res = function($__x) use ($__global_Data_Distributive_distributiveFunction, $dictFunctor, $map, $f) {
  $__num = \func_num_args();
  $__res = ((($__global_Data_Distributive_distributiveFunction)->distribute)($dictFunctor))((($map)($f))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Functor_functorFn = ($GLOBALS['Data_Functor_functorFn'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorFn'));
  $__res = $__global_Data_Functor_functorFn;
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


require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Type.Equality/index.php';


// Data_Distributive_unwrap
function majData_majDistributive_unwrap($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majDistributive_unwrap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $__x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Distributive_unwrap'] = __NAMESPACE__ . '\\majData_majDistributive_unwrap';


// Data_Distributive_Distributive$Dict
function majData_majDistributive_majDistributivedollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majDistributive_majDistributivedollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Distributive_DistributivedollarDict'] = __NAMESPACE__ . '\\majData_majDistributive_majDistributivedollarmajDict';


// Data_Distributive_distribute
function majData_majDistributive_distribute($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majDistributive_distribute';
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
$__res = ($v)->distribute;
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
$GLOBALS['Data_Distributive_distribute'] = __NAMESPACE__ . '\\majData_majDistributive_distribute';


// Data_Distributive_cotraverse
function majData_majDistributive_cotraverse($dictDistributive, $dictFunctor = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majDistributive_cotraverse';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $map = ((($dictDistributive)->Functor0)($__global_Prim_undefined))->map;
  $distribute1 = ($dictDistributive)->distribute;
  $distribute2 = ($distribute1)($dictFunctor);
  $__res = function($__x) use ($map, $f, $distribute2) {
  $__num = \func_num_args();
  $__res = (($map)($f))(($distribute2)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Distributive_cotraverse'] = __NAMESPACE__ . '\\majData_majDistributive_cotraverse';

// Data_Distributive_collectDefault
function majData_majDistributive_collectmajDefault($dictDistributive, $dictFunctor = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majDistributive_collectmajDefault';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $distribute1 = ($dictDistributive)->distribute;
  $distribute2 = ($distribute1)($dictFunctor);
  $map = ($dictFunctor)->map;
  $__res = function($__x) use ($distribute2, $map, $f) {
  $__num = \func_num_args();
  $__res = ($distribute2)((($map)($f))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Distributive_collectDefault'] = __NAMESPACE__ . '\\majData_majDistributive_collectmajDefault';

// Data_Distributive_distributiveTuple
function majData_majDistributive_distributivemajTuple($dictTypeEquals) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majDistributive_distributivemajTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Type_Equality_from = ($GLOBALS['Type_Equality_from'] ?? \Type\Equality\phpurs_eval_thunk('Type_Equality_from'));
  $__global_Data_Distributive_collectDefault = ($GLOBALS['Data_Distributive_collectDefault'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_collectDefault'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $__global_Data_Tuple_functorTuple = ($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple'));
  while (true) {
$from = ($__global_Type_Equality_from)($dictTypeEquals);
$__res = (object)["collect" => function($dictFunctor) use ($__global_Data_Distributive_collectDefault, $dictTypeEquals) {
  $__num = \func_num_args();
  $__global_Data_Distributive_distributiveTuple = ($GLOBALS['Data_Distributive_distributiveTuple'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_distributiveTuple'));
  $__res = (($__global_Data_Distributive_collectDefault)(($__global_Data_Distributive_distributiveTuple)($dictTypeEquals)))($dictFunctor);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "distribute" => function($dictFunctor) use ($from, $__global_Data_Unit_unit, $__global_Data_Tuple_snd) {
  $__num = \func_num_args();
  $__res = function($__x) use ($from, $__global_Data_Unit_unit, $dictFunctor, $__global_Data_Tuple_snd) {
  $__num = \func_num_args();
  $__res = (((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($from)($__global_Data_Unit_unit)))(((($dictFunctor)->map)($__global_Data_Tuple_snd))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused) use ($__global_Data_Tuple_functorTuple) {
  $__num = \func_num_args();
  $__res = $__global_Data_Tuple_functorTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Distributive_distributiveTuple'] = __NAMESPACE__ . '\\majData_majDistributive_distributivemajTuple';

// Data_Distributive_collect
function majData_majDistributive_collect($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majDistributive_collect';
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
$__res = ($v)->collect;
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
$GLOBALS['Data_Distributive_collect'] = __NAMESPACE__ . '\\majData_majDistributive_collect';

// Data_Distributive_distributeDefault
function majData_majDistributive_distributemajDefault($dictDistributive, $dictFunctor = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majDistributive_distributemajDefault';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Distributive_identity = ($GLOBALS['Data_Distributive_identity'] ?? \Data\Distributive\phpurs_eval_thunk('Data_Distributive_identity'));
  $collect1 = ($dictDistributive)->collect;
  $__res = (($collect1)($dictFunctor))($__global_Data_Distributive_identity);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Distributive_distributeDefault'] = __NAMESPACE__ . '\\majData_majDistributive_distributemajDefault';


<?php

namespace Data\Profunctor;

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
      case 'Data_Profunctor_composeFlipped': $v = \Control\Semigroupoid\majControl_majSemigroupoid_composemajFlipped(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Profunctor_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Profunctor_profunctorFn': $v = (object)["dimap" => (function() {
  $__fn = function($a2b, $c2d = null, $b2c = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = function($__x) use ($a2b, $b2c, $c2d) {
  $__num = \func_num_args();
  $__res = (function($__x) use ($b2c, $c2d) {
  $__num = \func_num_args();
  $__res = ($c2d)(($b2c)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})(($a2b)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Prelude/index.php';



// Data_Profunctor_wrap
function majData_majProfunctor_wrap($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majProfunctor_wrap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $__x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_wrap'] = __NAMESPACE__ . '\\majData_majProfunctor_wrap';

// Data_Profunctor_unwrap
function majData_majProfunctor_unwrap($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majProfunctor_unwrap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $__x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_unwrap'] = __NAMESPACE__ . '\\majData_majProfunctor_unwrap';

// Data_Profunctor_Profunctor$Dict
function majData_majProfunctor_majProfunctordollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majProfunctor_majProfunctordollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_ProfunctordollarDict'] = __NAMESPACE__ . '\\majData_majProfunctor_majProfunctordollarmajDict';


// Data_Profunctor_dimap
function majData_majProfunctor_dimap($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majProfunctor_dimap';
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
$__res = ($v)->dimap;
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
$GLOBALS['Data_Profunctor_dimap'] = __NAMESPACE__ . '\\majData_majProfunctor_dimap';

// Data_Profunctor_lcmap
function majData_majProfunctor_lcmap($dictProfunctor, $a2b = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majProfunctor_lcmap';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Profunctor_identity = ($GLOBALS['Data_Profunctor_identity'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_identity'));
  $dimap1 = ($dictProfunctor)->dimap;
  $__res = (($dimap1)($a2b))($__global_Data_Profunctor_identity);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Profunctor_lcmap'] = __NAMESPACE__ . '\\majData_majProfunctor_lcmap';

// Data_Profunctor_rmap
function majData_majProfunctor_rmap($dictProfunctor, $b2c = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majProfunctor_rmap';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Profunctor_identity = ($GLOBALS['Data_Profunctor_identity'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_identity'));
  $dimap1 = ($dictProfunctor)->dimap;
  $__res = (($dimap1)($__global_Data_Profunctor_identity))($b2c);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Profunctor_rmap'] = __NAMESPACE__ . '\\majData_majProfunctor_rmap';

// Data_Profunctor_unwrapIso
function majData_majProfunctor_unwrapmajIso($dictProfunctor, $dollar__unused = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majProfunctor_unwrapmajIso';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Profunctor_wrap = ($GLOBALS['Data_Profunctor_wrap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_wrap'));
  $__global_Data_Profunctor_unwrap = ($GLOBALS['Data_Profunctor_unwrap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_unwrap'));
  $dimap1 = ($dictProfunctor)->dimap;
  $__res = (($dimap1)($__global_Data_Profunctor_wrap))($__global_Data_Profunctor_unwrap);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Profunctor_unwrapIso'] = __NAMESPACE__ . '\\majData_majProfunctor_unwrapmajIso';

// Data_Profunctor_wrapIso
function majData_majProfunctor_wrapmajIso($dictProfunctor, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majProfunctor_wrapmajIso';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Profunctor_unwrap = ($GLOBALS['Data_Profunctor_unwrap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_unwrap'));
  $__global_Data_Profunctor_wrap = ($GLOBALS['Data_Profunctor_wrap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_wrap'));
  $dimap1 = ($dictProfunctor)->dimap;
  $__res = (($dimap1)($__global_Data_Profunctor_unwrap))($__global_Data_Profunctor_wrap);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Profunctor_wrapIso'] = __NAMESPACE__ . '\\majData_majProfunctor_wrapmajIso';

// Data_Profunctor_arr
function majData_majProfunctor_arr($dictCategory, $dictProfunctor = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majProfunctor_arr';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Profunctor_rmap = ($GLOBALS['Data_Profunctor_rmap'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_rmap'));
  $identity1 = ($dictCategory)->identity;
  $rmap1 = ($__global_Data_Profunctor_rmap)($dictProfunctor);
  $__res = (($rmap1)($f))($identity1);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Profunctor_arr'] = __NAMESPACE__ . '\\majData_majProfunctor_arr';


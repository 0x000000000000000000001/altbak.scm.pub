<?php

namespace Control\Parallel;

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
      case 'Control_Parallel_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Control_Parallel_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Parallel/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Prelude/index.php';



// Control_Parallel_parTraverse_
function majControl_majParallel_parmajTraverse_($dictParallel, $dictApplicative = null, $dictFoldable = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majParallel_parmajTraverse_';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Data_Foldable_traverse_ = ($GLOBALS['Data_Foldable_traverse_'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_traverse_'));
  $sequential = ($dictParallel)->sequential;
  $parallel = ($dictParallel)->parallel;
  $traverse_ = ($__global_Data_Foldable_traverse_)($dictApplicative);
  $traverse_1 = ($traverse_)($dictFoldable);
  $__res = function($__x) use ($sequential, $traverse_1, $parallel, $f) {
  $__num = \func_num_args();
  $__res = ($sequential)((($traverse_1)(function($__x) use ($parallel, $f) {
  $__num = \func_num_args();
  $__res = ($parallel)(($f)($__x));
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
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Control_Parallel_parTraverse_'] = __NAMESPACE__ . '\\majControl_majParallel_parmajTraverse_';

// Control_Parallel_parTraverse
function majControl_majParallel_parmajTraverse($dictParallel, $dictApplicative = null, $dictTraversable = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majParallel_parmajTraverse';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $sequential = ($dictParallel)->sequential;
  $parallel = ($dictParallel)->parallel;
  $traverse = (($dictTraversable)->traverse)($dictApplicative);
  $__res = function($__x) use ($sequential, $traverse, $parallel, $f) {
  $__num = \func_num_args();
  $__res = ($sequential)((($traverse)(function($__x) use ($parallel, $f) {
  $__num = \func_num_args();
  $__res = ($parallel)(($f)($__x));
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
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Control_Parallel_parTraverse'] = __NAMESPACE__ . '\\majControl_majParallel_parmajTraverse';

// Control_Parallel_parSequence_
function majControl_majParallel_parmajSequence_($dictParallel, $dictApplicative = null, $dictFoldable = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majParallel_parmajSequence_';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Control_Parallel_parTraverse_ = ($GLOBALS['Control_Parallel_parTraverse_'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_parTraverse_'));
  $__global_Control_Parallel_identity = ($GLOBALS['Control_Parallel_identity'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_identity'));
  $parTraverse_1 = ($__global_Control_Parallel_parTraverse_)($dictParallel);
  $parTraverse_2 = ($parTraverse_1)($dictApplicative);
  $__res = (($parTraverse_2)($dictFoldable))($__global_Control_Parallel_identity);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Parallel_parSequence_'] = __NAMESPACE__ . '\\majControl_majParallel_parmajSequence_';

// Control_Parallel_parSequence
function majControl_majParallel_parmajSequence($dictParallel, $dictApplicative = null, $dictTraversable = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majParallel_parmajSequence';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Control_Parallel_parTraverse = ($GLOBALS['Control_Parallel_parTraverse'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_parTraverse'));
  $__global_Control_Parallel_identity = ($GLOBALS['Control_Parallel_identity'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_identity'));
  $parTraverse1 = ($__global_Control_Parallel_parTraverse)($dictParallel);
  $parTraverse2 = ($parTraverse1)($dictApplicative);
  $__res = (($parTraverse2)($dictTraversable))($__global_Control_Parallel_identity);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Parallel_parSequence'] = __NAMESPACE__ . '\\majControl_majParallel_parmajSequence';

// Control_Parallel_parOneOfMap
function majControl_majParallel_parmajOnemajOfmajMap($dictParallel, $dictAlternative = null, $dictFoldable = null, $dictFunctor = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majParallel_parmajOnemajOfmajMap';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_oneOfMap = ($GLOBALS['Data_Foldable_oneOfMap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_oneOfMap'));
  $sequential = ($dictParallel)->sequential;
  $parallel = ($dictParallel)->parallel;
  $Plus1 = (($dictAlternative)->Plus1)($__global_Prim_undefined);
  $oneOfMap = (($__global_Data_Foldable_oneOfMap)($dictFoldable))($Plus1);
  $__res = function($__x) use ($sequential, $oneOfMap, $parallel, $f) {
  $__num = \func_num_args();
  $__res = ($sequential)((($oneOfMap)(function($__x) use ($parallel, $f) {
  $__num = \func_num_args();
  $__res = ($parallel)(($f)($__x));
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
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Control_Parallel_parOneOfMap'] = __NAMESPACE__ . '\\majControl_majParallel_parmajOnemajOfmajMap';

// Control_Parallel_parOneOf
function majControl_majParallel_parmajOnemajOf($dictParallel, $dictAlternative = null, $dictFoldable = null, $dictFunctor = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majParallel_parmajOnemajOf';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_oneOfMap = ($GLOBALS['Data_Foldable_oneOfMap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_oneOfMap'));
  $sequential = ($dictParallel)->sequential;
  $parallel = ($dictParallel)->parallel;
  $Plus1 = (($dictAlternative)->Plus1)($__global_Prim_undefined);
  $oneOfMap = (($__global_Data_Foldable_oneOfMap)($dictFoldable))($Plus1);
  $__res = function($__x) use ($sequential, $oneOfMap, $parallel) {
  $__num = \func_num_args();
  $__res = ($sequential)((($oneOfMap)($parallel))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Control_Parallel_parOneOf'] = __NAMESPACE__ . '\\majControl_majParallel_parmajOnemajOf';

// Control_Parallel_parApply
function majControl_majParallel_parmajApply($dictParallel, $mf = null, $ma = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majControl_majParallel_parmajApply';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $sequential = ($dictParallel)->sequential;
  $apply = ((($dictParallel)->Apply1)($__global_Prim_undefined))->apply;
  $parallel = ($dictParallel)->parallel;
  $__res = ($sequential)((($apply)(($parallel)($mf)))(($parallel)($ma)));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Parallel_parApply'] = __NAMESPACE__ . '\\majControl_majParallel_parmajApply';


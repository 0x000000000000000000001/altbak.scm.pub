<?php

namespace Data\Array\NonEmpty;

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
      case 'Data_Array_NonEmpty_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Data_Array_NonEmpty_max': $v = \Data\Ord\majData_majOrd_max(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Array_NonEmpty_append': $v = ($GLOBALS['Data_Semigroup_concatArray'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatArray')); break;
      case 'Data_Array_NonEmpty_intercalate1': $v = \Data\Semigroup\Foldable\majData_majSemigroup_majFoldable_intercalate(($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'))); break;
      case 'Data_Array_NonEmpty_greaterThan': $v = \Data\Ord\majData_majOrd_greatermajThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Array_NonEmpty_foldMap11': $v = (($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray')))->foldMap1; break;
      case 'Data_Array_NonEmpty_fold11': $v = \Data\Semigroup\Foldable\majData_majSemigroup_majFoldable_fold1(($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'))); break;
      case 'Data_Array_NonEmpty_fromJust': $v = \Data\Maybe\majData_majMaybe_frommajJust(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Array_NonEmpty_unsafeIndex1': $v = \Data\Array\majData_majArray_unsafemajIndex(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Array_NonEmpty_lessThan': $v = \Data\Ord\majData_majOrd_lessmajThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Array_NonEmpty_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Array_NonEmpty_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Array_NonEmpty_unsafeFromArrayF': $v = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce')); break;
      case 'Data_Array_NonEmpty_unsafeFromArray': $v = "\\Data\\Array\\NonEmpty\\Internal\\majData_majArray_majNonmajEmpty_majInternal_majNonmajEmptymajArray"; break;
      case 'Data_Array_NonEmpty_foldr1': $v = (($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray')))->foldr1; break;
      case 'Data_Array_NonEmpty_foldl1': $v = (($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray')))->foldl1; break;
      case 'Data_Array_NonEmpty_concatMap': $v = \Data\Function\majData_majFunction_flip(($GLOBALS['Control_Bind_arrayBind'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_arrayBind'))); break;
      case 'Data_Array_NonEmpty_head': $v = \Data\Array\NonEmpty\majData_majArray_majNonmajEmpty_adaptmajMaybe("\\Data\\Array\\majData_majArray_head"); break;
      case 'Data_Array_NonEmpty_init': $v = \Data\Array\NonEmpty\majData_majArray_majNonmajEmpty_adaptmajMaybe("\\Data\\Array\\majData_majArray_init"); break;
      case 'Data_Array_NonEmpty_last': $v = \Data\Array\NonEmpty\majData_majArray_majNonmajEmpty_adaptmajMaybe("\\Data\\Array\\majData_majArray_last"); break;
      case 'Data_Array_NonEmpty_tail': $v = \Data\Array\NonEmpty\majData_majArray_majNonmajEmpty_adaptmajMaybe(($GLOBALS['Data_Array_tail'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_tail'))); break;
      case 'Data_Array_NonEmpty_uncons': $v = \Data\Array\NonEmpty\majData_majArray_majNonmajEmpty_adaptmajMaybe(($GLOBALS['Data_Array_uncons'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_uncons'))); break;
      case 'Data_Array_NonEmpty_unsnoc': $v = \Data\Array\NonEmpty\majData_majArray_majNonmajEmpty_adaptmajMaybe("\\Data\\Array\\majData_majArray_unsnoc"); break;
      case 'Data_Array_NonEmpty_catMaybes': $v = \Data\Array\NonEmpty\majData_majArray_majNonmajEmpty_adaptmajAny(($GLOBALS['Data_Array_catMaybes'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_catMaybes'))); break;
      case 'Data_Array_NonEmpty_index': $v = \Data\Array\NonEmpty\majData_majArray_majNonmajEmpty_adaptmajAny(($GLOBALS['Data_Array_index'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_index'))); break;
      case 'Data_Array_NonEmpty_length': $v = \Data\Array\NonEmpty\majData_majArray_majNonmajEmpty_adaptmajAny(($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'))); break;
      case 'Data_Array_NonEmpty_reverse': $v = \Data\Array\NonEmpty\majData_majArray_majNonmajEmpty_unsafemajAdapt(($GLOBALS['Data_Array_reverse'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_reverse'))); break;
      case 'Data_Array_NonEmpty_unsafeIndex2': $v = \Data\Array\NonEmpty\majData_majArray_majNonmajEmpty_unsafemajIndex(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';


// Data_Array_NonEmpty_coerce
function majData_majArray_majNonmajEmpty_coerce($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_coerce';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $__x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_coerce'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_coerce';














// Data_Array_NonEmpty_transpose
function majData_majArray_majNonmajEmpty_transpose($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_transpose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = (($GLOBALS['Data_Array_NonEmpty_coerce'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_coerce')))((function($__x) {
  $__num = \func_num_args();
  $__res = ("\\Data\\Array\\majData_majArray_transpose")((($GLOBALS['Data_Array_NonEmpty_coerce'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_coerce')))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_transpose'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_transpose';

// Data_Array_NonEmpty_toArray
function majData_majArray_majNonmajEmpty_tomajArray($v) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_tomajArray';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$xs = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = $xs;
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
$GLOBALS['Data_Array_NonEmpty_toArray'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_tomajArray';

// Data_Array_NonEmpty_unionBy'
function majData_majArray_majNonmajEmpty_unionmajBy__prime__($eq, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_unionmajBy__prime__';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_Internal_NonEmptyArray = ($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray'));
  $__global_Data_Array_unionBy = ($GLOBALS['Data_Array_unionBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_unionBy'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = function($__x) use ($__global_Data_Array_NonEmpty_Internal_NonEmptyArray, $__global_Data_Array_unionBy, $eq, $__global_Data_Array_NonEmpty_toArray, $xs) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Array_NonEmpty_Internal_NonEmptyArray)(((($__global_Data_Array_unionBy)($eq))(($__global_Data_Array_NonEmpty_toArray)($xs)))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_unionBy__prime__'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_unionmajBy__prime__';

// Data_Array_NonEmpty_union'
function majData_majArray_majNonmajEmpty_union__prime__($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_union__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unionBy__prime__ = ($GLOBALS['Data_Array_NonEmpty_unionBy__prime__'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unionBy__prime__'));
  $__res = ($__global_Data_Array_NonEmpty_unionBy__prime__)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_union__prime__'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_union__prime__';

// Data_Array_NonEmpty_unionBy
function majData_majArray_majNonmajEmpty_unionmajBy($eq, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_unionmajBy';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_unionBy__prime__ = ($GLOBALS['Data_Array_NonEmpty_unionBy__prime__'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unionBy__prime__'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = function($__x) use ($__global_Data_Array_NonEmpty_unionBy__prime__, $eq, $xs, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ((($__global_Data_Array_NonEmpty_unionBy__prime__)($eq))($xs))(($__global_Data_Array_NonEmpty_toArray)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_unionBy'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_unionmajBy';

// Data_Array_NonEmpty_union
function majData_majArray_majNonmajEmpty_union($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unionBy = ($GLOBALS['Data_Array_NonEmpty_unionBy'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unionBy'));
  $__res = ($__global_Data_Array_NonEmpty_unionBy)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_union'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_union';

// Data_Array_NonEmpty_unzip
function majData_majArray_majNonmajEmpty_unzip($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_unzip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = ((((($GLOBALS['Data_Bifunctor_bifunctorTuple'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorTuple')))->bimap)("\\Data\\Array\\NonEmpty\\Internal\\majData_majArray_majNonmajEmpty_majInternal_majNonmajEmptymajArray"))("\\Data\\Array\\NonEmpty\\Internal\\majData_majArray_majNonmajEmpty_majInternal_majNonmajEmptymajArray"))((function($__x) {
  $__num = \func_num_args();
  $__res = ("\\Data\\Array\\majData_majArray_unzip")(("\\Data\\Array\\NonEmpty\\majData_majArray_majNonmajEmpty_tomajArray")($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_unzip'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_unzip';

// Data_Array_NonEmpty_updateAt
function majData_majArray_majNonmajEmpty_updatemajAt($i, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_updatemajAt';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $__global_Data_Array_updateAt = ($GLOBALS['Data_Array_updateAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_updateAt'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = function($__x) use ($__global_Unsafe_Coerce_unsafeCoerce, $__global_Data_Array_updateAt, $i, $x, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ($__global_Unsafe_Coerce_unsafeCoerce)((function($__x) use ($__global_Data_Array_updateAt, $i, $x, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ((($__global_Data_Array_updateAt)($i))($x))(($__global_Data_Array_NonEmpty_toArray)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_updateAt'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_updatemajAt';

// Data_Array_NonEmpty_zip
function majData_majArray_majNonmajEmpty_zip($xs, $ys = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_zip';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_zip = ($GLOBALS['Data_Array_zip'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zip'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = (($__global_Data_Array_zip)(($__global_Data_Array_NonEmpty_toArray)($xs)))(($__global_Data_Array_NonEmpty_toArray)($ys));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_zip'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_zip';

// Data_Array_NonEmpty_zipWith
function majData_majArray_majNonmajEmpty_zipmajWith($f, $xs = null, $ys = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_zipmajWith';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Array_zipWith = ($GLOBALS['Data_Array_zipWith'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zipWith'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = ((($__global_Data_Array_zipWith)($f))(($__global_Data_Array_NonEmpty_toArray)($xs)))(($__global_Data_Array_NonEmpty_toArray)($ys));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_zipWith'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_zipmajWith';

// Data_Array_NonEmpty_zipWithA
function majData_majArray_majNonmajEmpty_zipmajWithmajA($dictApplicative, $f = null, $xs = null, $ys = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_zipmajWithmajA';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Data_Array_zipWithA = ($GLOBALS['Data_Array_zipWithA'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_zipWithA'));
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $zipWithA1 = ($__global_Data_Array_zipWithA)($dictApplicative);
  $__res = ($__global_Unsafe_Coerce_unsafeCoerce)(((($zipWithA1)($f))(($__global_Data_Array_NonEmpty_toArray)($xs)))(($__global_Data_Array_NonEmpty_toArray)($ys)));
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_zipWithA'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_zipmajWithmajA';

// Data_Array_NonEmpty_splitAt
function majData_majArray_majNonmajEmpty_splitmajAt($i, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_splitmajAt';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_splitAt = ($GLOBALS['Data_Array_splitAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_splitAt'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = (($__global_Data_Array_splitAt)($i))(($__global_Data_Array_NonEmpty_toArray)($xs));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_splitAt'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_splitmajAt';

// Data_Array_NonEmpty_some
function majData_majArray_majNonmajEmpty_some($dictAlternative, $dictLazy = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_some';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_some = ($GLOBALS['Data_Array_some'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_some'));
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $some1 = ($__global_Data_Array_some)($dictAlternative);
  $__res = function($__x) use ($__global_Unsafe_Coerce_unsafeCoerce, $some1, $dictLazy) {
  $__num = \func_num_args();
  $__res = ($__global_Unsafe_Coerce_unsafeCoerce)((($some1)($dictLazy))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_some'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_some';

// Data_Array_NonEmpty_snoc'
function majData_majArray_majNonmajEmpty_snoc__prime__($xs, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_snoc__prime__';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_snoc = ($GLOBALS['Data_Array_snoc'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_snoc'));
  $__res = (($__global_Data_Array_snoc)($xs))($x);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_snoc__prime__'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_snoc__prime__';

// Data_Array_NonEmpty_snoc
function majData_majArray_majNonmajEmpty_snoc($xs, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_snoc';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_snoc = ($GLOBALS['Data_Array_snoc'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_snoc'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = (($__global_Data_Array_snoc)(($__global_Data_Array_NonEmpty_toArray)($xs)))($x);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_snoc'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_snoc';

// Data_Array_NonEmpty_singleton
function majData_majArray_majNonmajEmpty_singleton($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = ("\\Data\\Array\\NonEmpty\\Internal\\majData_majArray_majNonmajEmpty_majInternal_majNonmajEmptymajArray")(("\\Data\\Array\\majData_majArray_singleton")($__x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_singleton'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_singleton';

// Data_Array_NonEmpty_replicate
function majData_majArray_majNonmajEmpty_replicate($i, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_replicate';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_replicate = ($GLOBALS['Data_Array_replicate'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_replicate'));
  $__global_Data_Array_NonEmpty_max = ($GLOBALS['Data_Array_NonEmpty_max'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_max'));
  $__res = (($__global_Data_Array_replicate)((($__global_Data_Array_NonEmpty_max)(1))($i)))($x);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_replicate'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_replicate';

// Data_Array_NonEmpty_range
function majData_majArray_majNonmajEmpty_range($x, $y = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_range';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_range = ($GLOBALS['Data_Array_range'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_range'));
  $__res = (($__global_Data_Array_range)($x))($y);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_range'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_range';

// Data_Array_NonEmpty_prependArray
function majData_majArray_majNonmajEmpty_prependmajArray($xs, $ys = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_prependmajArray';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_append = ($GLOBALS['Data_Array_NonEmpty_append'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_append'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = (($__global_Data_Array_NonEmpty_append)($xs))(($__global_Data_Array_NonEmpty_toArray)($ys));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_prependArray'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_prependmajArray';

// Data_Array_NonEmpty_modifyAt
function majData_majArray_majNonmajEmpty_modifymajAt($i, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_modifymajAt';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $__global_Data_Array_modifyAt = ($GLOBALS['Data_Array_modifyAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_modifyAt'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = function($__x) use ($__global_Unsafe_Coerce_unsafeCoerce, $__global_Data_Array_modifyAt, $i, $f, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ($__global_Unsafe_Coerce_unsafeCoerce)((function($__x) use ($__global_Data_Array_modifyAt, $i, $f, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ((($__global_Data_Array_modifyAt)($i))($f))(($__global_Data_Array_NonEmpty_toArray)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_modifyAt'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_modifymajAt';

// Data_Array_NonEmpty_intersectBy'
function majData_majArray_majNonmajEmpty_intersectmajBy__prime__($eq, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_intersectmajBy__prime__';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_intersectBy = ($GLOBALS['Data_Array_intersectBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_intersectBy'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = (($__global_Data_Array_intersectBy)($eq))(($__global_Data_Array_NonEmpty_toArray)($xs));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intersectBy__prime__'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_intersectmajBy__prime__';

// Data_Array_NonEmpty_intersectBy
function majData_majArray_majNonmajEmpty_intersectmajBy($eq, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_intersectmajBy';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_intersectBy__prime__ = ($GLOBALS['Data_Array_NonEmpty_intersectBy__prime__'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_intersectBy__prime__'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = function($__x) use ($__global_Data_Array_NonEmpty_intersectBy__prime__, $eq, $xs, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ((($__global_Data_Array_NonEmpty_intersectBy__prime__)($eq))($xs))(($__global_Data_Array_NonEmpty_toArray)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intersectBy'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_intersectmajBy';

// Data_Array_NonEmpty_intersect'
function majData_majArray_majNonmajEmpty_intersect__prime__($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_intersect__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_intersectBy__prime__ = ($GLOBALS['Data_Array_NonEmpty_intersectBy__prime__'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_intersectBy__prime__'));
  $__res = ($__global_Data_Array_NonEmpty_intersectBy__prime__)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intersect__prime__'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_intersect__prime__';

// Data_Array_NonEmpty_intersect
function majData_majArray_majNonmajEmpty_intersect($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_intersect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_intersectBy = ($GLOBALS['Data_Array_NonEmpty_intersectBy'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_intersectBy'));
  $__res = ($__global_Data_Array_NonEmpty_intersectBy)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intersect'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_intersect';

// Data_Array_NonEmpty_intercalate
function majData_majArray_majNonmajEmpty_intercalate($dictSemigroup) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_intercalate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_intercalate1 = ($GLOBALS['Data_Array_NonEmpty_intercalate1'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_intercalate1'));
  $__res = ($__global_Data_Array_NonEmpty_intercalate1)($dictSemigroup);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intercalate'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_intercalate';

// Data_Array_NonEmpty_insertAt
function majData_majArray_majNonmajEmpty_insertmajAt($i, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_insertmajAt';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $__global_Data_Array_insertAt = ($GLOBALS['Data_Array_insertAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_insertAt'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = function($__x) use ($__global_Unsafe_Coerce_unsafeCoerce, $__global_Data_Array_insertAt, $i, $x, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ($__global_Unsafe_Coerce_unsafeCoerce)((function($__x) use ($__global_Data_Array_insertAt, $i, $x, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ((($__global_Data_Array_insertAt)($i))($x))(($__global_Data_Array_NonEmpty_toArray)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_insertAt'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_insertmajAt';

// Data_Array_NonEmpty_fromFoldable1
function majData_majArray_majNonmajEmpty_frommajFoldable1($dictFoldable1) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_frommajFoldable1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_Internal_NonEmptyArray = ($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray'));
  $__global_Data_Array_fromFoldable = ($GLOBALS['Data_Array_fromFoldable'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fromFoldable'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = function($__x) use ($__global_Data_Array_NonEmpty_Internal_NonEmptyArray, $__global_Data_Array_fromFoldable, $dictFoldable1, $__global_Prim_undefined) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Array_NonEmpty_Internal_NonEmptyArray)((($__global_Data_Array_fromFoldable)((($dictFoldable1)->Foldable0)($__global_Prim_undefined)))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_fromFoldable1'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_frommajFoldable1';

// Data_Array_NonEmpty_fromArray
function majData_majArray_majNonmajEmpty_frommajArray($xs) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_frommajArray';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_greaterThan = ($GLOBALS['Data_Array_NonEmpty_greaterThan'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_greaterThan'));
  $__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
  $__case_0 = $xs;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$xs1 = $__case_0;
if (($__match_0 === false)) {
if ((($__global_Data_Array_NonEmpty_greaterThan)(($__global_Data_Array_length)($xs1)))(0)) {
$__res = new Phpurs_Data1("Just", $xs1);
goto __end;;
$__match_0 = true;
};
};
if (($__match_0 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
$GLOBALS['Data_Array_NonEmpty_fromArray'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_frommajArray';

// Data_Array_NonEmpty_fromFoldable
function majData_majArray_majNonmajEmpty_frommajFoldable($dictFoldable) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_frommajFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_fromArray = ($GLOBALS['Data_Array_NonEmpty_fromArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_fromArray'));
  $__global_Data_Array_fromFoldable = ($GLOBALS['Data_Array_fromFoldable'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_fromFoldable'));
  $__res = function($__x) use ($__global_Data_Array_NonEmpty_fromArray, $__global_Data_Array_fromFoldable, $dictFoldable) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Array_NonEmpty_fromArray)((($__global_Data_Array_fromFoldable)($dictFoldable))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_fromFoldable'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_frommajFoldable';

// Data_Array_NonEmpty_transpose'
function majData_majArray_majNonmajEmpty_transpose__prime__($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_transpose__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = ("\\Data\\Array\\NonEmpty\\majData_majArray_majNonmajEmpty_frommajArray")((function($__x) {
  $__num = \func_num_args();
  $__res = ("\\Data\\Array\\majData_majArray_transpose")((($GLOBALS['Data_Array_NonEmpty_coerce'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_coerce')))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_transpose__prime__'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_transpose__prime__';



// Data_Array_NonEmpty_foldMap1
function majData_majArray_majNonmajEmpty_foldmajMap1($dictSemigroup) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_foldmajMap1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_foldMap11 = ($GLOBALS['Data_Array_NonEmpty_foldMap11'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_foldMap11'));
  $__res = ($__global_Data_Array_NonEmpty_foldMap11)($dictSemigroup);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_foldMap1'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_foldmajMap1';

// Data_Array_NonEmpty_fold1
function majData_majArray_majNonmajEmpty_fold1($dictSemigroup) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_fold1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_fold11 = ($GLOBALS['Data_Array_NonEmpty_fold11'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_fold11'));
  $__res = ($__global_Data_Array_NonEmpty_fold11)($dictSemigroup);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_fold1'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_fold1';

// Data_Array_NonEmpty_difference'
function majData_majArray_majNonmajEmpty_difference__prime__($dictEq, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_difference__prime__';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_difference = ($GLOBALS['Data_Array_difference'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_difference'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $difference1 = ($__global_Data_Array_difference)($dictEq);
  $__res = ($difference1)(($__global_Data_Array_NonEmpty_toArray)($xs));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_difference__prime__'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_difference__prime__';

// Data_Array_NonEmpty_cons'
function majData_majArray_majNonmajEmpty_cons__prime__($x, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_cons__prime__';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_cons = ($GLOBALS['Data_Array_cons'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_cons'));
  $__res = (($__global_Data_Array_cons)($x))($xs);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_cons__prime__'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_cons__prime__';

// Data_Array_NonEmpty_fromNonEmpty
function majData_majArray_majNonmajEmpty_frommajNonmajEmpty($v) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_frommajNonmajEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_cons__prime__ = ($GLOBALS['Data_Array_NonEmpty_cons__prime__'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_cons__prime__'));
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Array_NonEmpty_cons__prime__)($x))($xs);
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_fromNonEmpty'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_frommajNonmajEmpty';


// Data_Array_NonEmpty_concat
function majData_majArray_majNonmajEmpty_concat($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_concat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = ("\\Data\\Array\\NonEmpty\\Internal\\majData_majArray_majNonmajEmpty_majInternal_majNonmajEmptymajArray")((function($__x) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_concat'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_concat')))((function($__x) {
  $__num = \func_num_args();
  $__res = ("\\Data\\Array\\NonEmpty\\majData_majArray_majNonmajEmpty_tomajArray")(((($GLOBALS['Data_Functor_arrayMap'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_arrayMap')))("\\Data\\Array\\NonEmpty\\majData_majArray_majNonmajEmpty_tomajArray"))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_concat'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_concat';

// Data_Array_NonEmpty_appendArray
function majData_majArray_majNonmajEmpty_appendmajArray($xs, $ys = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_appendmajArray';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_append = ($GLOBALS['Data_Array_NonEmpty_append'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_append'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = (($__global_Data_Array_NonEmpty_append)(($__global_Data_Array_NonEmpty_toArray)($xs)))($ys);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_appendArray'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_appendmajArray';

// Data_Array_NonEmpty_alterAt
function majData_majArray_majNonmajEmpty_altermajAt($i, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_altermajAt';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_alterAt = ($GLOBALS['Data_Array_alterAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_alterAt'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = function($__x) use ($__global_Data_Array_alterAt, $i, $f, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ((($__global_Data_Array_alterAt)($i))($f))(($__global_Data_Array_NonEmpty_toArray)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_alterAt'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_altermajAt';

// Data_Array_NonEmpty_adaptMaybe
function majData_majArray_majNonmajEmpty_adaptmajMaybe($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_adaptmajMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
  $__global_Data_Array_NonEmpty_fromJust = ($GLOBALS['Data_Array_NonEmpty_fromJust'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_fromJust'));
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = ($__global_Partial_Unsafe__unsafePartial)(function($dollar__unused) use ($__global_Data_Array_NonEmpty_fromJust, $f, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = function($__x) use ($__global_Data_Array_NonEmpty_fromJust, $f, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Array_NonEmpty_fromJust)((function($__x) use ($f, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ($f)(($__global_Data_Array_NonEmpty_toArray)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_adaptMaybe'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_adaptmajMaybe';






// Data_Array_NonEmpty_toNonEmpty
function majData_majArray_majNonmajEmpty_tomajNonmajEmpty($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_tomajNonmajEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = (function($v) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (is_object($__case_0)) {
$x = ($__case_0)->head;
$xs = ($__case_0)->tail;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("NonEmpty", $x, $xs);
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
})((($GLOBALS['Data_Array_NonEmpty_uncons'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_uncons')))($__x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_toNonEmpty'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_tomajNonmajEmpty';


// Data_Array_NonEmpty_adaptAny
function majData_majArray_majNonmajEmpty_adaptmajAny($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_adaptmajAny';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_toArray = ($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_toArray'));
  $__res = function($__x) use ($f, $__global_Data_Array_NonEmpty_toArray) {
  $__num = \func_num_args();
  $__res = ($f)(($__global_Data_Array_NonEmpty_toArray)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_adaptAny'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_adaptmajAny';

// Data_Array_NonEmpty_all
function majData_majArray_majNonmajEmpty_all($p) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_all';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_all = ($GLOBALS['Data_Array_all'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_all'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_all)($p));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_all'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_all';

// Data_Array_NonEmpty_any
function majData_majArray_majNonmajEmpty_any($p) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_any';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_any = ($GLOBALS['Data_Array_any'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_any'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_any)($p));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_any'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_any';


// Data_Array_NonEmpty_delete
function majData_majArray_majNonmajEmpty_delete($dictEq, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_delete';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_delete = ($GLOBALS['Data_Array_delete'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_delete'));
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $delete1 = ($__global_Data_Array_delete)($dictEq);
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($delete1)($x));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_delete'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_delete';

// Data_Array_NonEmpty_deleteAt
function majData_majArray_majNonmajEmpty_deletemajAt($i) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_deletemajAt';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_deleteAt = ($GLOBALS['Data_Array_deleteAt'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteAt'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_deleteAt)($i));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_deleteAt'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_deletemajAt';

// Data_Array_NonEmpty_deleteBy
function majData_majArray_majNonmajEmpty_deletemajBy($f, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_deletemajBy';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_deleteBy = ($GLOBALS['Data_Array_deleteBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_deleteBy'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)((($__global_Data_Array_deleteBy)($f))($x));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_deleteBy'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_deletemajBy';

// Data_Array_NonEmpty_difference
function majData_majArray_majNonmajEmpty_difference($dictEq, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_difference';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_difference__prime__ = ($GLOBALS['Data_Array_NonEmpty_difference__prime__'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_difference__prime__'));
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $difference__prime__1 = ($__global_Data_Array_NonEmpty_difference__prime__)($dictEq);
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($difference__prime__1)($xs));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_difference'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_difference';

// Data_Array_NonEmpty_drop
function majData_majArray_majNonmajEmpty_drop($i) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_drop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_drop = ($GLOBALS['Data_Array_drop'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_drop'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_drop)($i));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_drop'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_drop';

// Data_Array_NonEmpty_dropEnd
function majData_majArray_majNonmajEmpty_dropmajEnd($i) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_dropmajEnd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_dropEnd = ($GLOBALS['Data_Array_dropEnd'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_dropEnd'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_dropEnd)($i));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_dropEnd'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_dropmajEnd';

// Data_Array_NonEmpty_dropWhile
function majData_majArray_majNonmajEmpty_dropmajWhile($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_dropmajWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_dropWhile = ($GLOBALS['Data_Array_dropWhile'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_dropWhile'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_dropWhile)($f));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_dropWhile'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_dropmajWhile';

// Data_Array_NonEmpty_elem
function majData_majArray_majNonmajEmpty_elem($dictEq, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_elem';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_elem = ($GLOBALS['Data_Array_elem'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_elem'));
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $elem1 = ($__global_Data_Array_elem)($dictEq);
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($elem1)($x));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_elem'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_elem';

// Data_Array_NonEmpty_elemIndex
function majData_majArray_majNonmajEmpty_elemmajIndex($dictEq, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_elemmajIndex';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_elemIndex = ($GLOBALS['Data_Array_elemIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_elemIndex'));
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $elemIndex1 = ($__global_Data_Array_elemIndex)($dictEq);
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($elemIndex1)($x));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_elemIndex'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_elemmajIndex';

// Data_Array_NonEmpty_elemLastIndex
function majData_majArray_majNonmajEmpty_elemmajLastmajIndex($dictEq, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_elemmajLastmajIndex';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_elemLastIndex = ($GLOBALS['Data_Array_elemLastIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_elemLastIndex'));
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $elemLastIndex1 = ($__global_Data_Array_elemLastIndex)($dictEq);
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($elemLastIndex1)($x));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_elemLastIndex'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_elemmajLastmajIndex';

// Data_Array_NonEmpty_filter
function majData_majArray_majNonmajEmpty_filter($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_filter = ($GLOBALS['Data_Array_filter'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_filter'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_filter)($f));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_filter'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_filter';

// Data_Array_NonEmpty_filterA
function majData_majArray_majNonmajEmpty_filtermajA($dictApplicative, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_filtermajA';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_filterA = ($GLOBALS['Data_Array_filterA'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_filterA'));
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $filterA1 = ($__global_Data_Array_filterA)($dictApplicative);
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($filterA1)($f));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_filterA'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_filtermajA';

// Data_Array_NonEmpty_find
function majData_majArray_majNonmajEmpty_find($p) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_find';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_find = ($GLOBALS['Data_Array_find'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_find'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_find)($p));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_find'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_find';

// Data_Array_NonEmpty_findIndex
function majData_majArray_majNonmajEmpty_findmajIndex($p) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_findmajIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_findIndex = ($GLOBALS['Data_Array_findIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findIndex'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_findIndex)($p));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_findIndex'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_findmajIndex';

// Data_Array_NonEmpty_findLastIndex
function majData_majArray_majNonmajEmpty_findmajLastmajIndex($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_findmajLastmajIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_findLastIndex = ($GLOBALS['Data_Array_findLastIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findLastIndex'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_findLastIndex)($x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_findLastIndex'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_findmajLastmajIndex';

// Data_Array_NonEmpty_findMap
function majData_majArray_majNonmajEmpty_findmajMap($p) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_findmajMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_findMap = ($GLOBALS['Data_Array_findMap'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_findMap'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_findMap)($p));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_findMap'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_findmajMap';

// Data_Array_NonEmpty_foldM
function majData_majArray_majNonmajEmpty_foldmajM($dictMonad, $f = null, $acc = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_foldmajM';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Array_foldM = ($GLOBALS['Data_Array_foldM'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldM'));
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $foldM1 = ($__global_Data_Array_foldM)($dictMonad);
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)((($foldM1)($f))($acc));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_foldM'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_foldmajM';

// Data_Array_NonEmpty_foldRecM
function majData_majArray_majNonmajEmpty_foldmajRecmajM($dictMonadRec, $f = null, $acc = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_foldmajRecmajM';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Array_foldRecM = ($GLOBALS['Data_Array_foldRecM'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_foldRecM'));
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $foldRecM1 = ($__global_Data_Array_foldRecM)($dictMonadRec);
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)((($foldRecM1)($f))($acc));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_foldRecM'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_foldmajRecmajM';



// Data_Array_NonEmpty_mapMaybe
function majData_majArray_majNonmajEmpty_mapmajMaybe($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_mapmajMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_mapMaybe = ($GLOBALS['Data_Array_mapMaybe'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_mapMaybe'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_mapMaybe)($f));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_mapMaybe'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_mapmajMaybe';

// Data_Array_NonEmpty_notElem
function majData_majArray_majNonmajEmpty_notmajElem($dictEq, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_notmajElem';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_notElem = ($GLOBALS['Data_Array_notElem'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_notElem'));
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $notElem1 = ($__global_Data_Array_notElem)($dictEq);
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($notElem1)($x));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_notElem'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_notmajElem';

// Data_Array_NonEmpty_partition
function majData_majArray_majNonmajEmpty_partition($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_partition';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_partition = ($GLOBALS['Data_Array_partition'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_partition'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_partition)($f));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_partition'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_partition';

// Data_Array_NonEmpty_slice
function majData_majArray_majNonmajEmpty_slice($start, $end = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_slice';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_slice = ($GLOBALS['Data_Array_slice'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_slice'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)((($__global_Data_Array_slice)($start))($end));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_slice'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_slice';

// Data_Array_NonEmpty_span
function majData_majArray_majNonmajEmpty_span($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_span';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_span = ($GLOBALS['Data_Array_span'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_span'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_span)($f));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_span'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_span';

// Data_Array_NonEmpty_take
function majData_majArray_majNonmajEmpty_take($i) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_take';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_take = ($GLOBALS['Data_Array_take'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_take'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_take)($i));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_take'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_take';

// Data_Array_NonEmpty_takeEnd
function majData_majArray_majNonmajEmpty_takemajEnd($i) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_takemajEnd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_takeEnd = ($GLOBALS['Data_Array_takeEnd'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_takeEnd'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_takeEnd)($i));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_takeEnd'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_takemajEnd';

// Data_Array_NonEmpty_takeWhile
function majData_majArray_majNonmajEmpty_takemajWhile($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_takemajWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_takeWhile = ($GLOBALS['Data_Array_takeWhile'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_takeWhile'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_takeWhile)($f));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_takeWhile'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_takemajWhile';

// Data_Array_NonEmpty_toUnfoldable
function majData_majArray_majNonmajEmpty_tomajUnfoldable($dictUnfoldable) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_tomajUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_toUnfoldable = ($GLOBALS['Data_Array_toUnfoldable'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_toUnfoldable'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)(($__global_Data_Array_toUnfoldable)($dictUnfoldable));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_toUnfoldable'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_tomajUnfoldable';

// Data_Array_NonEmpty_unsafeAdapt
function majData_majArray_majNonmajEmpty_unsafemajAdapt($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_unsafemajAdapt';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_Internal_NonEmptyArray = ($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_NonEmptyArray'));
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__res = function($__x) use ($__global_Data_Array_NonEmpty_Internal_NonEmptyArray, $__global_Data_Array_NonEmpty_adaptAny, $f) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Array_NonEmpty_Internal_NonEmptyArray)((($__global_Data_Array_NonEmpty_adaptAny)($f))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_unsafemajAdapt';

// Data_Array_NonEmpty_cons
function majData_majArray_majNonmajEmpty_cons($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_cons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_cons = ($GLOBALS['Data_Array_cons'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_cons'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_cons)($x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_cons'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_cons';

// Data_Array_NonEmpty_group
function majData_majArray_majNonmajEmpty_group($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_group';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_group = ($GLOBALS['Data_Array_group'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_group'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_group)($dictEq));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_group'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_group';

// Data_Array_NonEmpty_groupAllBy
function majData_majArray_majNonmajEmpty_groupmajAllmajBy($op) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_groupmajAllmajBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_groupAllBy = ($GLOBALS['Data_Array_groupAllBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_groupAllBy'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_groupAllBy)($op));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_groupAllBy'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_groupmajAllmajBy';

// Data_Array_NonEmpty_groupAll
function majData_majArray_majNonmajEmpty_groupmajAll($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_groupmajAll';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_groupAllBy = ($GLOBALS['Data_Array_NonEmpty_groupAllBy'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_groupAllBy'));
  $__res = ($__global_Data_Array_NonEmpty_groupAllBy)(($dictOrd)->compare);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_groupAll'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_groupmajAll';

// Data_Array_NonEmpty_groupBy
function majData_majArray_majNonmajEmpty_groupmajBy($op) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_groupmajBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_groupBy = ($GLOBALS['Data_Array_groupBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_groupBy'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_groupBy)($op));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_groupBy'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_groupmajBy';

// Data_Array_NonEmpty_insert
function majData_majArray_majNonmajEmpty_insert($dictOrd, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_insert';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_insert = ($GLOBALS['Data_Array_insert'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_insert'));
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $insert1 = ($__global_Data_Array_insert)($dictOrd);
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($insert1)($x));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_insert'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_insert';

// Data_Array_NonEmpty_insertBy
function majData_majArray_majNonmajEmpty_insertmajBy($f, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_insertmajBy';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_insertBy = ($GLOBALS['Data_Array_insertBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_insertBy'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)((($__global_Data_Array_insertBy)($f))($x));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_insertBy'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_insertmajBy';

// Data_Array_NonEmpty_intersperse
function majData_majArray_majNonmajEmpty_intersperse($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_intersperse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_intersperse = ($GLOBALS['Data_Array_intersperse'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_intersperse'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_intersperse)($x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_intersperse'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_intersperse';

// Data_Array_NonEmpty_mapWithIndex
function majData_majArray_majNonmajEmpty_mapmajWithmajIndex($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_mapmajWithmajIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_mapWithIndex = ($GLOBALS['Data_Array_mapWithIndex'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_mapWithIndex'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_mapWithIndex)($f));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_mapWithIndex'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_mapmajWithmajIndex';

// Data_Array_NonEmpty_modifyAtIndices
function majData_majArray_majNonmajEmpty_modifymajAtmajIndices($dictFoldable, $is = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_modifymajAtmajIndices';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Array_modifyAtIndices = ($GLOBALS['Data_Array_modifyAtIndices'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_modifyAtIndices'));
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $modifyAtIndices1 = ($__global_Data_Array_modifyAtIndices)($dictFoldable);
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)((($modifyAtIndices1)($is))($f));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_modifyAtIndices'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_modifymajAtmajIndices';

// Data_Array_NonEmpty_nub
function majData_majArray_majNonmajEmpty_nub($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_nub';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_nub = ($GLOBALS['Data_Array_nub'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nub'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_nub)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_nub'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_nub';

// Data_Array_NonEmpty_nubBy
function majData_majArray_majNonmajEmpty_nubmajBy($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_nubmajBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_nubBy = ($GLOBALS['Data_Array_nubBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubBy'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_nubBy)($f));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_nubBy'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_nubmajBy';

// Data_Array_NonEmpty_nubByEq
function majData_majArray_majNonmajEmpty_nubmajBymajEq($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_nubmajBymajEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_nubByEq = ($GLOBALS['Data_Array_nubByEq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubByEq'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_nubByEq)($f));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_nubByEq'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_nubmajBymajEq';

// Data_Array_NonEmpty_nubEq
function majData_majArray_majNonmajEmpty_nubmajEq($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_nubmajEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_nubEq = ($GLOBALS['Data_Array_nubEq'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_nubEq'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_nubEq)($dictEq));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_nubEq'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_nubmajEq';


// Data_Array_NonEmpty_scanl
function majData_majArray_majNonmajEmpty_scanl($f, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_scanl';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_scanl = ($GLOBALS['Data_Array_scanl'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_scanl'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)((($__global_Data_Array_scanl)($f))($x));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_scanl'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_scanl';

// Data_Array_NonEmpty_scanr
function majData_majArray_majNonmajEmpty_scanr($f, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_scanr';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_scanr = ($GLOBALS['Data_Array_scanr'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_scanr'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)((($__global_Data_Array_scanr)($f))($x));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_scanr'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_scanr';

// Data_Array_NonEmpty_sort
function majData_majArray_majNonmajEmpty_sort($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_sort';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_sort = ($GLOBALS['Data_Array_sort'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sort'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_sort)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_sort'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_sort';

// Data_Array_NonEmpty_sortBy
function majData_majArray_majNonmajEmpty_sortmajBy($f) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_sortmajBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $__global_Data_Array_sortBy = ($GLOBALS['Data_Array_sortBy'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortBy'));
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($__global_Data_Array_sortBy)($f));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_sortBy'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_sortmajBy';

// Data_Array_NonEmpty_sortWith
function majData_majArray_majNonmajEmpty_sortmajWith($dictOrd, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_sortmajWith';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_sortWith = ($GLOBALS['Data_Array_sortWith'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_sortWith'));
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $sortWith1 = ($__global_Data_Array_sortWith)($dictOrd);
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($sortWith1)($f));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_sortWith'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_sortmajWith';

// Data_Array_NonEmpty_updateAtIndices
function majData_majArray_majNonmajEmpty_updatemajAtmajIndices($dictFoldable, $pairs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_updatemajAtmajIndices';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_updateAtIndices = ($GLOBALS['Data_Array_updateAtIndices'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_updateAtIndices'));
  $__global_Data_Array_NonEmpty_unsafeAdapt = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeAdapt'));
  $updateAtIndices1 = ($__global_Data_Array_updateAtIndices)($dictFoldable);
  $__res = ($__global_Data_Array_NonEmpty_unsafeAdapt)(($updateAtIndices1)($pairs));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_updateAtIndices'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_updatemajAtmajIndices';

// Data_Array_NonEmpty_unsafeIndex
function majData_majArray_majNonmajEmpty_unsafemajIndex($dollar__unused) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_unsafemajIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_adaptAny = ($GLOBALS['Data_Array_NonEmpty_adaptAny'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_adaptAny'));
  $__global_Data_Array_NonEmpty_unsafeIndex1 = ($GLOBALS['Data_Array_NonEmpty_unsafeIndex1'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeIndex1'));
  $__res = ($__global_Data_Array_NonEmpty_adaptAny)($__global_Data_Array_NonEmpty_unsafeIndex1);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_unsafeIndex'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_unsafemajIndex';


// Data_Array_NonEmpty_toUnfoldable1
function majData_majArray_majNonmajEmpty_tomajUnfoldable1($dictUnfoldable1, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majArray_majNonmajEmpty_tomajUnfoldable1';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Array_NonEmpty_length = ($GLOBALS['Data_Array_NonEmpty_length'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_length'));
  $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
  $__global_Data_Array_NonEmpty_unsafeIndex2 = ($GLOBALS['Data_Array_NonEmpty_unsafeIndex2'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_unsafeIndex2'));
  $__global_Data_Array_NonEmpty_lessThan = ($GLOBALS['Data_Array_NonEmpty_lessThan'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_lessThan'));
  $__global_Data_Array_NonEmpty_sub = ($GLOBALS['Data_Array_NonEmpty_sub'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_sub'));
  $__global_Data_Array_NonEmpty_add = ($GLOBALS['Data_Array_NonEmpty_add'] ?? \Data\Array\NonEmpty\phpurs_eval_thunk('Data_Array_NonEmpty_add'));
  $unfoldr1 = ($dictUnfoldable1)->unfoldr1;
  $len = ($__global_Data_Array_NonEmpty_length)($xs);
  $f = function($i) use ($__global_Partial_Unsafe__unsafePartial, $__global_Data_Array_NonEmpty_unsafeIndex2, $xs, $__global_Data_Array_NonEmpty_lessThan, $__global_Data_Array_NonEmpty_sub, $len, $__global_Data_Array_NonEmpty_add) {
  $__num = \func_num_args();
  $__case_0 = (($__global_Data_Array_NonEmpty_lessThan)($i))((($__global_Data_Array_NonEmpty_sub)($len))(1));
  $__case_res_0 = null;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (($__case_0 === true)) {
if (($__match_0 === false)) {
if (true) {
$__case_res_0 = new Phpurs_Data1("Just", (($__global_Data_Array_NonEmpty_add)($i))(1));
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
if (true) {
if (($__match_0 === false)) {
if (true) {
$__case_res_0 = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  $__res = new Phpurs_Data2("Tuple", ((($__global_Partial_Unsafe__unsafePartial)(function($dollar__unused) use ($__global_Data_Array_NonEmpty_unsafeIndex2) {
  $__num = \func_num_args();
  $__res = $__global_Data_Array_NonEmpty_unsafeIndex2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($xs))($i), $__case_res_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = (($unfoldr1)($f))(0);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Array_NonEmpty_toUnfoldable1'] = __NAMESPACE__ . '\\majData_majArray_majNonmajEmpty_tomajUnfoldable1';


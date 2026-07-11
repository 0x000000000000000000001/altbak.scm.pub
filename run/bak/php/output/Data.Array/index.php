<?php

namespace Data\Array;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {

      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };
$ffi_Data_Array = \call_user_func(function() {
$rangeImpl = function($start, $end = null) use (&$rangeImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$rangeImpl) {

            return $rangeImpl(...array_merge($__args, $more));
        };
    }
    $step = $start > $end ? -1 : 1;
    $result = [];
    $i = $start;
    while ($i !== $end) {
        $result[] = $i;
        $i += $step;
    }
    $result[] = $i;
    return $result;
};

$replicateImpl = function($count, $value = null) use (&$replicateImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$replicateImpl) {

            return $replicateImpl(...array_merge($__args, $more));
        };
    }
    if ($count < 1) return [];
    return array_fill(0, $count, $value);
};

$fromFoldableImpl = function($foldr, $xs = null) use (&$fromFoldableImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$fromFoldableImpl) {

            return $fromFoldableImpl(...array_merge($__args, $more));
        };
    }
    
    $emptyList = new \stdClass();
    $curryCons = function($head, $tail = null) {
        if (func_num_args() < 2) {
            return function($tail) use ($head) {
                $obj = new \stdClass();
                $obj->head = $head;
                $obj->tail = $tail;
                return $obj;
            };
        }
        $obj = new \stdClass();
        $obj->head = $head;
        $obj->tail = $tail;
        return $obj;
    };
    
    $listToArray = function($list) use ($emptyList) {
        $result = [];
        $xs = $list;
        while ($xs !== $emptyList && $xs !== null) {
            $result[] = $xs->head;
            $xs = $xs->tail;
        }
        return $result;
    };
    
    return $listToArray($foldr($curryCons)($emptyList)($xs));
};

$length = function($xs) use (&$length) {
    return count($xs);
};

$unconsImpl = function($empty, $next = null, $xs = null) use (&$unconsImpl) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$unconsImpl) {

            return $unconsImpl(...array_merge($__args, $more));
        };
    }
    if (count($xs) === 0) return $empty((object)[]);
    return $next($xs[0])(array_slice($xs, 1));
};

$indexImpl = function($just, $nothing = null, $xs = null, $i = null) use (&$indexImpl) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$indexImpl) {

            return $indexImpl(...array_merge($__args, $more));
        };
    }
    return ($i < 0 || $i >= count($xs)) ? $nothing : $just($xs[$i]);
};

$findMapImpl = function($nothing, $isJust = null, $f = null, $xs = null) use (&$findMapImpl) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$findMapImpl) {

            return $findMapImpl(...array_merge($__args, $more));
        };
    }
    foreach ($xs as $x) {
        $result = $f($x);
        if ($isJust($result)) return $result;
    }
    return $nothing;
};

$findIndexImpl = function($just, $nothing = null, $f = null, $xs = null) use (&$findIndexImpl) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$findIndexImpl) {

            return $findIndexImpl(...array_merge($__args, $more));
        };
    }
    foreach ($xs as $i => $x) {
        if ($f($x)) return $just($i);
    }
    return $nothing;
};

$findLastIndexImpl = function($just, $nothing = null, $f = null, $xs = null) use (&$findLastIndexImpl) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$findLastIndexImpl) {

            return $findLastIndexImpl(...array_merge($__args, $more));
        };
    }
    for ($i = count($xs) - 1; $i >= 0; $i--) {
        if ($f($xs[$i])) return $just($i);
    }
    return $nothing;
};

$_insertAt = function($just, $nothing = null, $i = null, $a = null, $l = null) use (&$_insertAt) {
    if (func_num_args() < 5) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_insertAt) {

            return $_insertAt(...array_merge($__args, $more));
        };
    }
    if ($i < 0 || $i > count($l)) return $nothing;
    $l1 = $l;
    array_splice($l1, $i, 0, [$a]);
    return $just($l1);
};

$_deleteAt = function($just, $nothing = null, $i = null, $l = null) use (&$_deleteAt) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_deleteAt) {

            return $_deleteAt(...array_merge($__args, $more));
        };
    }
    if ($i < 0 || $i >= count($l)) return $nothing;
    $l1 = $l;
    array_splice($l1, $i, 1);
    return $just($l1);
};

$_updateAt = function($just, $nothing = null, $i = null, $a = null, $l = null) use (&$_updateAt) {
    if (func_num_args() < 5) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_updateAt) {

            return $_updateAt(...array_merge($__args, $more));
        };
    }
    if ($i < 0 || $i >= count($l)) return $nothing;
    $l1 = $l;
    $l1[$i] = $a;
    return $just($l1);
};

$reverse = function($l) use (&$reverse) {
    return array_reverse($l);
};

$concat = function($xss) use (&$concat) {
    if (count($xss) === 0) return [];
    return array_merge(...$xss);
};

$filterImpl = function($f, $xs = null) use (&$filterImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$filterImpl) {

            return $filterImpl(...array_merge($__args, $more));
        };
    }
    $res = [];
    foreach ($xs as $x) {
        if ($f($x)) $res[] = $x;
    }
    return $res;
};

$partitionImpl = function($f, $xs = null) use (&$partitionImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$partitionImpl) {

            return $partitionImpl(...array_merge($__args, $more));
        };
    }
    $yes = [];
    $no = [];
    foreach ($xs as $x) {
        if ($f($x)) $yes[] = $x;
        else $no[] = $x;
    }
    return (object)["yes" => $yes, "no" => $no];
};

$scanlImpl = function($f, $b = null, $xs = null) use (&$scanlImpl) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$scanlImpl) {

            return $scanlImpl(...array_merge($__args, $more));
        };
    }
    $acc = $b;
    $out = [];
    foreach ($xs as $x) {
        $acc = $f($acc)($x);
        $out[] = $acc;
    }
    return $out;
};

$scanrImpl = function($f, $b = null, $xs = null) use (&$scanrImpl) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$scanrImpl) {

            return $scanrImpl(...array_merge($__args, $more));
        };
    }
    $len = count($xs);
    $acc = $b;
    $out = array_fill(0, $len, null);
    for ($i = $len - 1; $i >= 0; $i--) {
        $acc = $f($xs[$i])($acc);
        $out[$i] = $acc;
    }
    return $out;
};

$sortByImpl = function($compare, $fromOrdering = null, $xs = null) use (&$sortByImpl) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$sortByImpl) {

            return $sortByImpl(...array_merge($__args, $more));
        };
    }
    $out = $xs;
    usort($out, function($a, $b) use ($compare, $fromOrdering) {
        return $fromOrdering($compare($a)($b));
    });
    return $out;
};

$sliceImpl = function($s, $e = null, $l = null) use (&$sliceImpl) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$sliceImpl) {

            return $sliceImpl(...array_merge($__args, $more));
        };
    }
    return array_slice($l, $s, $e - $s);
};

$zipWithImpl = function($f, $xs = null, $ys = null) use (&$zipWithImpl) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$zipWithImpl) {

            return $zipWithImpl(...array_merge($__args, $more));
        };
    }
    $l = min(count($xs), count($ys));
    $result = [];
    for ($i = 0; $i < $l; $i++) {
        $result[] = $f($xs[$i])($ys[$i]);
    }
    return $result;
};

$anyImpl = function($p, $xs = null) use (&$anyImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$anyImpl) {

            return $anyImpl(...array_merge($__args, $more));
        };
    }
    foreach ($xs as $x) {
        if ($p($x)) return true;
    }
    return false;
};

$allImpl = function($p, $xs = null) use (&$allImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$allImpl) {

            return $allImpl(...array_merge($__args, $more));
        };
    }
    foreach ($xs as $x) {
        if (!$p($x)) return false;
    }
    return true;
};

$unsafeIndexImpl = function($xs, $n = null) use (&$unsafeIndexImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$unsafeIndexImpl) {

            return $unsafeIndexImpl(...array_merge($__args, $more));
        };
    }
    return $xs[$n];
};

$exports['rangeImpl'] = $rangeImpl;
$exports['replicateImpl'] = $replicateImpl;
$exports['fromFoldableImpl'] = $fromFoldableImpl;
$exports['length'] = $length;
$exports['unconsImpl'] = $unconsImpl;
$exports['indexImpl'] = $indexImpl;
$exports['findMapImpl'] = $findMapImpl;
$exports['findIndexImpl'] = $findIndexImpl;
$exports['findLastIndexImpl'] = $findLastIndexImpl;
$exports['_insertAt'] = $_insertAt;
$exports['_deleteAt'] = $_deleteAt;
$exports['_updateAt'] = $_updateAt;
$exports['reverse'] = $reverse;
$exports['concat'] = $concat;
$exports['filterImpl'] = $filterImpl;
$exports['partitionImpl'] = $partitionImpl;
$exports['scanlImpl'] = $scanlImpl;
$exports['scanrImpl'] = $scanrImpl;
$exports['sortByImpl'] = $sortByImpl;
$exports['sliceImpl'] = $sliceImpl;
$exports['zipWithImpl'] = $zipWithImpl;
$exports['anyImpl'] = $anyImpl;
$exports['allImpl'] = $allImpl;
$exports['unsafeIndexImpl'] = $unsafeIndexImpl;
return $exports;
});
$GLOBALS['Data_Array_fromFoldableImpl'] = $ffi_Data_Array['fromFoldableImpl'] ?? null;
$GLOBALS['Data_Array_rangeImpl'] = $ffi_Data_Array['rangeImpl'] ?? null;
$GLOBALS['Data_Array_replicateImpl'] = $ffi_Data_Array['replicateImpl'] ?? null;
$GLOBALS['Data_Array_length'] = $ffi_Data_Array['length'] ?? null;
$GLOBALS['Data_Array_unconsImpl'] = $ffi_Data_Array['unconsImpl'] ?? null;
$GLOBALS['Data_Array_indexImpl'] = $ffi_Data_Array['indexImpl'] ?? null;
$GLOBALS['Data_Array_findMapImpl'] = $ffi_Data_Array['findMapImpl'] ?? null;
$GLOBALS['Data_Array_findIndexImpl'] = $ffi_Data_Array['findIndexImpl'] ?? null;
$GLOBALS['Data_Array_findLastIndexImpl'] = $ffi_Data_Array['findLastIndexImpl'] ?? null;
$GLOBALS['Data_Array__insertAt'] = $ffi_Data_Array['_insertAt'] ?? null;
$GLOBALS['Data_Array__deleteAt'] = $ffi_Data_Array['_deleteAt'] ?? null;
$GLOBALS['Data_Array__updateAt'] = $ffi_Data_Array['_updateAt'] ?? null;
$GLOBALS['Data_Array_reverse'] = $ffi_Data_Array['reverse'] ?? null;
$GLOBALS['Data_Array_concat'] = $ffi_Data_Array['concat'] ?? null;
$GLOBALS['Data_Array_filterImpl'] = $ffi_Data_Array['filterImpl'] ?? null;
$GLOBALS['Data_Array_partitionImpl'] = $ffi_Data_Array['partitionImpl'] ?? null;
$GLOBALS['Data_Array_scanlImpl'] = $ffi_Data_Array['scanlImpl'] ?? null;
$GLOBALS['Data_Array_scanrImpl'] = $ffi_Data_Array['scanrImpl'] ?? null;
$GLOBALS['Data_Array_sortByImpl'] = $ffi_Data_Array['sortByImpl'] ?? null;
$GLOBALS['Data_Array_sliceImpl'] = $ffi_Data_Array['sliceImpl'] ?? null;
$GLOBALS['Data_Array_zipWithImpl'] = $ffi_Data_Array['zipWithImpl'] ?? null;
$GLOBALS['Data_Array_anyImpl'] = $ffi_Data_Array['anyImpl'] ?? null;
$GLOBALS['Data_Array_allImpl'] = $ffi_Data_Array['allImpl'] ?? null;
$GLOBALS['Data_Array_unsafeIndexImpl'] = $ffi_Data_Array['unsafeIndexImpl'] ?? null;




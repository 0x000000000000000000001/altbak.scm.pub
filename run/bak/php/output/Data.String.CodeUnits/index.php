<?php

namespace Data\String\CodeUnits;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.String.CodeUnits/index.php';
require_once __DIR__ . '/../Data.String.Pattern/index.php';
require_once __DIR__ . '/../Data.String.Unsafe/index.php';

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
$ffi_Data_String_CodeUnits = \call_user_func(function() {
$fromCharArray = function($a) use (&$fromCharArray) {
    return implode("", $a);
};

$toCharArray = function($s) use (&$toCharArray) {
    if ($s === "") return [];
    return str_split($s);
};

$singleton = function($c) use (&$singleton) {
    return $c;
};

$_charAt = function($just, $nothing = null, $i = null, $s = null) use (&$_charAt) {
    if (\func_num_args() < 4) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_charAt) {

            return $_charAt(...\array_merge($__args, $more));
        };
    }
    return ($i >= 0 && $i < strlen($s)) ? $just($s[$i]) : $nothing;
};

$_toChar = function($just, $nothing = null, $s = null) use (&$_toChar) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_toChar) {

            return $_toChar(...\array_merge($__args, $more));
        };
    }
    return strlen($s) === 1 ? $just($s) : $nothing;
};

$length = function($s) use (&$length) {
    return strlen($s);
};

$countPrefix = function($p, $s = null) use (&$countPrefix) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$countPrefix) {

            return $countPrefix(...\array_merge($__args, $more));
        };
    }
    $i = 0;
    $len = strlen($s);
    while ($i < $len && $p($s[$i])) {
        $i++;
    }
    return $i;
};

$_indexOf = function($just, $nothing = null, $x = null, $s = null) use (&$_indexOf) {
    if (\func_num_args() < 4) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_indexOf) {

            return $_indexOf(...\array_merge($__args, $more));
        };
    }
    $i = strpos($s, $x);
    return $i === false ? $nothing : $just($i);
};

$_indexOfStartingAt = function($just, $nothing = null, $x = null, $startAt = null, $s = null) use (&$_indexOfStartingAt) {
    if (\func_num_args() < 5) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_indexOfStartingAt) {

            return $_indexOfStartingAt(...\array_merge($__args, $more));
        };
    }
    if ($startAt < 0 || $startAt > strlen($s)) return $nothing;
    $i = strpos($s, $x, $startAt);
    return $i === false ? $nothing : $just($i);
};

$_lastIndexOf = function($just, $nothing = null, $x = null, $s = null) use (&$_lastIndexOf) {
    if (\func_num_args() < 4) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_lastIndexOf) {

            return $_lastIndexOf(...\array_merge($__args, $more));
        };
    }
    if ($x === "") {
        return $just(strlen($s));
    }
    $i = strrpos($s, $x);
    return $i === false ? $nothing : $just($i);
};

$_lastIndexOfStartingAt = function($just, $nothing = null, $x = null, $startAt = null, $s = null) use (&$_lastIndexOfStartingAt) {
    if (\func_num_args() < 5) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_lastIndexOfStartingAt) {

            return $_lastIndexOfStartingAt(...\array_merge($__args, $more));
        };
    }
    if ($x === "") return $just(\min($startAt, strlen($s)));
    if ($startAt < 0) return $nothing;
    if ($startAt > strlen($s)) $startAt = strlen($s);
    $i = strrpos(substr($s, 0, $startAt + strlen($x)), $x);
    // JS lastIndexOf searches backwards from startAt. PHP strrpos searches the whole string up to offset, or with negative offset.
    // Equivalent logic:
    $sub = substr($s, 0, $startAt + strlen($x));
    $pos = strrpos($sub, $x);
    if ($pos !== false && $pos <= $startAt) {
        return $just($pos);
    }
    return $nothing;
};

$take = function($n, $s = null) use (&$take) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$take) {

            return $take(...\array_merge($__args, $more));
        };
    }
    return substr($s, 0, $n);
};

$drop = function($n, $s = null) use (&$drop) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$drop) {

            return $drop(...\array_merge($__args, $more));
        };
    }
    return substr($s, $n);
};

$slice = function($b, $e = null, $s = null) use (&$slice) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$slice) {

            return $slice(...\array_merge($__args, $more));
        };
    }
    // JS slice with negative indices
    $len = strlen($s);
    if ($b < 0) $b = \max($len + $b, 0);
    else $b = \min($b, $len);
    if ($e < 0) $e = \max($len + $e, 0);
    else $e = \min($e, $len);
    if ($e <= $b) return "";
    return substr($s, $b, $e - $b);
};

$splitAt = function($i, $s = null) use (&$splitAt) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$splitAt) {

            return $splitAt(...\array_merge($__args, $more));
        };
    }
    return (object)[
        "before" => substr($s, 0, $i),
        "after" => substr($s, $i)
    ];
};

$exports['fromCharArray'] = $fromCharArray;
$exports['toCharArray'] = $toCharArray;
$exports['singleton'] = $singleton;
$exports['_charAt'] = $_charAt;
$exports['_toChar'] = $_toChar;
$exports['length'] = $length;
$exports['countPrefix'] = $countPrefix;
$exports['_indexOf'] = $_indexOf;
$exports['_indexOfStartingAt'] = $_indexOfStartingAt;
$exports['_lastIndexOf'] = $_lastIndexOf;
$exports['_lastIndexOfStartingAt'] = $_lastIndexOfStartingAt;
$exports['take'] = $take;
$exports['drop'] = $drop;
$exports['slice'] = $slice;
$exports['splitAt'] = $splitAt;
return $exports;
});
$GLOBALS['Data_String_CodeUnits_singleton'] = $ffi_Data_String_CodeUnits['singleton'] ?? null;
$GLOBALS['Data_String_CodeUnits_fromCharArray'] = $ffi_Data_String_CodeUnits['fromCharArray'] ?? null;
$GLOBALS['Data_String_CodeUnits_toCharArray'] = $ffi_Data_String_CodeUnits['toCharArray'] ?? null;
$GLOBALS['Data_String_CodeUnits__charAt'] = $ffi_Data_String_CodeUnits['_charAt'] ?? null;
$GLOBALS['Data_String_CodeUnits__toChar'] = $ffi_Data_String_CodeUnits['_toChar'] ?? null;
$GLOBALS['Data_String_CodeUnits_length'] = $ffi_Data_String_CodeUnits['length'] ?? null;
$GLOBALS['Data_String_CodeUnits_countPrefix'] = $ffi_Data_String_CodeUnits['countPrefix'] ?? null;
$GLOBALS['Data_String_CodeUnits__indexOf'] = $ffi_Data_String_CodeUnits['_indexOf'] ?? null;
$GLOBALS['Data_String_CodeUnits__indexOfStartingAt'] = $ffi_Data_String_CodeUnits['_indexOfStartingAt'] ?? null;
$GLOBALS['Data_String_CodeUnits__lastIndexOf'] = $ffi_Data_String_CodeUnits['_lastIndexOf'] ?? null;
$GLOBALS['Data_String_CodeUnits__lastIndexOfStartingAt'] = $ffi_Data_String_CodeUnits['_lastIndexOfStartingAt'] ?? null;
$GLOBALS['Data_String_CodeUnits_take'] = $ffi_Data_String_CodeUnits['take'] ?? null;
$GLOBALS['Data_String_CodeUnits_drop'] = $ffi_Data_String_CodeUnits['drop'] ?? null;
$GLOBALS['Data_String_CodeUnits_slice'] = $ffi_Data_String_CodeUnits['slice'] ?? null;
$GLOBALS['Data_String_CodeUnits_splitAt'] = $ffi_Data_String_CodeUnits['splitAt'] ?? null;



